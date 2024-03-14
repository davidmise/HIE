<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientDiagnosis extends Model
{
    protected $fillable = [
        'provider_id',
        'patient_id',
        'diagnosis_name',
        'diagnosis_code',
        'date_time',
        'diagnosis_procedure',
        'integration_bridge'
    ];

    // Define relationship with patient
    public function patient()
    {
        // return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }
}
