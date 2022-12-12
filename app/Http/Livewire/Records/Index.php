<?php

namespace App\Http\Livewire\Records;

use App\Models\Consent;
use App\Models\History;
use App\Models\Service;
use Livewire\Component;
use App\Models\PatientRecord;
use Illuminate\Support\Facades\Storage;

class Index extends Component
{
    public $search, $patientRecord_id;
    public function loadRecords(){

        $query = PatientRecord::orderBy('name')
            ->search($this->search);

        $patients = $query->paginate(5);
        return compact('patients');
    }

    public function deletePatientRecord($id)
    {
       PatientRecord::findOrFail($id)->delete();
    }


    public function render()
    {
        $consents=Consent::get();
        $patients = PatientRecord::where('name', 'like', '%'.$this->search.'%')
                ->orderBy('name', 'desc')->paginate(5);
        return view('livewire.records.index', compact('consents'), $this->loadRecords(), ['patients'=>PatientRecord::all()] );
    }
}
