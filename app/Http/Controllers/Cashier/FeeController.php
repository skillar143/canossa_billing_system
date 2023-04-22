<?php

namespace App\Http\Controllers\Cashier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fee;

class FeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fees = Fee::all();

        return view ('cashier/fee.index', compact('fees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Fee::create([
            'description' =>$request->description,
            'amount' =>$request->amount
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
