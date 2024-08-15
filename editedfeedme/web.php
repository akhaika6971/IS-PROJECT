<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatabaseTestController;

use App\Http\Controllers\ClaimController;


use Illuminate\Support\Facades\Auth;



// Define the route for the homepage
Route::get('/', function () {
    return view('homepage1');
});

Route::view('/about', 'about')->name('about');
// Define the route for the login form and handling login submission

use App\Http\Controllers\LoginController;
Route::get('/login', [LoginController::class, 'showForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
 // In a route definition
 use App\Http\Controllers\LogoutController;
 Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

// Define the route for the signup form and handling submission
use App\Http\Controllers\SignupController;
Route::get('/signup', [SignupController::class, 'showForm'])->name('signup.form');
Route::post('/signup', [SignupController::class, 'register'])->name('signup.register');


// Define the route for the homepage1
use App\Http\Controllers\Homepage1Controller;
Route::get('/homepage1', [Homepage1Controller::class, 'index'])->name('homepage1');

//Define the route for homepage2
use App\Http\Controllers\Homepage2Controller;
Route::get('/homepage2', [Homepage2Controller::class, 'index'])->name('homepage2');

Route::get('/test-db', [DatabaseTestController::class, 'testConnection']);

// Route to claim a donation
Route::post('/donation/{donationID}/claim', [ClaimController::class, 'claimDonation'])->middleware('auth');


// Route to get all claims for the authenticated user
Route::get('/user/claims', [ClaimController::class, 'userClaims'])->middleware('auth');

// Route to get all claims (admin or for further management)
Route::get('/claims', [ClaimController::class, 'allClaims'])->middleware('auth'); // Adjust middleware as needed


use App\Http\Controllers\ProfileController;
Route::middleware(['auth'])->group(function () {
    Route::get('/profile/show', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});

use App\Http\Controllers\DonationController;
Route::get('/donations/create', [DonationController::class, 'showForm'])->name('donations.create');
Route::post('/donations', [DonationController::class, 'store'])->name('donations.store');
return view('donations');


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

use App\Http\Controllers\GroceryStoreDonationsController;
Route::get('/grocerydonations', [GroceryStoreDonationsController::class, 'index'])->name('grocerydonations');

use App\Http\Controllers\HospitalityEstablishmentDonationsController;
Route::get('/hospitalitydonations', [HospitalityEstablishmentDonationsController::class, 'index'])->name('hospitalitydonations');

use App\Http\Controllers\HouseholdDonationsController;
Route::get('/household-donations', [HouseholdDonationsController::class, 'index'])->name('householddonations');


use App\Http\Controllers\AllDonationsController;

Route::middleware('auth')->get('/donations', [AllDonationsController::class, 'index']);

