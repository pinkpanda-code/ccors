<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cruise extends Model
{
    protected $table = 'cruise';
    public $primaryKey = 'cruise_id';
    public $timestamps = false;

    protected $fillable = [

        'ship_id',
        'start_date',
        'duration',
        'dest_id',
        'departure_port',
        'cruise_status'

    ];

    public function ship(){
        return $this->hasOne('App\ship','ship_id','ship_id');
    }

    public function destination(){
        return $this->hasOne('App\destination','dest_id','dest_id');
    }

    public function port(){
        return $this->belongsToMany('App\port','cruise_itinerary_port','cruise_id','port_id');
    }

    public function d_port(){
        return $this->hasOne('App\port','port_id','departure_port');
    }









}
