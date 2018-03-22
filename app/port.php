<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class port extends Model
{
    protected $table = 'port';
    public $primaryKey = 'port_id';
    public $timestamps = false;

    protected $fillable = [

        'port_name'

    ];

    public function d_cruise(){
        return $this->belongsTo('App\cruise');
    }

    public function cruise(){
        return $this->belongsToMany('App\cruise');
    }


}
