<?php

namespace App\Http\Controllers;

use App\Attendance;
use Illuminate\Http\Request;

class MissingAttendancesController extends Controller
{
    public function index()
    {
        $attendances = Attendance::latest('working_day')
            ->WithStudent()
            ->missingAttendances()
            ->paginate(10);

//        return $attendances;

        return view('attendance.missing-index', compact('attendances'));
    }


}
