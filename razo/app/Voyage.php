<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    public function destination()
    {
        return $this->hasOne('App\Destination');
    }

    public function image()
    {
        return $this->hasMany('App\Image');
    }
}
