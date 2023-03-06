<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $table = 'hotel';

    protected $fillable = [
        'name-hotel',
        'adresse-hotel',
        'CP-hotel',
        'tele-hotel',
        'email-hotel',
        'site-hotel',
        'nb-etoiles'
    ];

}