<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Designation extends Model
{
    use SoftDeletes;
    protected $table = 'designations';
    protected $fillable = [
        'designation_name'
    ];

    public function addAdminDesignation(array $designation)
    {
        $this->create([
            'designation_name' => $designation['designation_name']
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
