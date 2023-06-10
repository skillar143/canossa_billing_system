<?php

namespace App\Http\Controllers\Cashier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\GradingStatus;
use App\Models\tuition_per_unit;
use App\Models\CourseFee;

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

    public function view($id){

        $student = Student::where('id', '=', $id)->with('program')->first();
        $year = $student->year;
        $course_id = $student->program_id;

        $sem = $this->getTerm();
        $studentfees = $this->getFees($course_id, $year ,$sem);
        $per_unit = $this->getTuitionAmount($id, '0');
        $per_rle = $this->getTuitionAmount($id, '1');
        $gradingStatus = GradingStatus::where('id', '=', '1')->first();


        return view('cashier/studentfee.view', compact('student','per_unit','studentfees'));

    }
}
