<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    public $incrementing = false;
    protected $table = "centers";
    protected $fillable = ["id", "name"];
    // protected $guarded = ["id"];

    protected $attributes = [
        'granted'=> '0',
        'kn_enabled'=>'1',
        'io_granted'=>'0'
    ];
}
