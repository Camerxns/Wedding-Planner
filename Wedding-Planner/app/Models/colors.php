<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class colors extends Model
{
    use HasFactory;

    protected $fillable = [
        'PrimaryColor',
        'SecondaryColor',
        'AdditionalColors',
        'UserID'
    ];
}
