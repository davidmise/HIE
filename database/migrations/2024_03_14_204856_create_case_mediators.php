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
        Schema::create('case_mediators', function (Blueprint $table) {
            $table->id();
            $table->integer('age');
            $table->integer('provider_phone');
            $table->string('provider_name');
            $table->string('patient_diagnosis');
            $table->string('health_facility');
            $table->dateTime('date_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_mediators');
    }
};
