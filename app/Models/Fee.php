<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'amount',
        'type',
    ];

    public function getType(){
        if( $this->type == 0 )
        {
            return "Computer Fees";
        }
        if( $this->type == 1 )
        {
            return "Special Fees";
        }
        if( $this->type == 3 )
        {
            return "Other School Fees";
        }
    }
    public function courseFee(){
        return $this->belongsTo(CourseFee::class);
    }

}
