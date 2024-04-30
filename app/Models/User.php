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
        'gym_id',
        'first_name',
        'last_name',
        'email',
        'gender',
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

    public function addUser(array $addUser, $imagePath,$gymId)
    {
        try {
            return $this->create([
                'gym_id'  => $gymId,
                'first_name'  => $addUser['first_name'],
                'last_name'   => $addUser['last_name'],
                'email'       => $addUser['email'],
                'gender'       => $addUser['gender'],
                'phone_no'    => $addUser['phone_no'],
                'username'    => $addUser['username'],
                'password'    => $addUser['password'],
                'image'       => $imagePath,
            ]);
        } catch (\Throwable $e) {
            Log::error('[User][addUser] Error adding user detail: ' . $e->getMessage());
        }
    }

    // public function addUseByGym(array $addUser, $imagePath,$gymId)
    // {
    //     try {
    //         return $this->create([
    //             'gym_id'  => $gymId,
    //             'first_name'  => $addUser['first_name'],
    //             'last_name'   => $addUser['last_name'],
    //             'email'       => $addUser['email'],
    //             'phone_no'    => $addUser['phone_no'],
    //             'username'    => $addUser['username'],
    //             'password'    => $addUser['password'],
    //             'image'       => $imagePath,
    //         ]);
    //     } catch (\Throwable $e) {
    //         Log::error('[User][addUseByGym] Error adding user detail: ' . $e->getMessage());
    //     }
    // }
}
