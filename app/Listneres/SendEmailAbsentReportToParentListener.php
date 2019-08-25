<?php

namespace App\Listneres;

use App\Events\AbsentReportSendToParents;
use App\Mail\StudentAbsentReportMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailAbsentReportToParentListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  AbsentReportSendToParents  $event
     * @return void
     */
    public function handle(AbsentReportSendToParents $event)
    {
        return $event->attendance;

        Mail::to($event->attendance->email)
            ->send(new StudentAbsentReportMail($event->attendance));
    }
}
