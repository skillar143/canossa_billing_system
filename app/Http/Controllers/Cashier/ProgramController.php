<?php

namespace App\Http\Controllers\Cashier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Curriculum;
use App\Models\tuition_per_unit;
use App\Models\Fee;
use App\Models\CourseFee;


class ProgramController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $programs = Program::all();
        return view('cashier/managefees.index', compact('programs'));
    }
    private function getTuitionAmount($id, $tuitionType)
    {
        $tuition = tuition_per_unit::select('amount_per_units')
            ->where('course_id', $id)
            ->where('tuition_type', $tuitionType)
            ->first();
        return $tuition ? $tuition->amount_per_units : '0';
    }

    private function calculateUnits($id, $subjectType)
    {
        $years = [1, 2, 3, 4];
        $semesters = [1, 2];
        $curr = [];
        foreach ($years as $year) {
            $yearData = [];
            foreach ($semesters as $semester) {
                $units = $this->getCurriculumUnits($id, $year, $semester, $subjectType);
                $key = 'semester' . $semester;
                $yearData[$key] = $units;
            }
            $curr['year' . $year] = $yearData;
        } return $curr;
    }
    private function getCurriculumUnits($id, $year, $semester, $subjectType)
    {
        return Curriculum::join('subjects', 'curricula.subject_id', '=', 'subjects.id')
            ->where('curricula.year', $year)
            ->where('curricula.course_id', $id)
            ->where('curricula.semester', $semester)
            ->where('subjects.subject_type', $subjectType)
            ->sum('curricula.units');
    }
    public function show($id)
    {
        $course = Program::findOrFail($id);
        $unit = $this->getTuitionAmount($id, '0');
        $rle = $this->getTuitionAmount($id, '1');
        $curr = $this->calculateUnits($id, '0');
        $rleUnits = $this->calculateUnits($id, '1');
        $fees = Fee::all();
        $coursefees = CourseFee::with('fees')->where('course_id', $id)->get();

        return view('cashier/managefees.viewFees', compact('course', 'curr', 'unit', 'rle', 'fees', 'coursefees', 'rleUnits'));
    }
    public function storeFees(Request $request, $id , $type ,$sem ,$year)
    {
        $fee_ids = $request->description;
        $amounts = $request->amount;
        $newData = array_map(function ($fee_id, $amount) use ($id, $type, $sem, $year) {
            return [
                'type' => $type,
                'fee_id' => $fee_id,
                'amount' => $amount,
                'course_id' => $id,
                'semester' => $sem,
                'year' => $year,
            ];
        }, $fee_ids, $amounts);
        $countAdded = 0;
        foreach ($newData as $data) {
            $item = CourseFee::firstOrNew([
                'semester' => $data['semester'],
                'year' => $data['year'],
                'course_id' => $data['course_id'],
                'fee_id' => $data['fee_id'],
            ]);
            if (!$item->exists) {
                $item->fill($data);
                $item->save();
                $countAdded++;
            }
        }
        if ($countAdded == 0) {
            return redirect()->back()->with('error', 'Fee already exists');
        } elseif ($countAdded == 1) {
            return redirect()->back()->with('success', 'Fee successfully added');
        } else {
            return redirect()->back()->with('success', 'Fees with no duplicate were added');
        }
    }
    public function unit(Request $request, $id, $type)
    {
        $data = [
            'course_id' => $id,
            'tuition_type' => $type,
            'amount_per_units' => $request->amount,
        ];
        tuition_per_unit::updateOrCreate(['course_id' => $id, 'tuition_type' => $type], $data);
        return redirect()->back()->with('update', 'Fee updated!');
    }

}//end controller

