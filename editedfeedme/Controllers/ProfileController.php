<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        dd($user);
        return view('profile.show', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'userName' => 'required|string|max:255',
            'userlocation' => 'required|string|max:255',
        ]);

        $user = Auth::user();
        dd($request->all());
        $user->userName = $request->userName;
        $user->userlocation = $request->userlocation;
        $user->save();

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
    }
}

