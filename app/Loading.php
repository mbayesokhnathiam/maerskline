<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loading extends Model
{
    public function bl()
    {
        return $this->belongsToMany('App\Bl');
    }
}
