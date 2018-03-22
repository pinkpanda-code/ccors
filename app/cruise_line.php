<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cruise_line extends Model
{
    protected $table = 'cruise_line';
    public $primaryKey = 'line_id';
    public $timestamps = false;

    protected $fillable = [

        'line_name',

    ];

    public function ship(){
        return $this->belongsTo('App\ship');
    }
}
