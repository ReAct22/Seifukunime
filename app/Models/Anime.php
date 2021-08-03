<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;

    public function genre(){
        return $this->belongsTo(Genre::class, 'genre_id', 'id');
    }
}


