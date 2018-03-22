<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ship extends Model
{
    protected $table = 'ship';
    public $primaryKey = 'ship_id';
    public $timestamps = false;

    protected $fillable = [

        'ship_name',
        'line_id'

    ];

    public function cruise_line(){
        return $this->hasOne('App\cruise_line','line_id','line_id');
    }

    public function cruise(){
        return $this->belongsTo('App\cruise');
    }

    public function cabin(){
        return $this->belongsToMany('App\cabin','ship_cabin','ship_id','cabin_id')->withPivot('cabin_price', 'cabin_total');;
    }
}
