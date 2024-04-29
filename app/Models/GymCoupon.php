<?php

namespace App\Models;

use App\Traits\SessionTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

class GymCoupon extends Model
{
    use SoftDeletes;
    use SessionTrait;

    protected $fillable = [
        'name',
        'from',
        'to',
        'amount',
        'discount',
        'max_amount',
        'type',
        'gym_id'
    ];


    public function addCoupon(array $couponArray)
    {
        $gym_uuid = $this->getGymSession()['uuid'];
        $gymId = Gym::where('uuid', $gym_uuid)->first();
        // dd('gym uuid : ' . $gym_uuid . ' Id : ' . $gymId->id);
        $this->create([
            'name' => $couponArray['name'],
            'from' => $couponArray['from'],
            'to' => $couponArray['to'],
            'amount' => $couponArray['amount'],
            'discount' => $couponArray['discount'],
            'max_amount' => $couponArray['max_amount'],
            'type' => $couponArray['type'],
            'gym_id' => $gymId->id
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
