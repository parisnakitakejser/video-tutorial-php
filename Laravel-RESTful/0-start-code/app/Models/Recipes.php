<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    use HasFactory;

    function groups() {
        return $this->belongsTo('App\Models\Groups');
    }

    function user() {
        return $this->belongsTo('App\Models\User');
    }

    function ingredients() {
        return $this->belongsToMany('App\Models\Recipes', 'recipes_to_ingredients', 'recipes_id', 'ingredients_id')->withPivot([
            'units_id',
            'quantity'
        ])->withTimestamps();
    }

    function tags() {
        return $this->belongsToMany('App\Models\Tags', 'recipes_to_tags', 'recipes_id', 'tags_id')->withTimestamps();
    }
}
