<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tuition_per_unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'tuition_type',
        'amount_per_units',
    ];

}
