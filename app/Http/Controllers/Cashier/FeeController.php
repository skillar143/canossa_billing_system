<?php

namespace App\Http\Controllers\Cashier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fee;

class FeeController extends Controller
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
    public function index($type)
    {
        $fees = Fee::all()->where('type','=',$type);

        switch ($type) {
            case '0':
                $title = "Computer Fees";
                break;
            case '1':
                $title = "Special Fees";
                break;
            case '2':
                $title = "Other School Fees";
                break;
        }

        return view ('cashier/fee.index', compact('fees','title','type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $type)
    {

        Fee::create([
            'description' =>$request->description,
            'amount' =>$request->amount,
            'type' =>$type
        ]);


        return redirect()->back()->with('success','Fee Added!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       Fee::where('id','=',$id)->update([
            'description' =>$request->description,
            'amount' =>$request->amount,
            ]);

            return redirect()->back()->with('update', 'Fee updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Fee::where('id','=',$id)->delete();
        return redirect()->back()->with('delete', 'Fee deleted!');
    }
}
