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
    public function isDisponible($dateArrivee, $dateDepart)
    {
        $reservations = $this->reservations()
            ->where(function ($query) use ($dateArrivee, $dateDepart) {
                $query->where('date_arrivee', '>=', $dateArrivee)
                    ->where('date_arrivee', '<', $dateDepart);
            })
            ->orWhere(function ($query) use ($dateArrivee, $dateDepart) {
                $query->where('date_depart', '>', $dateArrivee)
                    ->where('date_depart', '<=', $dateDepart);
            })
            ->get();

        return $reservations->isEmpty();
    }
}
