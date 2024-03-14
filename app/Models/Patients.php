<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'gender',
        'date_of_birth',
        'age',
        'file_number',
        'diagnosis_record'
    ];

     // Define relationship with diagnoses
     public function diagnoses()
     {
        //  return $this->hasMany(PatientDiagnosis::class, 'patient_id', 'id');
     }
}
