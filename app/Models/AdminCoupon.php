<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Ramsey\Uuid\Uuid;

class AdminCoupon extends Model
{
    protected $fillable = [
        'name',
        'from',
        'to',
        'image',
        'description'
    ];

    public function addAdminCoupon(array $couponArray, $imagePath)
    {
        try {
            return $this->create([
                'name' => $couponArray['name'],
                'from' => $couponArray['from'],
                'to' => $couponArray['to'],
                'image'   => $imagePath,
                'description' => $couponArray['description'],
            ]);
        } catch (\Throwable $e) {
            Log::error('[AdminSubscription][addAdminSubscription] Error adding admin subscription: ' . $e->getMessage());
        }
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->uuid = Uuid::uuid4()->toString();
        });
    }
}
