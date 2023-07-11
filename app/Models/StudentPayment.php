<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentPayment extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'bill_id',
        'cash',
    ];

    public function bill()
    {
        return $this->belongsTo(Bill::class);
    }

}
