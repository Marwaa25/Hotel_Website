<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ChambreImage;

class Chambre extends Model
{
    use HasFactory;

    protected $table = 'chambre';

    protected $fillable = [
        'ID_Chambre',
        'Type_de_chambre',
        'Etage',
        'Prix_par_nuit',
        'disponibilite',
        'image',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function images()
    {
        return $this->hasMany(ChambreImage::class, 'chambre_id');
    }
}
