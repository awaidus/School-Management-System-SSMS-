<?php

namespace App\Http\Controllers;

use App\Attendance;

class ApprovedAttendancesController extends Controller
{
    public function index()
    {
        $attendances = Attendance::latest('working_day')
            ->WithStudent()
            ->approvedAttendances()
            ->paginate(10);

        return view('attendance.approved-index', compact('attendances'));
    }

    public function store(Attendance $attendance)
    {
        $attendance->update([
            'approved' => 'on',
        ]);


        return redirect()->back();
    }
}
