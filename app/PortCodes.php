<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortCodes extends Model
{
    protected $fillable = [
        'port_code',
        'port_city',
    ];
}
