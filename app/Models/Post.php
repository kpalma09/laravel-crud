<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Relación inversa: Un post pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación muchos a muchos: Un post tiene muchas etiquetas
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
