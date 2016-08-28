<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    public function character()
    {
        return $this->belongsTo('App\Character');
    }
}
