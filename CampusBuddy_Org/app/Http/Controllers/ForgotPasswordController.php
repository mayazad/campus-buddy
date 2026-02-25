<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ForgotPasswordController extends Controller
{
    // Shorthand: always query user_db
    private function userDb()
    {
        return DB::connection('user_db');
    }

    // Show the "Forgot Password" email request form
    public function showForgotForm()
    {
        return view('password.forgot');
    }

    // Handle the forgot-password form submission – send reset link
    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $email = $request->input('email');

        // Check if this email exists in user_db → users
        $user = $this->userDb()->table('users')->where('email', $email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'No account found with that email address.'])->withInput();
        }

        // Delete any existing token for this email
        $this->userDb()->table('password_reset_tokens')->where('email', $email)->delete();

        // Generate a secure token
        $token = Str::random(64);

        $this->userDb()->table('password_reset_tokens')->insert([
            'email'      => $email,
            'token'      => Hash::make($token),
            'created_at' => Carbon::now(),
        ]);

        // Build the reset URL
        $resetUrl = url('/reset-password?token=' . $token . '&email=' . urlencode($email));

        // Send mail (uses MAIL_MAILER from .env – defaults to "log" in dev)
        Mail::send('emails.password_reset', ['resetUrl' => $resetUrl, 'user' => $user], function ($message) use ($email) {
            $message->to($email)->subject('CampusBuddy – Reset Your Password');
        });

        return redirect()->route('forgot-password')->with('success_message',
            'A password reset link has been sent to your email address.');
    }

    // Show the "Reset Password" form
    public function showResetForm(Request $request)
    {
        $token = $request->query('token');
        $email = $request->query('email');

        return view('password.reset', compact('token', 'email'));
    }

    // Handle the new-password form submission
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'token'    => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        $email    = $request->input('email');
        $token    = $request->input('token');
        $password = $request->input('password');

        // Find the reset record in user_db
        $record = $this->userDb()->table('password_reset_tokens')->where('email', $email)->first();

        if (!$record || !Hash::check($token, $record->token)) {
            return back()->withErrors(['token' => 'This password reset link is invalid or has expired.']);
        }

        // Tokens expire after 60 minutes
        if (Carbon::parse($record->created_at)->addMinutes(60)->isPast()) {
            $this->userDb()->table('password_reset_tokens')->where('email', $email)->delete();
            return back()->withErrors(['token' => 'This password reset link has expired. Please request a new one.']);
        }

        // Update the user's password in user_db
        $this->userDb()->table('users')->where('email', $email)->update([
            'password'   => Hash::make($password),
            'updated_at' => Carbon::now(),
        ]);

        // Delete the used token
        $this->userDb()->table('password_reset_tokens')->where('email', $email)->delete();

        return redirect()->route('login')->with('success_message',
            'Your password has been reset successfully. Please sign in.');
    }
}
