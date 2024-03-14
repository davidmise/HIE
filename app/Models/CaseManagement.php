<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dhis extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_diagnosis',
        'age',
        'provider_phone',
        'provider_names',
        'date_time',
        'health_facility',
    ];
}
