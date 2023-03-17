<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_reservation',
        'chambre_id',
        'email',
        'date_arrivee',
        'date_depart',
        'payment_method'

    ];
    public function chambre()
    {
        return $this->belongsTo(Chambre::class);
    }
}
