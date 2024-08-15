<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class HospitalityEstablishmentDonationsController extends Controller
{
    public function index()
    {    
        // Fetch donations where userRole is 'hospitality establishment'
        $donations = Donation::where('userRole', 'hospitality_establishment')->get();

        // Return the view with the donations data
        return view('/hospitalitydonations', compact('donations'));
    }
}
