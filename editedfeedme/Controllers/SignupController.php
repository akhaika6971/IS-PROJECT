<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class SignupController extends Controller
{
    // Show the sign-up form
    public function showForm()
    {
        return view('signup'); // Ensure you have a signup.blade.php in resources/views
    }

    // Handle form submission
    public function register(Request $request)
    {
        // Validate user input
        $validator = Validator::make($request->all(), [
            'userName' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'email' => 'required|email|unique:users,email',
            'userRole' => 'required|in:hospitality_establishment,user,grocery_store,household',
            'userlocation' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Hash the password
        $hashed_password = Hash::make($request->password);

        // Insert user data into the database
        User::create([
            'userName' => $request->userName,
            'password' => $hashed_password,
            'email' => $request->email,
            'userlocation' => $request->userlocation,
            'userRole' => $request->userRole,
        ]);

        return redirect()->route('homepage2')->with('success', 'User Created Successfully.');
    }
}
