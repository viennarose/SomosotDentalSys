<?php

namespace App\Http\Livewire\Records\Treatment;

use App\Models\Service;
use Livewire\Component;
use App\Models\PatientRecord;
use App\Models\TreatmentRecord;

class Index extends Component
{
    public $dateToday, $treatmentRecords, $patientRecord_id, $toothNum, $procedure, $dentist, $amountCharged, $amountPaid, $balance, $nextAppt;

    public $search;
    public function loadRecords(){

        $query = TreatmentRecord::orderBy('dentist')
            ->search($this->search);

        $treatmentRecords = $query->paginate(5);
        return compact('treatmentRecords');
    }
    public function getPatientRecordProperty(){
        return PatientRecord::find($this->patientRecord_id);
    }
    public function closeModal()
    {
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function back(){
        return redirect('/admin/patients/');
    }

    public function resetInput()
    {
        $this->dateToday = '';
        $this->toothNum = '';
        $this->procedure = '';
        $this->dentist = '';
        $this->amountCharged = '';
        $this->amountPaid = '';
        $this->balance = '';
        $this->nextAppt = '';
    }

    public function addTreatment(){
        $this->validate([
            'dateToday' =>['string'],
            'toothNum'  =>['numeric'],
            'procedure' =>['required'],
            'dentist' =>['string'],
            'amountCharged' =>['numeric'],
            'amountPaid' =>['numeric'],
            //'balance' =>['numeric'],
            'nextAppt' =>['nullable'],
        ]);
        $patientRecord = PatientRecord::findOrFail($this->patientRecord_id);
        $patientRecord->treatmentRecords()->create([
            'dateToday' =>$this->dateToday,
            'toothNum'  =>$this->toothNum,
            'procedure' =>$this->procedure,
            'dentist' =>$this->dentist,
            'amountCharged' =>$this->amountCharged,
            'amountPaid' =>$this->amountPaid,
            'balance' =>$this->amountCharged - $this->amountPaid,
            'nextAppt' =>$this->nextAppt,
        ]);
        session()->flash('message','Appointment Added Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function editTreatment(int $treatment_id){
        $treatment = TreatmentRecord::find($treatment_id);
        if($treatment){
            $this->treatment_id = $treatment->id;
            $this->dateToday = $treatment->dateToday;
            $this->toothNum = $treatment->toothNum;
            $this->procedure = $treatment->procedure;
            $this->dentist = $treatment->dentist;
            $this->amountCharged = $treatment->amountCharged;
            $this->amountPaid = $treatment->amountPaid;
            $this->balance = $treatment->balance;
            $this->nextAppt = $treatment->nextAppt;
        }else{
            return redirect()->to('/admin/patients');
        }
    }
    public function updateTreatment(){
        $this->validate([
            'dateToday' =>['string'],
            'toothNum'  =>['numeric'],
            'procedure' =>['required'],
            'dentist' =>['string'],
            'amountCharged' =>['numeric'],
            'amountPaid' =>['numeric'],
            'balance' =>['numeric'],
            'nextAppt' =>['nullable'],
        ]);
        $patientRecord = PatientRecord::findOrFail($this->patientRecord_id);
        $patientRecord->treatmentRecords()->where('id',$this->treatment_id)->update([
            'dateToday' =>$this->dateToday,
            'toothNum'  =>$this->toothNum,
            'procedure' =>$this->procedure,
            'dentist' =>$this->dentist,
            'amountCharged' =>$this->amountCharged,
            'amountPaid' =>$this->amountPaid,
            'balance' =>$this->balance,
            'nextAppt' =>$this->nextAppt,
        ]);
        session()->flash('message','Treatment Updated Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');

    }
    public function deleteTreatment(int $treatment_id)
    {
        $this->treatment_id = $treatment_id;
    }

    public function destroyTreatment()
    {
        TreatmentRecord::find($this->treatment_id)->delete();
        session()->flash('message','Treatment Deleted Successfully');
        $this->dispatchBrowserEvent('close-modal');
    }
    public function render()
    {
        $treatmentRecords = TreatmentRecord::where('dentist', 'like', '%'.$this->search.'%')
                ->orderBy('dentist', 'desc')->paginate(5);
        return view('livewire.records.treatment.index', $this->loadRecords(),
            ['treatmentRecords', TreatmentRecord::all(), 'patientRecord'=> PatientRecord::all(), 'services'=> Service::all()]);
    }
}
