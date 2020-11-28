<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['title', 'name', 'content'];
    protected $table = 'posts';

    function comments() {
        return $this->hasMany('App\Models\Comments');
    }

    function categorys() {
        return $this->belongsToMany('App\Models\Category', 'posts_to_category', 'posts_id', 'categorys_id')->withTimestamps();
    }
}
