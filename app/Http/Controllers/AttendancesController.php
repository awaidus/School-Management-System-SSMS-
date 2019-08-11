<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Student;
use Illuminate\Http\Request;

class AttendancesController extends Controller
{
    public function index()
    {
        $students = Student::all();

        $attendances = Attendance::latest('working_day')->WithStudent()->paginate(50);

        return view('attendance.index', compact('attendances', 'students'));
    }

    public function create()
    {
        $students = Student::all();
        return view('attendance.create', compact('students'));
    }

    public function store(Request $request)
    {
//        return $request;

        $request->validate($this->validateRequest());

        Attendance::create($request->all());

        return redirect()->back();
    }

    public function validateRequest()
    {
        return [
            'student_id' => ['required'],
            'working_day' => ['required', 'date'],
        ];
    }

    public function show(Attendance $attendance)
    {
        //
    }


    public function edit(Attendance $attendance)
    {
        //
    }

    public function update(Request $request, Attendance $attendance)
    {
        //
    }


    public function destroy(Attendance $attendance)
    {
        $attendance->delete();

        return redirect()->back();
    }
}
