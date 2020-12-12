<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    function recipes() {
        return $this->belongsToMany('App\Models\Recipes', 'recipes_to_tags', 'tags_id', 'recipes_id')->withTimestamps();
    }
}
