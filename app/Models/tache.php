<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID_Personnel',
        'description_tache',
        'date_debut',
        'date_fin',
    ];

    public function personnel()
    {
        return $this->belongsTo(Personnel::class, 'ID_Personnel');
    }
}
