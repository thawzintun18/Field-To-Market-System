<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    protected $fillable = [
        'user_id',
        'business_name',
        'business_type',
        'license_no',
        'phone',
        'address',
        'city',
        'township',
        'status'
    ];
}
