<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /* mass assignment */
    protected $fillable = ['user_id', 'title', 'body', 'image'];

    /* user */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
