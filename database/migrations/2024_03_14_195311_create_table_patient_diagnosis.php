<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patient_diagnosis', function (Blueprint $table) {
            $table->id();
            $table->id('provider_id');
            $table->unsignedBigInteger('patient_id');
            $table->string('diagnosis_name');
            $table->string('diagnosis_code');
            $table->string('date_time');
            $table->string('diagnosis_procedure');
            $table->string('integration_bridge');
            $table->timestamps();

            // Foreign key constraint referencing the patient table's diagnosis_code column
            $table->foreign('diagnosis_record')->references('diagnosis_record')->on('patients');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_patient_diagnosis');
    }
};
