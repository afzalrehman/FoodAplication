<?php

namespace App\Http\Controllers\plantmanager\sqf;

use App\Http\Controllers\Controller;
use App\Models\SQFTwoModel;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SQF02Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['sqf02Record'] = SQFTwoModel::getAllRecord();
        return view('plant_manager.sqf.sqf_02.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['plantManagerRecord'] = User::where('role', '=', '2')->get();
        return view('plant_manager.sqf.sqf_02.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new SQFTwoModel();
        $data->person_perform = Auth::user()->username;
        $data->person_perfo_check = trim($request['person_perfo_check']);
        $data->date = trim($request['date']);
        $data->no_condensation = trim($request['no_condensation']);
        $data->no_rodent_activity = trim($request['no_rodent_activity']);
        $data->handwash_station = trim($request['handwash_station']);
        $data->employee_hygiene = trim($request['employee_hygiene']);
        $data->cooler1_temp = trim($request['cooler1_temp']);
        $data->cooler2_temp = trim($request['cooler2_temp']);
        $data->freezer_temp = trim($request['freezer_temp']);
        $data->paa_concentration = trim($request['paa_concentration']);
        $data->no_rodent_droppings = trim($request['no_rodent_droppings']);
        $data->rework_chicken_process = trim($request['rework_chicken_process']);
        $data->others = trim($request['others']);

        if (!$data) {
            return redirect()->route('plantmanager.sqf_2.index')->withErrors('Item not found.');
        }

        if ($data->save()) {
            return redirect()->route('plantmanager.sqf_2.index')->with('success', 'Data saved successfully');
        } else {
            return redirect()->back()->withErrors('Failed to delete the item. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the record by ID
        $data['sqf02Record'] = SQFTwoModel::find($id);

        // Check if the record exists
        if (!$data['sqf02Record']) {
            return redirect()->route('plantmanager.sqf_2.index')->withErrors('Record not found.');
        }

        // Access the person_perfo_check field
        $sqf = $data['sqf02Record']->person_perfo_check;

        // Fetch related user records
        $data['plantManagerRecord'] = User::where('username', '!=', $sqf)
            ->where('role', '=', '2')
            ->get();

        // Return the view with data
        return view('plant_manager.sqf.sqf_02.view', $data);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the record by ID
        $data['sqf02Record'] = SQFTwoModel::find($id);

        // Check if the record exists
        if (!$data['sqf02Record']) {
            return redirect()->route('qc.sqf_2.index')->withErrors('Record not found.');
        }

        // Access the person_perfo_check field
        $sqf = $data['sqf02Record']->person_perfo_check;

        // Fetch related user records
        $data['plantManagerRecord'] = User::where('username', '!=', $sqf)
            ->where('role', '=', '2')
            ->get();

        // Return the view with data
        return view('plant_manager.sqf.sqf_02.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = SQFTwoModel::find($id);
        $data->person_perform = Auth::user()->username;
        $data->person_perfo_check = trim($request['person_perfo_check']);
        $data->date = trim($request['date']);
        $data->no_condensation = trim($request['no_condensation']);
        $data->no_rodent_activity = trim($request['no_rodent_activity']);
        $data->handwash_station = trim($request['handwash_station']);
        $data->employee_hygiene = trim($request['employee_hygiene']);
        $data->cooler1_temp = trim($request['cooler1_temp']);
        $data->cooler2_temp = trim($request['cooler2_temp']);
        $data->freezer_temp = trim($request['freezer_temp']);
        $data->paa_concentration = trim($request['paa_concentration']);
        $data->no_rodent_droppings = trim($request['no_rodent_droppings']);
        $data->rework_chicken_process = trim($request['rework_chicken_process']);
        $data->others = trim($request['others']);

        if (!$data) {
            return redirect()->route('plantmanager.sqf_2.index')->withErrors('Item not found.');
        }

        if ($data->save()) {
            return redirect()->route('plantmanager.sqf_2.index')->with('success', 'Data Update successfully');
        } else {
            return redirect()->back()->withErrors('Failed to delete the item. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = SQFTwoModel::find($id);

        if (!$data) {
            return redirect()->route('plantmanager.sqf_2.index')->withErrors('Item not found.');
        }

        if ($data->delete()) {
            return redirect()->route('plantmanager.sqf_2.index')->with('success', 'Data deleted successfully');
        } else {
            return redirect()->back()->withErrors('Failed to delete the item. Please try again.');
        }
    }
}
