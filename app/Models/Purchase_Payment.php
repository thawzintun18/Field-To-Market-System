<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase_Payment extends Model
{
    protected $fillable = [
        'purchase_id',
        'total_amount',
        'paid_amount',
        'remaining_amount'
    ];
}
