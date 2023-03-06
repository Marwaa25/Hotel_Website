<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;

    protected $table = 'chambre';

    protected $fillable = [
        'ID_Chambre',
        'Type_de_chambre',
        'Etage',
        'Prix_par_nuit',
        'Disponibilité'
    ];
   

    
}