<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quality_Check extends Model
{
    protected $fillable = [
        'purchase_id',
        'moisture_percentage',
        'impurity_percentage',
        'assigned_grade_id',
    ];
}
