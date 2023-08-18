<?php

namespace App\Http\Controllers\Cashier;

use App\Models\Bill;
use App\Models\Student;
use App\Models\GradingStatus;
use App\Models\StudentPayment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BillingController extends Controller
{
    // ...

    public function index()
    {
        $sem = $this->getTerm();

        $bills = Bill::with('student', 'studentPayments')
            ->where('term', $sem)
            ->whereExists(function ($query) {
                $query->select(DB::raw(1))
                    ->from('students')
                    ->whereColumn('students.id', 'bills.student_id')
                    ->whereColumn('students.year', 'bills.year');
            })
            ->get();

        return view('cashier.payment.index', compact('bills'));
    }

    public function storeBill(Request $request, $id)
    {
        $studentId = $id;
        $paymentType = $request->payment_type;
        $amount = $request->total_bill;
        $term = $request->term;
        $year = $request->year;
        $discountId = $request->discount;

        $bill = Bill::firstOrCreate(
            [
                'student_id' => $studentId,
                'term' => $term,
                'year' => $year,
            ],
            [
                'discount_id' => $discountId,
                'status' => "pending",
                'payment_type' => $paymentType,
                'amount' => $amount,
            ]
        );

        if (!$bill->wasRecentlyCreated) {
            return redirect()->back()->with('error', 'Payment Already Exist!');
        }

        return redirect()->back()->with('success', 'Payment Added!');
    }

    private function getTerm()
    {
        return GradingStatus::where('id', '=', '1')->value('term') + 1;
    }

    public function processBill(Request $request)
    {
        $billId = $request->input('billId');
        $response = [
            'success' => true,
            'message' => 'Success',
        ];
        return response()->json($response);
    }
}
