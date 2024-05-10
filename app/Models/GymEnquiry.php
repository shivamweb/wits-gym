<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class GymEnquiry extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'gym_id'
    ];

    public function addGymEnquiry(array $gymEnquiryArray, $imagePath, $gymId)
    {
        $this->create([
            'title' => $gymEnquiryArray['title'],
            'description' => $gymEnquiryArray['description'],
            'image' => $imagePath,
            'gym_id' => $gymId
        ]);
    }

    public function gym()
    {
        return $this->belongsTo(Gym::class, 'gym_id');
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->uuid = Uuid::uuid4()->toString();
        });
    }

    

}
