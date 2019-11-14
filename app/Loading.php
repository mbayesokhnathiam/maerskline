<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loading extends Model
{
    protected $fillable = [
                            'port_id',
                            'place',
                            'route',
                            'country',
                            'cluster',
    ];

    public function bl()
    {
        return $this->belongsToMany('App\Bl');
    }
}
