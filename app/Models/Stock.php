<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'type', 'description', 'quantite'];

    // Add any relationships or custom methods you need for your application
}
