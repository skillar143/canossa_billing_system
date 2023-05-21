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



        if (empty($per_unit)) {
            $unit = "0";
         } else {
            $unit = $per_unit->amount_per_units;
         }



        $firstyear_firstsem = Curriculum::where('year',"=","1")
        ->where('course_id',"=",$id)
        ->where('semester',"=","1")
        ->sum('units');

        $firstyear_secondsem = Curriculum::where('year',"=","1")
        ->where('course_id',"=",$id)
        ->where('semester',"=","2")
        ->sum('units');

        $secondyear_firstsem = Curriculum::where('year',"=","2")
        ->where('course_id',"=",$id)
        ->where('semester',"=","1")
        ->sum('units');

        $secondyear_secondsem = Curriculum::where('year',"=","2")
        ->where('course_id',"=",$id)
        ->where('semester',"=","2")
        ->sum('units');

        $thirdyear_firstsem = Curriculum::where('year',"=","3")
        ->where('course_id',"=",$id)
        ->where('semester',"=","1")
        ->sum('units');

        $thirdyear_secondsem = Curriculum::where('year',"=","3")
        ->where('course_id',"=",$id)
        ->where('semester',"=","2")
        ->sum('units');

        $fourthyear_firstsem = Curriculum::where('year',"=","4")
        ->where('course_id',"=",$id)
        ->where('semester',"=","1")
        ->sum('units');

        $fourthyear_secondsem = Curriculum::where('year',"=","4")
        ->where('course_id',"=",$id)
        ->where('semester',"=","2")
        ->sum('units');

        $curr = [
            'firstyear_firstsem' => $firstyear_firstsem,
            'firstyear_secondsem' => $firstyear_secondsem,
            'secondyear_firstsem' => $secondyear_firstsem,
            'secondyear_secondsem' => $secondyear_secondsem,
            'thirdyear_firstsem' => $thirdyear_firstsem,
            'thirdyear_secondsem' => $thirdyear_secondsem,
            'fourthyear_firstsem' => $fourthyear_firstsem,
            'fourthyear_secondsem' => $fourthyear_secondsem,
        ];

        return view('cashier/managefees.viewFees', compact('course','curr','unit'));
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

                $data = [
                    'course_id' => $id,
                    'amount_per_units' => $request->amount,
                ];

                tuition_per_unit::updateOrCreate(['course_id' => $id], $data);

                return redirect()->back()->with('update', 'Fee updated!');

    }
}

