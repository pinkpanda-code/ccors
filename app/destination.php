<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class destination extends Model
{
    protected $table = 'destination';
    public $primaryKey = 'dest_id';
    public $timestamps = false;

    protected $fillable = [

        'dest_name'

    ];

    public function cruise(){
        return $this->belongsTo('App\cruise');
    }
}
