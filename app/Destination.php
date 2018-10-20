<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'country_name',
        'city_name',
        'images',
    ];
}
