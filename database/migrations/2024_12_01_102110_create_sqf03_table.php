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
        Schema::create('sqf03', function (Blueprint $table) {
            $table->id();
            $table->string('person_perform')->nullable();
            $table->string('person_perfo_check')->nullable();
            $table->enum('person_perfo_approve', ['Progress', 'Verify', 'Unverify', 'Rejected'])->default('Progress')->nullable();
            $table->string('time_of_check')->nullable();
            $table->string('comments')->nullable();
            $table->string('date')->nullable();
            $table->string('ssop_form_number')->nullable();
            $table->string('area_number')->nullable();
            $table->string('deficiencies')->nullable();
            $table->string('corrective_actions')->nullable();
            $table->string('preventive_actions')->nullable();
            $table->string('time_completed')->nullable();
            $table->string('initial')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sqf03');
    }
};
