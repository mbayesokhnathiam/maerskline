<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bl extends Model
{
    public function loading()
    {
        return $this->hasOne('App\Loading');
    }

    public function vessel()
    {
        return $this->belongsTo('App\Vesselle');
    }
}
