<?php

namespace App\Http\Controllers;

use App\Attendance;

class ApprovedAttendancesController extends Controller
{
    public function store(Attendance $attendance)
    {
        $attendance->update([
            'approved' => 'on',
        ]);


        return redirect()->back();
    }
}
