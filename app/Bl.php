<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bl extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bl_number',
        'port_id',
        'vesselle_id',
        'arrival_date',
        'cargo_type',
        'shipper',
        'order',
        'commodity',
        'number_of_20',
        'number_of_40',
        'container_20',
        'container_40'
    ];

    public function loading()
    {
        return $this->hasOne('App\Loading');
    }

    public function vessel()
    {
        return $this->belongsTo('App\Vesselle');
    }
}
