<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

class GymStaff extends Model
{
    use SoftDeletes;
    protected $table = 'gym_staffs';
    protected $fillable = [
        'name',
        'designation',
        'image',
        'gym_id'
    ];

    public function addGymStaff(array $gymStaffArray, $imagePath)
    {
        $randomNumber = rand(1, 100);
        $this->create([
            'name' => $gymStaffArray['member_name'],
            'designation' => $gymStaffArray['member_designation'],
            'image' => $imagePath,
            'gym_id'=> 1
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
