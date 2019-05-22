<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    public function voyage()
    {
        return $this->belongsTo('App\Voyage');
    }

}