<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venues extends Model
{
    use HasFactory;

    protected $fillable = [
        'venueName',
        'venueLink',
        'venueImage',
        'venueCost',
        'UserID'
    ];
}
