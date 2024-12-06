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
        Schema::create('haccp04', function (Blueprint $table) {
            $table->id();
            $table->string('person_perform')->nullable();
            $table->string('person_perfo_check')->nullable();
            $table->enum('person_perfo_approve', ['Progress', 'Verify', 'Unverify', 'Rejected'])->default('Progress')->nullable();
            $table->string('time_of_check')->nullable();
            $table->string('comments')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('initials')->nullable();
            $table->string('product_name')->nullable();
            $table->string('total_weight')->nullable();
            $table->text('cause_of_deviation')->nullable();
            $table->text('measures_to_ensure')->nullable();
            $table->text('measures_to_prevent')->nullable();
            $table->text('ensure_that_no_product')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('haccp04');
    }
};
