<?php

namespace App\Http\Controllers\Cashier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Curriculum;

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

        $firstyear = Curriculum::where('year',"=","1")
        ->where('course_id',"=",$id)
        ->where('semester',"=","1")
        ->sum('units');




        return view('cashier/managefees.viewFees', compact('course','firstyear'));
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
}
