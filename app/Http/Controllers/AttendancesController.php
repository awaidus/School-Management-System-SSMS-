<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Student;
use Illuminate\Http\Request;

class AttendancesController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except(['index', 'show', 'create', 'store']);
    }

    public function index()
    {
        if (auth()->user()->is_admin) {
            $attendances = Attendance::latest('working_day')
                ->WithStudent()
                ->paginate(50);
        } else {
            $attendances = Attendance::latest('working_day')
                ->WithStudent()
                ->where('parent_id', auth()->user()->parent_id)
                ->paginate(50);
        }

        return view('attendance.index', compact('attendances'));
    }

    public function create()
    {
        if (auth()->user()->is_admin) {
            $students = Student::all();
        } else {
            $students = Student::where('parent_id', auth()->user()->parent_id)->get();
        }
        $attendance = new Attendance();
        return view('attendance.create', compact('students', 'attendance'));
    }

    public function store(Request $request)
    {
        $request->validate($this->validateRequest());

        Attendance::create($request->all());

        flashy()->success('Attendance record has been added/ applied');

        return redirect()->route('attendances.index');
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
        $students = Student::all();
        return view('attendance.edit', compact('students', 'attendance'));
    }

    public function update(Request $request, Attendance $attendance)
    {
        $request->validate($this->validateRequest());

        $attendance->update($request->all());

        flashy()->success('Attendance record has been updated');

        return redirect()->route('attendances.index');
    }


    public function destroy(Attendance $attendance)
    {
        $attendance->delete();

        flashy()->success('Attendance record has been deleted');

        return redirect()->route('attendances.index');
    }
}
