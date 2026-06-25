<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logistics_Driver extends Model
{
    protected $fillable = [
        'user_id',
        'license_no',
        'license_expiry_date',
        'vehicle_type',
        'vehicle_no',
        'vehicle_capacity',
        'address',
        'city',
        'township',
        'status'
    ];
}
