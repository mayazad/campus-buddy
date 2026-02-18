<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        $login = $request->input('login');
        $password = $request->input('password');

        // Check against users table for either email or student_id
        $user = DB::table('users')
                    ->where(function($query) use ($login) {
                        $query->where('email', $login)
                              ->orWhere('student_id', $login);
                    })
                    ->first();

        if ($user && Hash::check($password, $user->password)) { 
            session([
                'user' => [
                    'id' => $user->id,
                    'full_name' => $user->name,
                    'email' => $user->email,
                    'user_type' => $user->user_type, // Changed from role to user_type
                ]
            ]);

            return redirect()->route('dashboard');
        }



        return back()->withErrors(['login' => 'Check your email/Id/Password to log in'])->withInput();
    }

    public function logout()
    {
        session()->forget('user');
        session()->flush();
        return redirect()->route('login');
    }


}
