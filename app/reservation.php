<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    protected $table = 'reservation';
    public $primaryKey = 'resv_id';
    public $timestamps = false;

    protected $fillable = [

        'cust_id',
        'cruise_id',
        'cabin_id',
        'cabin_qty',
        'ticket_qty'

    ];
}
