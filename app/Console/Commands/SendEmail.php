<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Mail\notifyMail;
use App\Models\Appointment;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send emails 3 hours before scheduled appointment';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $appointments=Appointment::where('schedule','>',now())->get();
        //echo "Going over " . count($appointments) ." appointments....\n";
        foreach($appointments as $appt){
            // echo "checking $appt->lastName, $appt->firstName  $appt->schedule...\n";
             echo "time now: " . now() . "\n";
            $hrsDiff = $appt->schedule->diffInHours(now());
            echo $hrsDiff . "\n";
            if($hrsDiff<=3){
                //echo "Sending mail to $appt->email \n";
                Mail::to($appt->email)->send(new notifyMail
                ($this->firstName, $this->lastName, $this->schedule, $this->refNum));
            }else {
                echo "$appt->firstName is not within one hour of scheudle. \n";
            }
        }
    }
}
