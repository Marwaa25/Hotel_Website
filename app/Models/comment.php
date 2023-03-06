<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    use HasFactory, SoftDeletes;

    protected $table = 'comment';

    protected $fillable = [
        'ID_Chambre',
        'Type de chambre',
        'Etage',
        'Prix-par-nuit',
        'Disponibilité'
    ];

}