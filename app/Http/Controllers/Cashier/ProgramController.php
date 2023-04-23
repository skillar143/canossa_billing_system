<?php

namespace App\Http\Controllers\Cashier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Curriculum;
use App\Models\tuition_per_unit;

class ProgramController extends Controller
{
    //

/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $programs = Program::all();
        return view('cashier/managefees.index', compact('programs'));
    }

    public function show($id)
    {
        $course = Program::findOrFail($id);

        $per_unit = tuition_per_unit::select('amount_per_units')
        ->where('course_id',"=",$id)
        ->first();

        if($per_unit == "null"){
           $unit = "0";
        }else{
            $unit = $per_unit->amount_per_units;
        }



        $firstyear = Curriculum::where('year',"=","1")
        ->where('course_id',"=",$id)
        ->where('semester',"=","1")
        ->sum('units');




        return view('cashier/managefees.viewFees', compact('course','firstyear','unit'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    public function unit(Request $request, $id)
    {
       tuition_per_unit::where('course_id','=',$id)->update([
            'amount_per_units' =>$request->amount,
            ]);

            return redirect()->back()->with('update', 'Fee updated!');
    }
}
