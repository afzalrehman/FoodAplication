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
        Schema::create('haccp03', function (Blueprint $table) {
            $table->id();
            $table->string('person_perform')->nullable();
            $table->string('person_perfo_check')->nullable();
            $table->enum('person_perfo_approve', ['Progress', 'Verify', 'Unverify', 'Rejected'])->default('Progress')->nullable();
            $table->string('time_of_check')->nullable();
            $table->string('comments')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('thermo_id')->nullable();
            $table->string('personal_thermometer')->nullable();
            $table->enum('adjustment_required', ['Yes', 'No'])->nullable();
            $table->string('initials')->nullable();
            $table->string('corrective_action')->nullable();
            $table->string('preventive_action')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('haccp03');
    }
};
