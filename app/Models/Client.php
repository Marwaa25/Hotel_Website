<?php

namespace App\Models;


use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Client extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;
   
    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'email',
        'password',
        'adresse',
    ];
    protected $hidden = [
        'password',
        'created_at',
        'updated_at',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function factures()
    {
        return $this->hasMany(Facture::class);
    }
}
