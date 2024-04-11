<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rsvp extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name',
        'PlusOne',
        'PlusOneName',
        'PotLuckAnswer',
        'PotLuckResponse'
    ];
}
