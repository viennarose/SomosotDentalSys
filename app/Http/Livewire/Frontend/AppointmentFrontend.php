<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Service;
use Livewire\Component;
use App\Mail\ApptVerify;
use App\Mail\notifyMail;
use App\Mail\RemindMail;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use App\Models\Appointment;
use App\Rules\Verification;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Mail\AppointmentMailable;
use Illuminate\Support\Facades\Mail;

class AppointmentFrontend extends Component
{
    public $services_id, $schedule, $contact, $email, $firstName, $lastName, $refNum;

    public $totalSteps = 4;
    public $currentStep = 1;
    public $fromService;

    protected $listeners = ["selectDate" => 'getSelectedDate'];
    public function getSelectedDate($date) {
        $this->resetErrorBag();
        $this->schedule = $date;
    }
    public function mount(){
        $this->currentStep = 1;
    }

    public function setAppt($id){
        $images = Service::findorFail($id);
        $fromService = $this->id = $this->services_id;
        return redirect()->to('/set-appointment');
    }

    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if($this->currentStep > $this->totalSteps){
            $this->currentStep = $this->totalSteps;
        }

    }
    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }
    public function validateData(){
        if($this->currentStep == 1){
            $this->validate([
                'services_id' => ['required'],
                'schedule' => ['required', 'string', 'unique:appointments', new DateBetween, new TimeBetween],
            ]);
        }elseif($this->currentStep == 2){
            $this->validate([
                'email' => ['required', 'email'],
                'contact' => ['required', 'numeric'],
            ]);

        }if($this->currentStep == 3){
            $this->validate([
                'firstName' => ['required', 'string', 'max:255'],
                'lastName' => ['required', 'string', 'max:255'],
            ]);
        }
    }
    public function setAppointment(){
        try{
        $this->resetErrorBag();
        $refNum = 'SOM-'.Str::random(10);
    Appointment::create([
        'services_id' => $this->services_id,
        'schedule' => $this->schedule,
        'contact' => $this->contact,
        'email' => $this->email,
        'firstName' => $this->firstName,
        'lastName' => $this->lastName,
        'refNum' => $refNum,
    ]);

    Mail::to($this->email)->send(new AppointmentMailable
        ($this->firstName, $this->lastName, $this->schedule, $refNum));

    $data = ['name'=>$this->firstName.' '.$this->lastName,'email'=>$this->email, 'refNum' => $refNum];
        return redirect()->route('appointment.success', $data);

    }catch(\Exception $e){
        $data = ['name'=>$this->firstName.' '.$this->lastName,'email'=>$this->email, 'refNum' => $refNum];
        return redirect()->route('appointment.success', $data)->with('message', 'You have successfully set your appointment. But we cannot send you an email at the moment. Please take note of the following details');
    }
}

    // public function verify(){
    //     Mail::to($this->email)->send(new ApptVerify);
    //     return redirect()->route('appointment.verification');
    // }


    public function render()
    {
        return view('livewire.frontend.appointmentfrontend', ['services' => Service::all(), 'appointments' => Appointment::all()]);
    }
}
