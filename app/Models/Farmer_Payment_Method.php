<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Farmer_Payment_Method extends Model
{
    protected $fillable = [
        'farmer_id',
        'method_type',
        'account_name',
        'account_number',
        'status',
    ];
}
