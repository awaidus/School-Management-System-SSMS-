<?php

namespace App\Http\Controllers;

use App\ClassModel;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentsEnrollmentController extends Controller
{
    public function create()
    {
        $class = new ClassModel();
        $students = Student::all();
        $classes = ClassModel::all();
        return view('enrollment.create', compact('students', 'classes', 'class'));
    }

    public function store(Request $request)
    {
        $request->validate($this->validateRequest($request));

        $class = ClassModel::find($request->class_id);
        $student = Student::find($request->student_id);

        $class->students()->save(
            $student,
            [
                'date_from' => request('date_from'),
                'date_to' => request('date_to'),
            ]
        );

        return redirect()->route('classes.show', $class);
    }

    public function edit(ClassModel $class, $studentId)
    {
        $students = Student::all();
        $classes = ClassModel::all();

        return view(
            'enrollment.edit',
            [
                'students' => $students,
                'classes' => $classes,
                'class' => $class,
                'student' => $class->students->find($studentId),
            ]
        );
    }

    public function update(Request $request, ClassModel $class)
    {
        $request->validate($this->validateRequest($request));

        $class = ClassModel::find($request->class_id);

        $class->students()->detach($request->old_student_id);
        $class->students()->attach(
            $request->student_id,
            [
                'date_from' => request('date_from'),
                'date_to' => request('date_to'),
            ]
        );

        return redirect()->route('classes.show', $class);
    }

    public function destroy(Request $request, ClassModel $class)
    {
        $class->students()->detach($request->student_id);

        return redirect()->route('classes.show', $class);
    }

    public function show()
    {
        //
    }

    public function validateRequest(Request $request)
    {
        return [
            'class_id' => [
                'required',
                // Rule::unique('class_student', 'class_id')
                //     ->where(function ($query) use ($request) {
                //         return $query->where('student_id', $request->student_id);
                //     })
            ],
            'student_id' => ['required'],
        ];
    }
}
