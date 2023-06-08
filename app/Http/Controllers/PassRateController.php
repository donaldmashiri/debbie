<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassRateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('passrates.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'class_id' => 'required|exists:classes,id',
            'semesters' => 'required|array',
            'semesters.*' => 'required',
        ]);

        $classId = $request->input('class_id');
        $semesters = $request->input('semesters');

        $passRates = [];
        $previousPassRate = null;

        foreach ($semesters as $semester) {
            $passRate = Grade::where('class_id', $classId)
                ->where('semester', $semester)
                ->where('grade', '>=', 50)
                ->avg('grade');

            if ($previousPassRate !== null) {
                $percentageChange = ($passRate - $previousPassRate) / $previousPassRate * 100;
                $passRates[$semester] = $percentageChange;
            }

            $previousPassRate = $passRate;
        }

        return response()->json(['status' => 'success', 'pass_rates' => $passRates]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
