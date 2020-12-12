<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Units extends Model
{
    use HasFactory;

    function ingredients() {
        return $this->hasMany('App\Models\Ingredients');
    }

    function unit_groups() {
        return $this->belongsTo('App\Models\UnitGroups');
    }
}
