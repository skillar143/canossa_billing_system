<?php

namespace App\Http\Controllers\Cashier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use Illuminate\Support\Facades\DB;
class ProgramController extends Controller
{
    //

    public function index(){


         
    $programs = Program::all();

    //dd($programs->description);
   
    $descriptions = $programs->pluck('description', 'id')->toArray();

   
        

        return view('cashier/managefees.index', compact('programs'));
    }
}
