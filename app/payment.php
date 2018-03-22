<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $table = 'payment';
    public $primaryKey = 'payment_id';
    public $timestamps = false;

    protected $fillable = [

        'resv_id',
        'payment_method',
        'total_payment',
        'payment_status'

    ];
}
