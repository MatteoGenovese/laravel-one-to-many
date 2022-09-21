<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'author',
        'post_date',
        'post_image',
        'post_content'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
