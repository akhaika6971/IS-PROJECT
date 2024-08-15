<?php

// app/Models/Donation.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    // Specify the table associated with the model (optional, if different from the default 'donations')
    protected $table = 'donation';

    // Specify the primary key if different from the default 'id' (optional)
    protected $primaryKey = 'donationID';

    // Disable timestamps if not using Laravel's created_at and updated_at fields
    public $timestamps = true;

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'userID',
        'userRole',
        'donationImagepath',
        'donationItemname',
        'donationQuantity',
        'donationUnit',
        'donationExpirydate',
        'donationLocation',
    ];

    // Optionally, if you need to cast attributes to specific types
    protected $casts = [
        'donationExpirydate' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userID');
    }

    public function getDonationImageUrlAttribute()
    {
        return $this->donationImagepath ? asset('storage/' . $this->donationImagepath) : null;
    }
}
