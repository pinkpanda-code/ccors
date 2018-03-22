<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ship_cabin extends Model
{
    protected $table = 'ship_cabin';
    public $timestamps = false;

    protected $fillable = [

        'ship_id',
        'cabin_id',
        'cabin_price',
        'cabin_total'

    ];


}
