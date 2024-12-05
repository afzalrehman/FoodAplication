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
        Schema::create('ccp1', function (Blueprint $table) {
            $table->id();
            $table->string('time')->nullable();
            $table->string('results_fecal')->nullable();
            $table->string('monitor_verifier')->nullable();
            $table->string('verifier_initial')->nullable();
            $table->string('verified_date')->nullable();
            $table->string('verified_time')->nullable();
            $table->string('results')->nullable();
            $table->string('verification_method')->nullable();
            $table->timestamps();
        });
        Schema::create('ccp2', function (Blueprint $table) {
            $table->id();
            $table->string('time_in')->nullable();
            $table->string('time_out')->nullable();
            $table->string('temp_f')->nullable();
            $table->string('initial')->nullable();
            $table->string('verifier_initial')->nullable();
            $table->string('verified_date')->nullable();
            $table->string('verified_time')->nullable();
            $table->string('results')->nullable();
            $table->string('verification_method')->nullable();
            $table->timestamps();
        });
        Schema::create('ccp3', function (Blueprint $table) {
            $table->id();
            $table->string('time_in')->nullable();
            $table->string('time_out')->nullable();
            $table->string('temp_f')->nullable();
            $table->string('initial')->nullable();
            $table->string('verifier_initial')->nullable();
            $table->string('verified_date')->nullable();
            $table->string('verified_time')->nullable();
            $table->string('results')->nullable();
            $table->string('verification_method')->nullable();
            $table->timestamps();
        });
        Schema::create('ccp4', function (Blueprint $table) {
            $table->id();
            $table->string('time')->nullable();
            $table->string('results_fecal')->nullable();
            $table->string('monitor_verifier')->nullable();
            $table->string('verifier_initial')->nullable();
            $table->string('verified_date')->nullable();
            $table->string('verified_time')->nullable();
            $table->string('results')->nullable();
            $table->string('verification_method')->nullable();
            $table->timestamps();
        });
        Schema::create('ccp5', function (Blueprint $table) {
            $table->id();
            $table->string('time_in')->nullable();
            $table->string('time_out')->nullable();
            $table->string('temp_f')->nullable();
            $table->string('initial')->nullable();
            $table->string('verifier_initial')->nullable();
            $table->string('verified_date')->nullable();
            $table->string('verified_time')->nullable();
            $table->string('results')->nullable();
            $table->string('verification_method')->nullable();
            $table->timestamps();
        });
        Schema::create('haccp01', function (Blueprint $table) {
            $table->id();
            $table->string('person_perform')->nullable();
            $table->string('person_perfo_check')->nullable();
            $table->enum('person_perfo_approve', ['Progress', 'Verify', 'Unverify', 'Rejected'])->default('Progress')->nullable();
            $table->string('time_of_check')->nullable();
            $table->string('comments')->nullable();
            $table->string('date')->nullable();
            $table->foreignId('ccp1_ID')->constrained('ccp1')->references('id')->cascadeOnDelete();
            $table->foreignId('ccp2_ID')->constrained('ccp2')->references('id')->cascadeOnDelete();
            $table->foreignId('ccp3_ID')->constrained('ccp3')->references('id')->cascadeOnDelete();
            $table->foreignId('ccp4_ID')->constrained('ccp4')->references('id')->cascadeOnDelete();
            $table->foreignId('ccp5_ID')->constrained('ccp5')->references('id')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('haccp01');
    }
};
