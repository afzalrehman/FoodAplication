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
        Schema::create('sqf02', function (Blueprint $table) {
            $table->id();
            $table->string('person_perform')->nullable();
            $table->string('person_perfo_check')->nullable();
            $table->enum('person_perfo_approve', ['Progress', 'Verify', 'Unverify', 'Rejected'])->default('Progress')->nullable();
            $table->string('time_of_check')->nullable();
            $table->string('comments')->nullable();
            $table->string('date')->nullable();
            $table->string('no_condensation')->nullable();
            $table->string('no_rodent_activity')->nullable();
            $table->string('handwash_station')->nullable();
            $table->string('employee_hygiene')->nullable();
            $table->string('cooler1_temp')->nullable();
            $table->string('cooler2_temp')->nullable();
            $table->string('freezer_temp')->nullable();
            $table->string('paa_concentration')->nullable();
            $table->string('no_rodent_droppings')->nullable();
            $table->string('rework_chicken_process')->nullable();
            $table->string('others')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sqf02');
    }
};
