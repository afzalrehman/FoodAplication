<?php

namespace App\Http\Controllers\plantmanager\sqf;

use App\Http\Controllers\Controller;
use App\Models\SQFTreeModel;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SQF03Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['sqf03Record'] = SQFTreeModel::getAllRecord();
        return view('plant_manager.sqf.sqf_03.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['plantManagerRecord'] = User::where('role', '=', '4')->get();
        return view('plant_manager.sqf.sqf_03.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new SQFTreeModel();
        $data->person_perform = Auth::user()->username;
        $data->person_perfo_check = trim($request['person_perfo_check']);
        $data->date = trim($request['date']);
        $data->ssop_form_number = trim($request['ssop_form_number']);
        $data->area_number = trim($request['area_number']);
        $data->deficiencies = trim($request['deficiencies']);
        $data->corrective_actions = trim($request['corrective_actions']);
        $data->preventive_actions = trim($request['preventive_actions']);
        $data->time_completed = trim($request['time_completed']);
        $data->initial = trim($request['initial']);

        if (!$data) {
            return redirect()->route('plantmanager.sqf_3.index')->withErrors('Item not found.');
        }

        if ($data->save()) {
            return redirect()->route('plantmanager.sqf_3.index')->with('success', 'Data saved successfully');
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
        $data['sqf03Record'] = SQFTreeModel::find($id);

        // Check if the record exists
        if (!$data['sqf03Record']) {
            return redirect()->route('plantmanager.sqf_3.index')->withErrors('Record not found.');
        }

        // Access the person_perfo_check field
        $sqf = $data['sqf03Record']->person_perfo_check;

        // Fetch related user records
        $data['plantManagerRecord'] = User::where('username', '!=', $sqf)
            ->where('role', '=', '4')
            ->get();

        // Return the view with data
        return view('plant_manager.sqf.sqf_03.view', $data);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the record by ID
        $data['sqf03Record'] = SQFTreeModel::find($id);

        // Check if the record exists
        if (!$data['sqf03Record']) {
            return redirect()->route('plantmanager.sqf_3.index')->withErrors('Record not found.');
        }

        // Access the person_perfo_check field
        $sqf = $data['sqf03Record']->person_perfo_check;

        // Fetch related user records
        $data['plantManagerRecord'] = User::where('username', '!=', $sqf)
            ->where('role', '=', '4')
            ->get();

        // Return the view with data
        return view('plant_manager.sqf.sqf_03.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = SQFTreeModel::find($id);
        $data->person_perform = Auth::user()->username;
        $data->person_perfo_check = trim($request['person_perfo_check']);
        $data->date = trim($request['date']);
        $data->ssop_form_number = trim($request['ssop_form_number']);
        $data->area_number = trim($request['area_number']);
        $data->deficiencies = trim($request['deficiencies']);
        $data->corrective_actions = trim($request['corrective_actions']);
        $data->preventive_actions = trim($request['preventive_actions']);
        $data->time_completed = trim($request['time_completed']);
        $data->initial = trim($request['initial']);

        if (!$data) {
            return redirect()->route('plantmanager.sqf_3.index')->withErrors('Item not found.');
        }

        if ($data->save()) {
            return redirect()->route('plantmanager.sqf_3.index')->with('success', 'Data Update successfully');
        } else {
            return redirect()->back()->withErrors('Failed to delete the item. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = SQFTreeModel::find($id);

        if (!$data) {
            return redirect()->route('plantmanager.sqf_3.index')->withErrors('Item not found.');
        }

        if ($data->delete()) {
            return redirect()->route('plantmanager.sqf_3.index')->with('success', 'Data deleted successfully');
        } else {
            return redirect()->back()->withErrors('Failed to delete the item. Please try again.');
        }
    }
}
