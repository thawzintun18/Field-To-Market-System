<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buying_Station extends Model
{
    protected $fillable = [
        'station_name',
        'owner_user_id',
        'license_no',
        'address',
        'city',
        'township',
        'status'
    ];
}
