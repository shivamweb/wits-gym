<?php

namespace App\Models;

use App\Enums\AdminSubscriptionEnum;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Log;
use Ramsey\Uuid\Uuid;

class Gym extends Authenticatable
{
    use SoftDeletes;

    protected $fillable = [
        'username',
        'gym_name',
        'email',
        'password',
        'address',
        'country',
        'image',
        'state',
        'city',
        'web_link',
        'gym_type',
        'subscription_id',
        'terms_and_conditions',
        'facebook',
        'instagram'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->uuid = Uuid::uuid4()->toString();
        });
    }

    public function addGym(array $addGym, $imagePath)
    {
        try {
            return $this->create([
                'username'               => $addGym['username'],
                'gym_name'               => $addGym['gym_name'],
                'email'                  => $addGym['email'],
                'password'               => $addGym['password'],
                'address'                => $addGym['address'],
                'country'                => $addGym['country'],
                'state'                  => $addGym['state'],
                'city'                   => $addGym['city'],
                'web_link'               => $addGym['web_link'],
                'image'                  => $imagePath,
                'gym_type'               => $addGym['gym_type'],
                'facebook'               => $addGym['facebook'],
                'instagram'              => $addGym['instagram'],
                'terms_and_conditions'   => $addGym['terms_and_conditions'],
                'subscription_id'        => AdminSubscriptionEnum::Trial
            ]);
        } catch (\Throwable $e) {
            Log::error('[Gym][addGym] Error adding gym detail: ' . $e->getMessage());
        }
    }

    // public function addTandC(array $tAndC)
    // {
    //     try {
    //         return $this->create([
    //             'terms_and_conditions'   => $tAndC['terms_and_conditions'],
    //         ]);
    //     } catch (\Throwable $e) {
    //         Log::error('[Gym][addTandC] Error adding gym terms and conditions: ' . $e->getMessage());
    //     }
    // }

    // public function addSocialLink(array $social)
    // {
    //     try {
    //         return $this->create([
    //             'facebook'   => $social['facebook'],
    //             'instagram'  => $social['instagram'],
    //         ]);
    //     } catch (\Throwable $e) {
    //         Log::error('[Gym][addSocialLink] Error adding social links: ' . $e->getMessage());
    //     }
    // }
}
