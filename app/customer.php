<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customer';
    public $primaryKey = 'cust_id';
    public $timestamps = false;

    protected $fillable = [

        'cust_name',
        'cust_email',
        'cust_contact',
        'cust_passport_num',
        'cust_status'

    ];


}
