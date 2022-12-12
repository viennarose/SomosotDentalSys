<?php

namespace App\Http\Livewire\Records;

use Livewire\Component;
use App\Models\PatientRecord;
use Barryvdh\DomPDF\Facade\Pdf;

class Show extends Component
{
    public $name, $nickname, $birthdate, $age, $sex, $homeNum, $patientRecord_id,
        $officeNum, $faxNum, $contact, $email, $religion, $nationality,
        $address, $occupation, $insurance, $effectDate, $parentName, $parentJob, $referral, $visitReason;

    public $prevDentist, $lastDental, $physician, $specialty, $physicianAdd, $goodHealth, $medTreatment,
        $surgicalOp, $hospitalized, $medications, $tobacco, $dangerousDrug, $allergies,
        $bleeding, $pregnant, $nursing, $birthControl, $bloodType, $bloodPressure, $conditions;

        public function mount(){
        $this->name=$this->patientRecord->name;
        $this->birthdate=$this->patientRecord->birthdate;
        $this->age=$this->patientRecord->age;
        $this->sex=$this->patientRecord->sex;
        $this->nickname=$this->patientRecord->nickname;
        $this->homeNum=$this->patientRecord->homeNum;
        $this->officeNum=$this->patientRecord->officeNum;
        $this->faxNum=$this->patientRecord->faxNum;
        $this->contact=$this->patientRecord->contact;
        $this->email=$this->patientRecord->email;
        $this->religion=$this->patientRecord->religion;
        $this->nationality=$this->patientRecord->nationality;
        $this->address=$this->patientRecord->address;
        $this->occupation=$this->patientRecord->occupation;
        $this->insurance=$this->patientRecord->insurance;
        $this->effectDate=$this->patientRecord->effectDate;
        $this->parentName=$this->patientRecord->parentName;
        $this->parentJob=$this->patientRecord->parentJob;
        $this->referral=$this->patientRecord->referral;
        $this->visitReason=$this->patientRecord->visitReason;

        $this->prevDentist=$this->patientRecord->history->prevDentist;
        $this->lastDental=$this->patientRecord->history->lastDental;
        $this->physician=$this->patientRecord->history->physician;
        $this->specialty=$this->patientRecord->history->specialty;
        $this->physicianAdd=$this->patientRecord->history->physicianAdd;
        $this->officeNum=$this->patientRecord->history->officeNum;
        $this->goodHealth=$this->patientRecord->history->goodHealth;
        $this->medTreatment=$this->patientRecord->history->medTreatment;
        $this->surgicalOp=$this->patientRecord->history->surgicalOp;
        $this->hospitalized=$this->patientRecord->history->hospitalized;
        $this->medications=$this->patientRecord->history->medications;
        $this->tobacco=$this->patientRecord->history->tobacco;
        $this->dangerousDrug=$this->patientRecord->history->dangerousDrug;
        $this->allergies=$this->patientRecord->history->allergies;
        $this->bleeding=$this->patientRecord->history->bleeding;
        $this->pregnant=$this->patientRecord->history->pregnant;
        $this->nursing=$this->patientRecord->history->nursing;
        $this->birthControl=$this->patientRecord->history->birthControl;
        $this->bloodType=$this->patientRecord->history->bloodType;
        $this->bloodPressure=$this->patientRecord->history->bloodPressure;
        $this->conditions=$this->patientRecord->history->conditions;
    }

    public function getPatientRecordProperty(){
        return PatientRecord::find($this->patientRecord_id);
    }
    public function back(){
        return redirect('/admin/patients/');
    }
    public function generate(){

        $patients = PatientRecord::all();
        $data = ['patients'=> $patients];
        $pdf = Pdf::loadView('livewire.records.show', $data);
        return $pdf->download('record'.$patient->id.'.pdf');
    }

    public function render()
    {
        $patients = PatientRecord::get();
        return view('livewire.records.show');
    }
}
