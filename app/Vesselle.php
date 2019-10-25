<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vesselle extends Model
{
    protected $fillable = [
        'name',
        'shipping_id'
    ];

    public function shipping()
    {
        return $this->belongsTo('App\Shipping', 'foreign_key');
    }

    public function bl()
    {
        return $this->hasMany('App\Bl');
    }
}
