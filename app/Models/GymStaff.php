<?php

namespace App\Models;

use App\Traits\SessionTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

class GymStaff extends Model
{
    use SoftDeletes;
    use SessionTrait;
    protected $table = 'gym_staffs';
    protected $fillable = [
        'name',
        'designation',
        'image',
        'gym_id'
    ];

    public function addGymStaff(array $gymStaffArray, $imagePath,$gymId)
    {
        $this->create([
            'name' => $gymStaffArray['member_name'],
            'designation' => $gymStaffArray['member_designation'],
            'image' => $imagePath,
            'gym_id' => $gymId
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
