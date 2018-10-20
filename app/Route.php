<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'departure_location_id',
        'arrival_location_id',
    ];
}
