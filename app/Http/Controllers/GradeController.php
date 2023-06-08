<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Semester;
use App\Models\Student;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        $semesters = Semester::all();
        $grades = Grade::with('student', 'semester')->orderByDesc('student_id')->get();

        return view('grades.index', compact('students', 'semesters', 'grades'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('grades.create')
            ->with('students', Student::all())
            ->with('semesters', Semester::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'mark_name' => 'required',
            'semester_id' => 'required',
        ]);


        $students = $request->input('students');

        foreach ($students as $studentId => $studentData) {
            $semester_id = $request->input('semester_id');
            $markName = $studentData['mark_name'];

            // Process and save the data
            // For example, you can create a new grade record in the database
            Grade::create([
                'semester_id' => $semester_id,
                'student_id' => $studentId,
                'mark_name' => $markName,
            ]);
        }

        // Optionally, you can redirect the user to a different page after the submission
        return redirect()->route('grades.index')->with('success', 'Marks submitted successfully.');



//        $request->validate([
//            'class_id' => 'required|exists:classes,id',
//            'semester' => 'required',
//            'grades' => 'required|array',
//            'grades.*.student_id' => 'required|exists:students,id',
//            'grades.*.grade' => 'required|numeric|min:0|max:100',
//        ]);

//        $classId = $request->input('class_id');
//        $semester = $request->input('semester');
//        $gradesData = $request->input('mark_name');
//
//        foreach ($gradesData as $gradeData) {
//            $studentId = $gradeData['student_id'];
//            $gradeValue = $gradeData['grade'];
//
//            $student = Student::findOrFail($studentId);
//
//            $grade = new Grade();
//            $grade->class_id = $classId;
//            $grade->semester = $semester;
//            $grade->student_id = $student->id;
//            $grade->grade = $gradeValue;
//            $grade->save();
//        }
//
//        // Calculate average pass rate for the class and semester
//        $passRate = Grade::where('class_id', $classId)
//            ->where('semester', $semester)
//            ->where('grade', '>=', 50)
//            ->avg('grade');
//
//        return response()->json(['status' => 'success', 'pass_rate' => $passRate]);
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
