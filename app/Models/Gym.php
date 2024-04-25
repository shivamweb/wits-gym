<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Gym extends Authenticatable
{
    use SoftDeletes;

    protected $fillable = [
        'gym_name',
        'address',
        'country',
        'image',
        'state',
        'city',
        'gym_link',
        'gym_type'
    ];
}
