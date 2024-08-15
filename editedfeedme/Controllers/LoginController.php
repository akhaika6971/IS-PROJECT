<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    // Show the login form
    public function showForm()
    {
        return view('login');
    }

    // login submission logic
    public function login(Request $request)
    {
        // Validate user input
        $validator = Validator::make($request->all(), [
            'email' => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $adminEmails = [
                'juls@gmail.com', // Replace with the email of the user you want to be an admin
                //'anotheradmin@example.com', // Add more admin emails if needed
            ];
            if (in_array($user->email, $adminEmails)) {
                return redirect()->away('http://127.0.0.1:8000/admin/auth/login');
            }

                
            return redirect()->route('homepage2')->with('success', 'Logged in successfully.');
        }

        //failed login
        return redirect()->back()->with('error', 'Invalid email or password.');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('homepage1');
    }
    }
