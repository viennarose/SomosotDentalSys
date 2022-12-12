<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use App\Models\Testimony;
use App\Models\Appointment;
use App\Models\PatientRecord;
use Illuminate\Support\Carbon;
use App\Models\TreatmentRecord;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        //$totalCancellation = Cancellation::count();
        $totalServices = Service::count();
        $totalTestimonies = Testimony::count();
        $totalAppointments = Appointment::count();
        $totalPatientRecords = PatientRecord::count();
        $totalTreatmentRecords = TreatmentRecord::count();
        //total appointments today(current)

        //$todayDate = Carbon::now()->format('m-d-y');
        $todayDate = Carbon::today()->format('m-d-y');
        $todayDateString = Carbon::now()->format('F j, Y');
        $thisMonth = Carbon::now()->format('m');
        $thisMonthString = Carbon::now()->format('F');
        $thisYear = Carbon::now()->format('Y');
        $appointmentsToday = Appointment::whereDate('schedule', $todayDate)->count();
        $appointmentsThisMonth = Appointment::whereMonth('schedule', $thisMonth)->count();
        $appointmentsThisYear = Appointment::whereYear('schedule', $thisYear)->count();


        return view('admin.dashboard', compact('totalServices',
                                                'totalAppointments',
                                                'totalTestimonies',
                                                'totalPatientRecords',
                                                'totalTreatmentRecords',
                                                'appointmentsToday',
                                                'appointmentsThisMonth', 'todayDateString',
                                                'appointmentsThisYear', 'todayDate', 'thisMonth', 'thisYear', 'thisMonthString'));
    }
}
