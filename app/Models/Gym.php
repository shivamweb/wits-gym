<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Log;

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

    public function addGyn(array $addGym)
    {
        try {
            return $this->create([
                'gym_name'  => $addGym['gym_name'],
                'address'   => $addGym['address'],
                'country'   => $addGym['country'],
                'state'     => $addGym['state'],
                'city'      => $addGym['city'],
                'gym_link'  => $addGym['gym_link'],
                'image'     => $addGym['image'],
                'gym_type'  => $addGym['gym_type']
            ]);
        } catch (\Throwable $e) {
            Log::error('[Gym][addGym] Error adding gym detail: ' . $e->getMessage());
        }
    }
}
