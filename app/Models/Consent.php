<?php

namespace App\Models;

use App\Models\PatientRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Consent extends Model
{
    use HasFactory;
    protected $table = 'consents';
    protected $fillable = [
        'patientSig',
        'dentistSig',
        'patient_id',
    ];

    public function patientRecord()
    {
        return $this->belongsTo(PatientRecord::class);
    }
}
