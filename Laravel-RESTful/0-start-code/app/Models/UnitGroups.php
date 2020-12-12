<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitGroups extends Model
{
    use HasFactory;

    function units() {
        return $this->hasMany('App\Models\Units');
    }
}
