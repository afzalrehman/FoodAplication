<?php

namespace App\Http\Controllers\plantmanager\haccp;

use App\Http\Controllers\Controller;
use App\Models\HACCPTreeModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HACCP03Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['haccp03Record'] = HACCPTreeModel::getAllRecord();
        return view('plant_manager.haccp.haccp_03.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['plantManagerRecord'] = User::where('role', '=', '4')->get();
        return view('plant_manager.haccp.haccp_03.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = new HACCPTreeModel();
        $data->person_perform = Auth::user()->username;
        $data->person_perfo_check = trim($request['person_perfo_check']);
        $data->date = trim($request['date']);
        $data->time = trim($request['time']);
        $data->thermo_id = trim($request['thermo_id']);
        $data->personal_thermometer = trim($request['personal_thermometer']);
        $data->adjustment_required = trim($request['adjustment_required']);
        $data->initials = trim($request['initials']);
        $data->corrective_action = trim($request['corrective_action']);
        $data->preventive_action = trim($request['preventive_action']);

        if ($data->save()) {
            return redirect()->route('plantmanager.haccp_3.index')->with('success', 'Data saved successfully');
        } else {
            return redirect()->back()->withErrors('Failed to save the data. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['haccp03Record'] = HACCPTreeModel::find($id);

        $sqf = $data['haccp03Record']->person_perfo_check;
        $data['plantManagerRecord'] = User::where('username', '!=', $sqf)
            ->where('role', '=', '4')
            ->get();

        return view('plant_manager.haccp.haccp_03.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['haccp03Record'] = HACCPTreeModel::find($id);

        $sqf = $data['haccp03Record']->person_perfo_check;
        $data['plantManagerRecord'] = User::where('username', '!=', $sqf)
            ->where('role', '=', '4')
            ->get();

        return view('plant_manager.haccp.haccp_03.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = HACCPTreeModel::find($id);
        $data->person_perform = Auth::user()->username;
        $data->person_perfo_check = trim($request['person_perfo_check']);
        $data->date = trim($request['date']);
        $data->time = trim($request['time']);
        $data->thermo_id = trim($request['thermo_id']);
        $data->personal_thermometer = trim($request['personal_thermometer']);
        $data->adjustment_required = trim($request['adjustment_required']);
        $data->initials = trim($request['initials']);
        $data->corrective_action = trim($request['corrective_action']);
        $data->preventive_action = trim($request['preventive_action']);

        if (!$data) {
            return redirect()->route('plantmanager.haccp_3.index')->withErrors('Item not found.');
        }

        if ($data->save()) {
            return redirect()->route('plantmanager.haccp_3.index')->with('success', 'Data updated successfully');
        } else {
            return redirect()->back()->withErrors('Failed to save the data. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = HACCPTreeModel::find($id);

        if (!$data) {
            return redirect()->route('plantmanager.haccp_3.index')->withErrors('Item not found.');
        }

        // Delete the main record
        if ($data->delete()) {
            return redirect()->route('plantmanager.haccp_3.index')->with('success', 'Data deleted successfully.');
        } else {
            return redirect()->back()->withErrors('Failed to delete the item. Please try again.');
        }
    }
}
