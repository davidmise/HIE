<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intergration_mediator extends Model
{
    use HasFactory;
    protected $fillable = [
        'gender',
        'diagnosis',
        'age',
        'phone',
        'provider_phone',
        'provider_names',
        'date_time',
        'file_number',
        'diagnosis_record'
    ];
}
