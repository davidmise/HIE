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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->bigIncrements('patient_id'); // Custom primary key
            $table->string('gender');
            $table->date('date_of_birth');
            $table->integer('age');
            $table->integer('file_number');
            $table->string('diagnosis_record');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_patient');
    }
};
