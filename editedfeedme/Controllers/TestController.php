<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function showprofile()
    {
        return view('profile');
    }

    /*public function showAnotherView()
    {
        return view('donations');
    }*/
}
