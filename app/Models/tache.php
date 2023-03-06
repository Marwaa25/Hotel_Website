<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;

    protected $table = 'tache';

    protected $fillable = [
        'ID_Personnel',
        'Description-tache',
        'Datedébut',
        'Datefin'
    ];

}