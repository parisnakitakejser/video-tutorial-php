<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    use HasFactory;

    function user() {
        return $this->belongsTo('App\Models\User');
    }

    function units() {
        return $this->belongsTo('App\Models\Units');
    }

    function recipes() {
        return $this->belongsToMany('App\Models\Recipes', 'recipes_to_ingredients', 'ingredients_id', 'recipes_id')->withPivot([
            'units_id',
            'quantity'
        ])->withTimestamps();
    }
}
