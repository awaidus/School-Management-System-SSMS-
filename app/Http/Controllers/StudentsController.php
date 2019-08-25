<?php

namespace App\Http\Controllers;

use App\ParentModel;
use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{

    public function index()
    {
        $students = Student::paginate(10);

        return view('student.index', compact('students'));
    }

    public function create()
    {
        $parents = ParentModel::all();
        $student = new Student();
        return view('student.create', compact('student', 'parents'));
    }


    public function store(Request $request)
    {
        $request->validate($this->validateRequest());

        $student = Student::create($request->all());

        flashy()->success('Student record has been created');

        return redirect()->route('student.show', $student);
    }

    public function show(Student $student)
    {
        return view('student.show', [
            'student' => $student->load('attendances', 'classes', 'parents'),
            'attendances' => $student->attendances()->paginate(10)
        ]);
    }

    public function edit(Student $student)
    {
        $parents = ParentModel::all();

        return view('student.edit', compact('parents', 'student'));
    }


    public function update(Request $request, Student $student)
    {
        $request->validate($this->validateRequest());

        $student->update($request->all());

        flashy()->success('Student record has been updated');

        return redirect()->route('students.show', $student);
    }

    public function destroy(Student $student)
    {
        $student->delete();
        flashy()->success('Student record has been deleted');

        return redirect()->route('students.index');
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
