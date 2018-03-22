<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cabin extends Model
{
    protected $table = 'cabin';
    public $primaryKey = 'cabin_id';
    public $timestamps = false;

    protected $fillable = [

        'cabin_name',

    ];

    public function ship(){
        return $this->belongsToMany('App\ship');
    }
}
