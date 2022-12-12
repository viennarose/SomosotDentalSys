<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Mail\CancelMail;
use App\Models\Appointment;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class CancelAppt extends Component
{

    public $refNum, $email, $firstName, $schedule, $lastName;
    public $totalSteps = 2;
    public $currentStep = 1;

    protected $listeners = ["cancelDate" => 'getCancelDate'];
    public function getCancelDate($sched) {
        $this->resetErrorBag();
        $this->schedule = $sched;
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
                'firstName' => ['required'],
                'email' => ['required', 'email'],
                'refNum' => ['required', 'min:14', 'max:15', 'exists:appointments'],
                'schedule' => ['required', 'string', 'exists:appointments'],
            ]);
        }
    }
    public function cancel(){

        $appt = Appointment::where('refNum', 'LIKE', $this->refNum);
        try{
        $appt->delete();
        Mail::to($this->email)->send(new CancelMail
                ($this->firstName));
        return redirect()->route('cancelled.appointment');
        }catch(\Exception $e){
            return redirect()->route('cancelled.appointment')->with('message', 'You have successfully cancelled your appointment. But we cannot send you an email at the moment.');
        }
    }

    public function mount(){
        $this->currentStep = 1;
    }
    public function updated($propertySchedule)
    {
        $this->validateOnly($propertySchedule, [
            'refNum' => ['required'],
        ]);
    }
    public function render()
    {
        return view('livewire.frontend.cancel-appt', ['appointments' => Appointment::all()]);
    }
}
