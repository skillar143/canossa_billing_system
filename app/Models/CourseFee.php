<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseFee extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'type',
        'fee_id',
        'amount',
        'year',
        'semester',
    ];

    public function fees(){
        return $this->hasOne(Fee::class,'id' ,'fee_id');
    }
}
