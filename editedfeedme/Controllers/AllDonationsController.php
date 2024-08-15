<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class AllDonationsController extends Controller
{
    public function index()
    {
        // Fetch all donations from the database
        $donations = Donation::all();

        // Pass the donations data to the view
        return view('donations.index', compact('donations'));
    }
}
