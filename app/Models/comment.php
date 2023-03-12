<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $primaryKey = 'id';
    protected $fillable = ['ID_Client', 'Comment', 'Note', 'datecomment'];

    public function client()
    {
        return $this->belongsTo(Client::class, 'ID_Client');
    }
}
