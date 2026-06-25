<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Harvest extends Model
{
    protected $fillable = [
        'farmer_crop_id',
        'harvest_date',
        'quantity',
        'unit',
        'notes',
    ];
}
