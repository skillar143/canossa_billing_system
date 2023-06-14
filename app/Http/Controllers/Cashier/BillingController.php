<?php

namespace App\Http\Controllers\Cashier;

use App\Models\Bill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BillingController extends Controller
{
    //
    public function storeBill(Request $request, $id){


        Bill::create([
            'student_id' =>$id,
            'payment_type' =>$request->payment_type,
            'amount' =>$request->total_bill,
        ]);

        return redirect()->back()->with('success','Payment Added!');
    }
}
