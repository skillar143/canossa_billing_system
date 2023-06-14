<?php

namespace App\Http\Controllers\Cashier;

use App\Models\Program;
use App\Models\Student;
use App\Models\Discount;
use App\Models\CourseFee;
use App\Models\Curriculum;
use Illuminate\Http\Request;
use App\Models\GradingStatus;
use App\Models\tuition_per_unit;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $students = Student::all();

        return view('cashier/student.index', compact('students'));
    }

    public function indexFee(){
        $students = Student::all();
        return view('cashier/studentfee.index', compact('students'));
    }

    private function getFees($course_id, $year, $sem){
        return CourseFee::with('fees')
        ->where('course_id', '=', $course_id)
        ->where('year', '=', $year)
        ->where('semester', '=', $sem)
        ->get();
    }

    private function getTerm(){
        return GradingStatus::where('id', '=', '1')->value('term') + 1 ;
    }

    private function getTuitionAmount($id, $tuitionType)
    {
            $tuition = tuition_per_unit::
            select('amount_per_units')
            ->where('course_id', $id)
            ->where('tuition_type', $tuitionType)
            ->first();

        return $tuition ? $tuition->amount_per_units : '0';
    }
    private function getUnits($course_id, $year, $sem, $subject_type){

        return  Curriculum::join('subjects', 'curricula.subject_id', '=', 'subjects.id')
                ->where('curricula.year', $year)
                ->where('curricula.course_id', $course_id)
                ->where('curricula.semester', $sem)
                ->where('subjects.subject_type', $subject_type)
                ->sum('curricula.units');
    }

    public function view($id){

        $student = Student::where('id', '=', $id)->with('program')->first();
        $year = $student->year;
        $course_id = $student->program_id;
        $sem = $this->getTerm();
        $studentfees = $this->getFees($course_id, $year ,$sem);
        $per_unit = $this->getTuitionAmount($id, '0');
        $per_rle = $this->getTuitionAmount($id, '1');
        $units = $this->getUnits($course_id, $year, $sem, '0');
        $rle = $this->getUnits($course_id, $year, $sem, '1');
        $course = Program::findOrFail($course_id);
        $discounts = Discount::all();

        return view('cashier/studentfee.view', compact('student','per_unit','per_rle','studentfees','units','rle','course','discounts'));
    }

    public function storeBill(Request $request, $id){

        dd($request->payment_type);
    }
}
