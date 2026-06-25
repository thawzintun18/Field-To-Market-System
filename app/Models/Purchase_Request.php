<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase_Request extends Model
{
    protected $fillable = [
        'farmer_crop_id',
        'broker_id',
        'offered_price',
        'requested_quantity',
        'status',
    ];
}
