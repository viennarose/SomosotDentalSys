<?php

namespace App\Models;

use App\Models\Service;
use App\Models\PatientRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TreatmentRecord extends Model
{
    use HasFactory;

    protected $table = 'treatment_records';
    protected $fillable = [
        'dateToday',
        'toothNum',
        'procedure',
        'dentist',
        'amountCharged',
        'amountPaid',
        'balance',
        'nextAppt',
        'patient_id',
    ];

    public function patientRecord()
    {
        return $this->belongsTo(PatientRecord::class, 'patient_id', 'id');
    }
    public function service(){
        return $this->belongsTo(Service::class, 'procedure', 'id');
    }

    public function scopeSearch($query, $terms){
        collect(explode(" " , $terms))->filter()->each(function($term) use($query){
            $term = '%'. $term . '%';
            $query->where('dentist', 'like', $term);
        });
    }
}
