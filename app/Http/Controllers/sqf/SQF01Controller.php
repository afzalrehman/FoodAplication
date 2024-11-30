<?php

namespace App\Http\Controllers\sqf;

use App\Http\Controllers\Controller;
use App\Models\SQFOneModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SQF01Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('QC.sqf.sqf_01');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $data = new SQFOneModel();
        $data->person_perform = Auth::user()->username;
        $data->date = trim($request['date']);
        $data->no_condensation = trim($request['no_condensation']);
        $data->no_rodent = trim($request['no_rodent']);
        $data->handwash_station = trim($request['handwash_station']);
        $data->inedible_room = trim($request['inedible_room']);
        $data->receiving_area = trim($request['receiving_area']);
        $data->killing_area_walls = trim($request['killing_area_walls']);
        $data->kill_room_knives = trim($request['kill_room_knives']);
        $data->kill_room_product = trim($request['kill_room_product']);
        $data->picking_area_walls = trim($request['picking_area_walls']);
        $data->picking_area_picker = trim($request['picking_area_picker']);
        $data->scald_vat = trim($request['scald_vat']);
        $data->evisceration_table = trim($request['evisceration_table']);
        $data->evisceration_walls = trim($request['evisceration_walls']);
        $data->giblet_table = trim($request['giblet_table']);
        $data->chill_tanks = trim($request['chill_tanks']);
        $data->scale_shovels = trim($request['scale_shovels']);
        $data->ice_machines = trim($request['ice_machines']);
        $data->hand_trucks = trim($request['hand_trucks']);
        $data->packing_area_walls = trim($request['packing_area_walls']);
        $data->packing_scales = trim($request['packing_scales']);
        $data->coolers_freezer = trim($request['coolers_freezer']);
        $data->all_contact_surfaces = trim($request['all_contact_surfaces']);
        $data->cooler_temp = trim($request['cooler_temp']);
        $data->cooler_2_temp = trim($request['cooler_2_temp']);
        $data->freezer_temp = trim($request['freezer_temp']);
        $data->paa_concentration = trim($request['paa_concentration']);
        $data->no_rodent_droppings = trim($request['no_rodent_droppings']);
        $data->others = trim($request['others']);

        $data->save();
        return redirect()->back()->with('success', 'Data saved successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
