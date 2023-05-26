<?php

namespace App\Http\Controllers\Cashier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Curriculum;
use App\Models\tuition_per_unit;
use App\Models\Fee;


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

        $years = [1, 2, 3, 4];
        $semesters = [1, 2];
        $curr = [];

        foreach ($years as $year) {
            $yearData = [];

            foreach ($semesters as $semester) {
                $units = Curriculum::where('year', '=', $year)
                    ->where('course_id', '=', $id)
                    ->where('semester', '=', $semester)
                    ->sum('units');

                $key = 'semester' . $semester;
                $yearData[$key] = $units;
            }

            $curr['year' . $year] = $yearData;
        }

        $fees = Fee::all();

        return view('cashier/managefees.viewFees', compact('course','curr','unit','fees'));
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

