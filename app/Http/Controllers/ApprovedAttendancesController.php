<?php

namespace App\Http\Controllers;

use App\Attendance;

class ApprovedAttendancesController extends Controller
{
    public function index()
    {
        if (auth()->user()->is_admin) {
            $attendances = Attendance::latest('working_day')
                ->WithStudent()
                ->approvedAttendances()
                ->paginate(10);
        } else {
            $attendances = Attendance::latest('working_day')
                ->WithStudent()
                ->where('parent_id', auth()->user()->parent_id)
                ->approvedAttendances()
                ->paginate(10);
        }

        return view('attendance.approved-index', compact('attendances'));
    }

    public function store(Attendance $attendance)
    {
        $attendance->update([
            'approved' => 'on',
        ]);

        flashy()->success('Attendance record has been updated');


        return redirect()->back();
    }
}
