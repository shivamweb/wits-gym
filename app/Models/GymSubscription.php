<?php

namespace App\Models;

use App\Enums\GymSubscriptionStatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

class GymSubscription extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'subscription_name',
        'amount',
        'validity',
        'description',
        'plan_id',
        'status',
        'image',
        'start_date'
    ];


    public function createSubscription(array $subscriptionArray, $imagePath)
    {
        $this->create([
            'subscription_name' => $subscriptionArray['subscription_name'],
            'amount' => $subscriptionArray['amount'],
            'validity' => $subscriptionArray['validity'],
            'description' => $subscriptionArray['description'],
            'plan_id' => $subscriptionArray['plan_id'],
            'status'=> GymSubscriptionStatusEnum::Active,
            'image'=> $imagePath,
            'start_date'=> $subscriptionArray['start_date']
        ]);
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->uuid = Uuid::uuid4()->toString();
        });
    }

}
