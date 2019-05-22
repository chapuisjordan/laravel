<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function voyage()
    {
        return $this->belongsTo('App\Voyage');
    }
}
