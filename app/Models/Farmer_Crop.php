<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Farmer_Crop extends Model
{
    protected $fillable = [
        'farmer_id',
        'crop',
        'planting_date',
        'estimated_harvest_date',
        'status',
    ];
}
