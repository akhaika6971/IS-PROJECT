<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class GroceryStoreDonationsController extends Controller
{
    public function index()
    {    
        // Fetch donations where userRole is 'grocery store'
        $donations = Donation::where('userRole', 'grocery_store')->get();

        // Return the view with the donations data
        return view('/grocerydonations', compact('donations'));
    }
}

