<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class DonationController extends Controller

{


    public function showForm()
    {
        return view('donations'); // Ensure you have a donations.blade.php in resources/views
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'donationItemname' => 'required|string|max:255',
                'donationQuantity' => 'required|integer',
                'donationUnit' => 'required|string|max:255',
                'donationExpirydate' => 'required|date',
                'donationLocation' => 'required|string|max:255',
                'donationImagepath' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $donation = new Donation();
            $donation->userID = Auth::id();
            $donation->userRole = $request->userRole; 
            $donation->donationItemname = $request->donationItemname;
            $donation->donationQuantity = $request->donationQuantity;
            $donation->donationUnit = $request->donationUnit;
            $donation->donationExpirydate = $request->donationExpirydate;
            $donation->donationLocation = $request->donationLocation;

            if ($request->hasFile('donationImagepath')) {
                $path = $request->file('donationImagepath')->store('donations', 'public');
                $donation->donationImagepath = $path;
            }

            $donation->save();

            return redirect()->route('homepage2')->with('success', 'Donation added successfully.');
        }

        return view('donations');
    }


}
