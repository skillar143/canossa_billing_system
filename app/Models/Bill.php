<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'payment_type',
        'amount',
        'discount_id',
        'term',
        'status',
        'year',
    ];

    public function getType(){
        if( $this->payment_type == 0 ) return "Full Payment";

        if( $this->payment_type == 1 ) return "Installment";
    }

    public function student()
    {
        return $this->hasOne(Student::class,'id', 'student_id');
    }

    public function discount()
    {
        return $this->hasOne(Discount::class,'id', 'discount_id');
    }

    public function studentPayments()
    {
        return $this->hasMany(StudentPayment::class, 'bill_id');
    }

    public function computeTotalPayment()
    {
        $totalPayment = $this->amount;

        foreach ($this->studentPayments as $payment) {
            $totalPayment -= $payment->cash;
        }

        return $totalPayment;
    }
}
