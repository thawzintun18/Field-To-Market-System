<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Farmer_Payment extends Model
{
    protected $fillable = [
        'farmer_payment_method_id',
        'purchase_id',
        'amount_paid',
        'payment_method',
        'status',
        'paid_at',
    ];
}
