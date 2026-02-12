<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
