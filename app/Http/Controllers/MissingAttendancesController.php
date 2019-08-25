<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Events\AbsentReportSendToParents;
use App\Mail\StudentAbsentReportMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MissingAttendancesController extends Controller
{
    public function index()
    {
        $attendances = Attendance::latest('working_day')
            ->WithStudent()
            ->missingAttendances()
            ->paginate(10);

        return view('attendance.missing-index', compact('attendances'));
    }

    public function Mail(Request $request)
    {
        $attendance = Attendance::having('id', $request->id)
            ->withStudent()
            ->get();

        event(new AbsentReportSendToParents($attendance->first()));

        return redirect()->back();
    }
}
