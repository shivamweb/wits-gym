<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

class GymCoupon extends Model
{
    use SoftDeletes;

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
        $this->create([
            'name'          => $couponArray['name'],
            'from'          => $couponArray['from'],
            'to'            => $couponArray['to'],
            'amount'        => $couponArray['amount'],
            'discount'      => $couponArray['discount'],
            'max_amount'    => $couponArray['max_amount'],
            'type'          => $couponArray['type'],
            'gym_id'        => 1
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
