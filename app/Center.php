<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    protected $table = "centers";
    protected $fillable = ["name", "granted", "kn_enabled", "io_granted"];

    protected $attributes = [
        'granted'=> '0',
        'kn_enabled'=>'1',
        'io_granted'=>'0'
    ];
}
