<?php

namespace App\Http\Controllers\Cashier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    //

    public function index(){



    $programs = Program::all();






        return view('cashier/managefees.index', compact('programs'));
    }
}
