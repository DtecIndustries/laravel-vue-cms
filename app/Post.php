<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /* user */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
