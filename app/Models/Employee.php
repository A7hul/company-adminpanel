<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'mobile',
        'email',
        'company_id',
        'status',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    // public function getStatusAttribute($value)
    // {
    //     $statuses = [
    //         1 => 'active',
    //         2 => 'resigned',
    //         3 => 'suspended',
    //     ];

    //     return $statuses[$value];
    // }

    // public function setStatusAttribute($value)
    // {
    //     $statuses = [
    //         'active' => 1,
    //         'resigned' => 2,
    //         'suspended' => 3,
    //     ];

    //     $this->attributes['status'] = $statuses[$value];
    // }
}
