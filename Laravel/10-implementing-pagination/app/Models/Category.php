<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    function posts() {
        return $this->belongsToMany('App\Models\Posts', 'posts_to_category', 'categorys_id', 'posts_id')->withTimestamps();
    }
}
