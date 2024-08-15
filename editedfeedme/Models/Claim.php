<?php

// app/Models/Claim.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    use HasFactory;

    protected $table = 'claims';

    protected $fillable = [
        'userID',
        'donationID',
    ];

    // Define relationships if needed
    public function user()
    {
        return $this->belongsTo(User::class, 'userID', 'id');
    }

    public function donation()
    {
        return $this->belongsTo(Donation::class, 'donationID', 'donationID');
    }
}
