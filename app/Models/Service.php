<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';

    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    public function reservations()
    {
        return $this->belongsToMany(Reservation::class)->withPivot('quantity', 'total_price');
    }
}
