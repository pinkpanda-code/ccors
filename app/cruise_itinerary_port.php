<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cruise_itinerary_port extends Model
{
    protected $table = 'cruise_itinerary_port';
    public $timestamps = false;

    protected $fillable = [

        'cruise_id',
        'port_id'

    ];
}
