<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quality_Grade extends Model
{
    protected $fillable = [
        'crop',
        'grade_name',
        'description',
    ];
}
