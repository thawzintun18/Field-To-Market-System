<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
        'farmer_crops_id',
        'total_gross_weight',
        'total_deduction',
        'net_weight',
        'price_per_unit',
        'total_amount',
        'purchased_at',
    ];
}
