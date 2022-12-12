<?php

namespace App\Http\Livewire\Records;

use Livewire\Request;
use Livewire\Component;
use App\Models\PatientRecord;

class Create extends Component
{
    public $name, $nickname, $birthdate, $age, $sex, $homeNum,
        $officeNum, $faxNum, $contact, $email, $religion, $nationality,
        $address, $occupation, $insurance, $effectDate, $parentName, $parentJob, $referral, $visitReason;

    public $prevDentist, $lastDental, $physician, $specialty, $physicianAdd, $goodHealth, $medTreatment,
        $surgicalOp, $hospitalized, $medications, $tobacco, $dangerousDrug,
        $bleeding, $pregnant, $nursing, $birthControl, $bloodType, $bloodPressure;
    public $allergies=[''];
    public $conditions=[''];

    public $patientSig, $dentistSig, $dateSig;


        public $totalSteps = 3;
    public $currentStep = 1;

    public function mount(){
        $this->currentStep = 1;

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
    public function addPatientRecord(){
        $patientRecord = PatientRecord::create([
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

        $patientRecord->history()->create([
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
            'conditions'=> implode(' ,', $this->conditions),
        ]);
        return redirect('/admin/patients/'.$patientRecord->id.'/consent');
    }


    public function back(){
        return redirect('/admin/patients/');
    }
    public function render()
    {
        return view('livewire.records.create', ['patientRecord', PatientRecord::all()]);
    }
}
