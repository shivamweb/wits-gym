<?php

namespace App\Models;

use App\Traits\SessionTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Log;

class GymStaff extends Model
{
    use SoftDeletes;
    use SessionTrait;
    protected $table = 'gym_staffs';
    protected $fillable = [
        'name',
        'designation_id',
        'salary',
        'image',
        'gym_id'
    ];

    public function addGymStaff(array $gymStaffArray, $imagePath, $gymId)
    {
        $this->create([
            'name' => $gymStaffArray['member_name'],
            'designation_id' => $gymStaffArray['member_designation'],
            'salary' => $gymStaffArray['salary'],
            'image' => $imagePath,
            'gym_id' => $gymId
        ]);
    }

    public function updateStaff(array $updateStaff, $imagePath)
    {

        $uuid = $updateStaff['uuid'];
        $staffDetail = GymStaff::where('uuid', $uuid)->first();

        // Check if the user exists
        if (!$staffDetail) {
            return redirect()->back()->with('error', 'User not found');
        }
        try {
            $staffDetail->update([
                'name' => $updateStaff['member_name'],
                'designation_id' => $updateStaff['member_designation'],
                'salary' => $updateStaff['salary'],
            ]);

            if (isset($imagePath)) {
                $staffDetail->update([
                    'image' => $imagePath
                ]);
            }


            return $staffDetail->save();
        } catch (\Throwable $e) {
            Log::error('[GymStaff][updateStaff] Error while updating user detail: ' . $e->getMessage());
        }
    }
    public function designation()
    {
        return $this->belongsTo(Designation::class, 'designation_id');
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->uuid = Uuid::uuid4()->toString();
        });
    }
}
