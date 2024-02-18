<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    // Por favor deixar os nomes em ingles
    // fillable ou hidden
    protected $fillable = ['title', 'artist', 'album', 'price', 'explict'];
}
