<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Chambre;

class ChambreImage extends Model
{
    use HasFactory;

    protected $table = 'chambre_images';

    protected $fillable = [
        'chambre_id',
        'filename',
    ];

    public function chambre()
    {
        return $this->belongsTo(Chambre::class);
    }
}
