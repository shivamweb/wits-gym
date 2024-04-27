<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Log;
use Ramsey\Uuid\Uuid;

class User extends Authenticatable
{
    use SoftDeletes;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_no',
        'username',
        'password',
        'image'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->uuid = Uuid::uuid4()->toString();
        });
    }

    public function addUser(array $addUser, $imagePath)
    {
        try {
            return $this->create([
                'first_name'  => $addUser['first_name'],
                'last_name'   => $addUser['last_name'],
                'email'       => $addUser['email'],
                'phone_no'    => $addUser['phone_no'],
                'username'    => $addUser['username'],
                'password'    => $addUser['password'],
                'image'       => $imagePath,
            ]);
        } catch (\Throwable $e) {
            Log::error('[User][addUser] Error adding user detail: ' . $e->getMessage());
        }
    }
}
