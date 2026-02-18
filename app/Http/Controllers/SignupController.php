<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SignupController extends Controller
{
    public function index()
    {
        return view('signup.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'student_id' => 'required|string|max:255|unique:users,student_id',
            'varsity_mail' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'registration_type' => 'required|in:student,cr',
            'department' => 'nullable|required_if:registration_type,cr',
            'batch' => 'nullable|required_if:registration_type,cr',
            'semester' => 'nullable|required_if:registration_type,cr',
            'section' => 'nullable|required_if:registration_type,cr',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        // Prepare data for insertion
        $data = [
            'name' => $request->full_name,
            'email' => $request->varsity_mail,
            'password' => Hash::make($request->password),
            'student_id' => $request->student_id,
            'user_type' => $request->registration_type,
            'department' => $request->department,
            'batch' => $request->batch,
            'semester' => $request->semester,
            'section' => $request->section,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        // Insert into users
        $userId = DB::table('users')->insertGetId($data);

        // Redirect to login with success message
        return redirect()->route('login')->with('success_message', 'Registration successful! Please sign in.');
    }
}
