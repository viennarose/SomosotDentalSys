<?php

namespace App\Http\Livewire\Records;

use Livewire\Component;
use App\Models\PatientRecord;

class Edit extends Component
{
    public $name, $nickname, $birthdate, $age, $sex, $homeNum, $patientRecord_id,
        $officeNum, $faxNum, $contact, $email, $religion, $nationality,
        $address, $occupation, $insurance, $effectDate, $parentName, $parentJob, $referral, $visitReason;

    public $prevDentist, $lastDental, $physician, $specialty, $physicianAdd, $goodHealth, $medTreatment,
        $surgicalOp, $hospitalized, $medications, $tobacco, $dangerousDrug,
        $bleeding, $pregnant, $nursing, $birthControl, $bloodType, $bloodPressure;

    public $allergies=[''];
    public $conditions=[''];
    public function mount(){
        $this->currentStep = 1;
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

    public function back(){
        return redirect('/admin/patients/');
    }

    public function validateData(){
        if($this->currentStep == 1){
            $this->validate([
                'name' => ['required', 'string'],
                'birthdate' => ['date', 'required'],
                'age' => ['required'],
                'sex' => ['required',],
                'nickname' => ['nullable',],
                'homeNum' => ['numeric', 'nullable'],
                'officeNum' => ['numeric', 'nullable'],
                'faxNum' => ['numeric', 'nullable'],
                'contact' => ['numeric', 'nullable'],
                'email' => ['email', 'nullable'],
                'religion' => ['string', 'nullable'],
                'nationality' => ['string', 'nullable'],
                'address' => ['string', 'nullable'],
                'occupation' => ['string', 'nullable'],
                'insurance' => ['string', 'nullable'],
                'effectDate' => ['date', 'nullable'],
                'parentName' => ['string', 'nullable'],
                'parentJob' => ['nullable', 'string'],
                'referral' => ['string', 'nullable'],
                'visitReason' => ['string', 'nullable'],
            ]);
        }elseif($this->currentStep == 2){
            $this->validate([
                'prevDentist'=>['nullable',],
                'lastDental'=>['nullable',],
                'physician'=>['nullable',],
                'specialty'=>['nullable',],
                'physicianAdd'=>['nullable',],
                'officeNum'=>['nullable',],
                'goodHealth'=>['nullable',],
                'medTreatment'=>['nullable',],
                'surgicalOp'=>['nullable',],
                'hospitalized'=>['nullable',],
                'medications'=>['nullable',],
                'tobacco'=>['nullable',],
                'dangerousDrug'=>['nullable',],
                'allergies'=>['nullable',],
                'bleeding'=>['nullable',],
                'pregnant'=>['nullable',],
                'nursing'=>['nullable',],
                'birthControl'=>['nullable',],
                'bloodType'=>['nullable',],
                'bloodPressure'=>['nullable',],
                'conditions'=>['nullable',],
            ]);
        }
    }

    public function updatePatientRecord(){
        $this->patientRecord->update([
            'name' =>$this->name,
            'birthdate' =>$this->birthdate,
            'age' =>$this->age,
            'sex' =>$this->sex,
            'nickname' =>$this->nickname,
            'homeNum' =>$this->homeNum,
            'officeNum' =>$this->officeNum,
            'faxNum' =>$this->faxNum,
            'contact' =>$this->contact,
            'email' =>$this->email,
            'religion' =>$this->religion,
            'nationality' =>$this->nationality,
            'address' =>$this->address,
            'occupation' =>$this->occupation,
            'insurance' =>$this->insurance,
            'effectDate' =>$this->effectDate,
            'parentName' =>$this->parentName,
            'parentJob' =>$this->parentJob,
            'referral' =>$this->referral,
            'visitReason' =>$this->visitReason,
        ]);

        $this->patientRecord->history->update([
            'prevDentist'=>$this->prevDentist,
            'lastDental'=>$this->lastDental,
            'physician'=>$this->physician,
            'specialty'=>$this->specialty,
            'physicianAdd'=>$this->physicianAdd,
            'officeNum'=>$this->officeNum,
            'goodHealth'=>$this->goodHealth,
            'medTreatment'=>$this->medTreatment,
            'surgicalOp'=>$this->surgicalOp,
            'hospitalized'=>$this->hospitalized,
            'medications'=>$this->medications,
            'tobacco'=>$this->tobacco,
            'dangerousDrug'=>$this->dangerousDrug,
            'allergies'=>implode(' ,',$this->allergies),
            'bleeding'=>$this->bleeding,
            'pregnant'=>$this->pregnant,
            'nursing'=>$this->nursing,
            'birthControl'=>$this->birthControl,
            'bloodType'=>$this->bloodType,
            'bloodPressure'=>$this->bloodPressure,
            'conditions'=>implode(' ,',$this->conditions),
        ]);
        return redirect('/admin/patients/');
    }

    public function getPatientRecordProperty(){
        return PatientRecord::find($this->patientRecord_id);
    }
    public function render()
    {
        return view('livewire.records.edit', ['patientRecord'=> PatientRecord::all()]);
    }
}
