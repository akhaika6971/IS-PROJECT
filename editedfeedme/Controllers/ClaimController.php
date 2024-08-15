<?php

// app/Http/Controllers/ClaimController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Claim;
use App\Models\Donation;
use Illuminate\Support\Facades\Auth;

class ClaimController extends Controller
{
    /**
     * Handle the process of claiming a donation.
     *
     * @param int $donationID
     * @return \Illuminate\Http\Response
     */
    public function claimDonation($donationID)
    {
        // Ensure the donation exists
        $donation = Donation::find($donationID);

        if (!$donation) {
            return response()->json(['message' => 'Donation not found'], 404);
        }

        // Ensure the user is authenticated
        $userID = Auth::id(); // Get the currently authenticated user's ID

        // Check if the user has already claimed this donation
        $existingClaim = Claim::where('userID', $userID)
            ->where('donationID', $donationID)
            ->first();

        if ($existingClaim) {
            return response()->json(['message' => 'You have already claimed this donation'], 400);
        }

        // Create a new claim
        $claim = Claim::create([
            'userID' => $userID,
            'donationID' => $donationID,
        ]);

        // Optionally, update the donation status
        // $donation->update(['status' => 'claimed']); // If you have a status field

        return response()->json(['message' => 'Donation claimed successfully', 'claim' => $claim], 201);
    }

    /**
     * List all claims for the authenticated user.
     *
     * @return \Illuminate\Http\Response
     */
    public function userClaims()
    {
        $userID = Auth::id(); // Get the currently authenticated user's ID

        // Fetch all claims made by the user
        $claims = Claim::where('userID', $userID)->with('donation')->get();

        return response()->json(['claims' => $claims]);
    }

    /**
     * List all claims (admin view).
     *
     * @return \Illuminate\Http\Response
     */
    public function allClaims()
    {
        // Fetch all claims with user and donation details
        $claims = Claim::with('user', 'donation')->get();

        return response()->json(['claims' => $claims]);
    }
}
