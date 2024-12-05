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
        // Schema::create('haccp02_weekly_verification', function (Blueprint $table) { // Corrected table name
        //     $table->id(); // `id` is automatically unsigned in Laravel
        //     $table->string('verified_initials')->nullable();
        //     $table->string('verified_date')->nullable();
        //     $table->string('verified_time')->nullable();
        //     $table->string('verified_method')->nullable();
        //     $table->string('results')->nullable();
        //     $table->timestamps();
        // });

        Schema::create('haccp02', function (Blueprint $table) {
            $table->id(); // `id` is automatically unsigned
            $table->string('person_perform')->nullable();
            $table->string('person_perfo_check')->nullable();
            $table->enum('person_perfo_approve', ['Progress', 'Verify', 'Unverify', 'Rejected'])->default('Progress')->nullable();
            $table->string('time_of_check')->nullable();
            $table->string('comments')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('product_name')->nullable();
            $table->string('internal_temp')->nullable();
            $table->string('initials')->nullable();
            $table->string('pre_shipper')->nullable();
            $table->string('verification_date')->nullable();
            $table->string('verified_initials')->nullable();
            $table->string('verified_date')->nullable();
            $table->string('verified_time')->nullable();
            $table->string('verified_method')->nullable();
            $table->string('results')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('haccp02');
    }
};
