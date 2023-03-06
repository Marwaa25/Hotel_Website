<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Facture extends Model
{
    use HasFactory;

    protected $table = 'factures';

    protected $fillable = [
        'date_facturation',
        'date_paiement',
        'montant',
        // 'client_id',
        // 'reservation_id',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }

    public function historiqueFactures()
    {
        return $this->hasMany(HistoriqueFacture::class);
    }
}
