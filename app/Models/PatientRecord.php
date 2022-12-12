<?php

namespace App\Models;

use App\Models\Consent;
use App\Models\TreatmentRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PatientRecord extends Model
{
    use HasFactory;
    protected $table = 'patient_records';
    protected $fillable = [
        'name',
        'birthdate',
        'age',
        'sex',
        'nickname',
        'homeNum',
        'officeNum',
        'faxNum',
        'contact',
        'email',
        'religion',
        'nationality',
        'address',
        'occupation',
        'insurance',
        'effectDate',
        'parentName',
        'parentJob',
        'referral',
        'visitReason',

    ];
    public function treatmentRecords(){
        return $this->hasMany(TreatmentRecord::class, 'patient_id', 'id');
    }
    public function history(){
        return $this->hasOne(History::class, 'patient_id', 'id');
    }
    public function consent(){
        return $this->hasOne(Consent::class, 'patient_id', 'id');
    }
    public function scopeSearch($query, $terms){
        collect(explode(" " , $terms))->filter()->each(function($term) use($query){
            $term = '%'. $term . '%';
            $query->where('name', 'like', $term);
        });
    }

}
