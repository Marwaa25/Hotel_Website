<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_reservation',
        'id_chambre',
        'email',
        'date_arrivee',
        'date_depart'
    ];
    public function chambre()
    {
        return $this->belongsTo(Chambre::class);
    }
}
