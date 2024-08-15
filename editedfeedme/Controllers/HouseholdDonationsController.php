<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class HouseholdDonationsController extends Controller
{
    public function index()
    {    
        
        // Fetch donations where userRole is 'household'
        $donations = donation::where('userRole', 'household')->get();

         //Return the view with the donations data
        return view('household-donations', compact('donations'));
    
    }
}
