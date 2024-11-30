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
        Schema::create('sqf01', function (Blueprint $table) {
            $table->id();
            $table->string('person_perform')->nullable();
            $table->string('person_perfo_check')->nullable();
            $table->string('time_of_check')->nullable();
            $table->date('date')->nullable();
            $table->string('no_condensation')->nullable();
            $table->string('no_rodent')->nullable();
            $table->string('handwash_station')->nullable();
            $table->string('inedible_room')->nullable();
            $table->string('receiving_area')->nullable();
            $table->string('killing_area_walls')->nullable();
            $table->string('kill_room_knives')->nullable();
            $table->string('kill_room_product')->nullable();
            $table->string('picking_area_walls')->nullable();
            $table->string('picking_area_picker')->nullable();
            $table->string('scald_vat')->nullable();
            $table->string('evisceration_table')->nullable();
            $table->string('evisceration_walls')->nullable();
            $table->string('giblet_table')->nullable();
            $table->string('chill_tanks')->nullable();
            $table->string('scale_shovels')->nullable();
            $table->string('ice_machines')->nullable();
            $table->string('hand_trucks')->nullable();
            $table->string('packing_area_walls')->nullable();
            $table->string('packing_scales')->nullable();
            $table->string('coolers_freezer')->nullable();
            $table->string('all_contact_surfaces')->nullable();
            $table->string('cooler_temp')->nullable();
            $table->string('cooler_2_temp')->nullable();
            $table->string('freezer_temp')->nullable();
            $table->string('paa_concentration')->nullable();
            $table->string('no_rodent_droppings')->nullable();
            $table->string('others')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sqf01');
    }
};
