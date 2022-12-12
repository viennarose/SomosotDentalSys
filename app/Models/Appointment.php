<?php

namespace App\Models;

use App\Models\Cancellation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointments';

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'services_id',
        'contact',
        'schedule',
        'refNum',
    ];

    protected $casts = [
        'schedule' => 'datetime'
    ];

    public function service(){
        return $this->belongsTo(Service::class, 'services_id', 'id');
    }

    public function scopeSearch($query, $terms){
        collect(explode(" " , $terms))->filter()->each(function($term) use($query){
            $term = '%'. $term . '%';

            $query->where('refNum', 'like', $term)
                ->orWhere('firstName', 'like', $term)
                ->orWhere('lastName', 'like', $term)
                ->orWhere('schedule', 'like', $term);
        });
    }
}
