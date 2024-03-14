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
        Schema::create('intergration_mediator', function (Blueprint $table) {
            $table->id();
            $table->string('gender');
            $table->string('diagnosis');
            $table->integer('age');
            $table->string('phone');
            $table->string('provider_phone');
            $table->dateTime('date_time');
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
        Schema::dropIfExists('intergration_mediator');
    }
};
