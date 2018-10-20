<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'route_id',
        'departure_time',
        'departure_date',
        'arrival_time',
        'arrival_date',
        'price',
        'discount',
        'stock',
        'cover',
        'is_published',
    ];
}
