<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use SoftDeletes;

    protected $fillable = [
        'username',
        'password',
        'full_name',
        'phone_no',
        'email',
        'image',
        'department',
        'user_type'
    ];
}
