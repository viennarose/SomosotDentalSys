<?php

namespace App\Models;

use App\Models\PatientRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class History extends Model
{
    use HasFactory;
    protected $fillable = [
        'prevDentist',
        'lastDental',
        'physician',
        'specialty',
        'physicianAdd',
        'officeNum',
        'goodHealth',
        'medTreatment',
        'surgicalOp',
        'hospitalized',
        'medications',
        'tobacco',
        'dangerousDrug',
        'allergies',
        'bleeding',
        'pregnant',
        'nursing',
        'birthControl',
        'bloodType',
        'bloodPressure',
        'conditions',
        'patient_id',
    ];

    public function patientRecord()
    {
        return $this->belongsTo(PatientRecord::class);
    }
}
