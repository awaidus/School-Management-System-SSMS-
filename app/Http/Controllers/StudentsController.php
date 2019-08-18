<?php

namespace App\Http\Controllers;

use App\Parents;
use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $students = Student::paginate(10);

        return view('student.index', compact('students'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parents = Parents::all();
        $student = new Student();
        return view('student.create', compact('student', 'parents'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->validateRequest());

        $student = Student::create($request->all());

        return redirect()->route('student.show', $student);
    }

    /**
     * Display the specified resource.
     *
     * @param Student $student
     * @return Student
     */
    public function show(Student $student)
    {
        return view('student.show', [
            'student' => $student->load('attendances', 'classes', 'parents'),
            'attendances' => $student->attendances()->paginate(10)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Student $student
     * @return void
     */
    public function edit(Student $student)
    {
        $parents = Parents::all();

        return view('student.edit', compact('parents', 'student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Student $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate($this->validateRequest());

        $student->update($request->all());

        return redirect()->route('students.show', $student);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function validateRequest()
    {
        return [
            'parent_id' => ['required'],
            'name' => ['required', 'min:3'],
            'roll_no' => ['required'],
            'dob' => ['required', 'date'],
            'doa' => ['required', 'date'],
        ];
    }
}
