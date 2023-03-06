<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriqueFactures extends Model
{
    use HasFactory;
    protected $table = 'historique_factures';

    protected $fillable = [
        'montant',
        'etat',
        'facture_id',
    ];

    public function facture()
    {
        return $this->belongsTo(Facture::class);
    }
}
