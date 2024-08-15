<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homepage1Controller extends Controller
{
    /**
     * Show the application homepage.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('homepage1');
    }
}

