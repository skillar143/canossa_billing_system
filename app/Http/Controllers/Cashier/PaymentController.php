<?php

namespace App\Http\Controllers\Cashier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentPayment;
use App\Models\Bill;
use App\Models\tuition_per_unit;
use App\Models\Curriculum;
use App\Models\GradingStatus;
use App\Models\CourseFee;
use Carbon\Carbon;



class PaymentController extends Controller
{
    private function generateRandomNumber(){
        $randomNumber = str_pad(mt_rand(1, 9999999), 7, '0', STR_PAD_LEFT); return $randomNumber;
    }

    private function getTime(){
        $currentDateTime = Carbon::now();
        $formattedTime = $currentDateTime->format('j F Y');
        return $formattedTime;
    }

    private function getTerm(){ return GradingStatus::where('id', '=', '1')->value('term') + 1; }

    private function calculateTotalAmount($id, $tuitionType, $year, $sem, $subject_type){
        $tuition = tuition_per_unit::select('amount_per_units')
            ->where('course_id', $id)
            ->where('tuition_type', $tuitionType)
            ->first();
        $units = Curriculum::join('subjects', 'curricula.subject_id', '=', 'subjects.id')
            ->where('curricula.year', $year)
            ->where('curricula.course_id', $id)
            ->where('curricula.semester', $sem)
            ->where('subjects.subject_type', $subject_type)
            ->sum('curricula.units');
        $tuitionAmount = $tuition ? $tuition->amount_per_units : 0;
        return $tuitionAmount * $units;
    }

    public function store(Request $request, $billId){

        $bill = Bill::findOrFail($billId);
        $totalPayment = $bill->computeTotalPayment();

        if ($bill->status == "paid") {
            return redirect()->back()->with('error', 'Bill is already paid.');
        }

        // Create a new student payment record
        $payment = new StudentPayment();
        $payment->bill_id = $billId;
        $payment->cash = $request->input('cash');
        $payment->save();

        // Update the total payment amount
        $totalPayment -= $payment->cash;

        // Update the bill status
        if ($totalPayment <= 0) {
            $bill->status = 'paid';
        } else {
            $bill->status = 'pending';
        }
        $bill->save();

        $sem = $this->getTerm();
        $tuition = $this->calculateTotalAmount($bill->student->program_id, '0', $bill->student->year, $sem, '0');
        $rle = $this->calculateTotalAmount($bill->student->program_id, '1', $bill->student->year, $sem, '1');
        $com_fee = $this->getFeesSum($bill->student->program_id, $bill->student->year ,$sem,'0');  //computer fee
        $spe_fee = $this->getFeesSum($bill->student->program_id, $bill->student->year ,$sem,'1');  //special fee
        $oth_sch_fee = $this->getFeesSum($bill->student->program_id, $bill->student->year ,$sem,'2');  //other school fee
        $invoice = $this->generateRandomNumber();
        $time = $this->getTime();
        $cash = $request->input('cash');
        return view ('cashier/invoice.index',compact('cash','time','invoice','bill','tuition','rle','com_fee','spe_fee','oth_sch_fee'));

    }

public function invoice(){
     //return redirect()->back()->with('success', 'Payment added successfully.');
}


    private function getFeesSum($id, $year, $sem, $type)
    {
        $coursefees = CourseFee::with('fees')
            ->where('course_id', $id)
            ->where('type', $type)
            ->where('semester', $sem)
            ->where('year', $year)
            ->get();

        $totalAmount = 0;

        foreach ($coursefees as $cfees) {
            $totalAmount += $cfees->fees->amount;
        }

        return $totalAmount;
    }


}
