<?php

namespace App\Http\Controllers\haccp;

use App\Http\Controllers\Controller;
use App\Models\HACCPTwoModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HACCP02Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['haccp02Record'] = HACCPTwoModel::getAllRecord();
        return view('QC.haccp.haccp_02.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['plantManagerRecord'] = User::where('role', '=', '2')->get();
        return view('QC.haccp.haccp_02.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $data = new HACCPTwoModel();
        $data->person_perform = Auth::user()->username;
        $data->person_perfo_check = trim($request['person_perfo_check']);
        $data->date = trim($request['date']);
        $data->time = trim($request['time']);
        $data->product_name = trim($request['product_name']);
        $data->internal_temp = trim($request['internal_temp']);
        $data->initials = trim($request['initials']);
        $data->pre_shipper = trim($request['pre_shipper']);
        $data->verification_date = trim($request['verification_date']);
        $data->verified_initials = trim($request['verified_initials']);
        $data->verified_date = trim($request['verified_date']);
        $data->verified_time = trim($request['verified_time']);
        $data->verified_method = trim($request['verified_method']);
        $data->results = trim($request['results']);

        if ($data->save()) {
            return redirect()->route('qc.haccp_2.index')->with('success', 'Data saved successfully');
        } else {
            return redirect()->back()->withErrors('Failed to save the data. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['haccp02Record'] = HACCPTwoModel::find($id);

        $sqf = $data['haccp02Record']->person_perfo_check;
        $data['plantManagerRecord'] = User::where('username', '!=', $sqf)
            ->where('role', '=', '2')
            ->get();

        return view('QC.haccp.haccp_02.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['haccp02Record'] = HACCPTwoModel::find($id);

        $sqf = $data['haccp02Record']->person_perfo_check;
        $data['plantManagerRecord'] = User::where('username', '!=', $sqf)
            ->where('role', '=', '2')
            ->get();

        return view('QC.haccp.haccp_02.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = HACCPTwoModel::find($id);
        $data->person_perform = Auth::user()->username;
        $data->person_perfo_check = trim($request['person_perfo_check']);
        $data->date = trim($request['date']);
        $data->time = trim($request['time']);
        $data->product_name = trim($request['product_name']);
        $data->internal_temp = trim($request['internal_temp']);
        $data->initials = trim($request['initials']);
        $data->pre_shipper = trim($request['pre_shipper']);
        $data->verification_date = trim($request['verification_date']);
        $data->verified_initials = trim($request['verified_initials']);
        $data->verified_date = trim($request['verified_date']);
        $data->verified_time = trim($request['verified_time']);
        $data->verified_method = trim($request['verified_method']);
        $data->results = trim($request['results']);

        if (!$data) {
            return redirect()->route('qc.haccp_2.index')->withErrors('Item not found.');
        }

        if ($data->save()) {
            return redirect()->route('qc.haccp_2.index')->with('success', 'Data updated successfully');
        } else {
            return redirect()->back()->withErrors('Failed to save the data. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = HACCPTwoModel::find($id);

        if (!$data) {
            return redirect()->route('qc.haccp_2.index')->withErrors('Item not found.');
        }

        // Delete the main record
        if ($data->delete()) {
            return redirect()->route('qc.haccp_2.index')->with('success', 'Data deleted successfully.');
        } else {
            return redirect()->back()->withErrors('Failed to delete the item. Please try again.');
        }
    }
}
