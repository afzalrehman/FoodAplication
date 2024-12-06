<?php

namespace App\Http\Controllers\haccp;

use App\Http\Controllers\Controller;
use App\Models\HACCPFourModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HACCP04Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['haccp04Record'] = HACCPFourModel::getAllRecord();
        return view('QC.haccp.haccp_04.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['plantManagerRecord'] = User::where('role', '=', '2')->get();
        return view('QC.haccp.haccp_04.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = new HACCPFourModel();
        $data->person_perform = Auth::user()->username;
        $data->person_perfo_check = trim($request['person_perfo_check']);
        $data->date = trim($request['date']);
        $data->time = trim($request['time']);
        $data->initials = trim($request['initials']);
        $data->product_name = trim($request['product_name']);
        $data->total_weight = trim($request['total_weight']);
        $data->cause_of_deviation = trim($request['cause_of_deviation']);
        $data->measures_to_ensure = trim($request['measures_to_ensure']);
        $data->measures_to_prevent = trim($request['measures_to_prevent']);
        $data->ensure_that_no_product = trim($request['ensure_that_no_product']);

        if ($data->save()) {
            return redirect()->route('qc.haccp_4.index')->with('success', 'Data saved successfully');
        } else {
            return redirect()->back()->withErrors('Failed to save the data. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['haccp04Record'] = HACCPFourModel::find($id);

        $sqf = $data['haccp04Record']->person_perfo_check;
        $data['plantManagerRecord'] = User::where('username', '!=', $sqf)
            ->where('role', '=', '2')
            ->get();

        return view('QC.haccp.haccp_04.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['haccp04Record'] = HACCPFourModel::find($id);

        $sqf = $data['haccp04Record']->person_perfo_check;
        $data['plantManagerRecord'] = User::where('username', '!=', $sqf)
            ->where('role', '=', '2')
            ->get();

        return view('QC.haccp.haccp_04.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = HACCPFourModel::find($id);
        $data->person_perform = Auth::user()->username;
        $data->person_perfo_check = trim($request['person_perfo_check']);
        $data->date = trim($request['date']);
        $data->time = trim($request['time']);
        $data->initials = trim($request['initials']);
        $data->product_name = trim($request['product_name']);
        $data->total_weight = trim($request['total_weight']);
        $data->cause_of_deviation = trim($request['cause_of_deviation']);
        $data->measures_to_ensure = trim($request['measures_to_ensure']);
        $data->measures_to_prevent = trim($request['measures_to_prevent']);
        $data->ensure_that_no_product = trim($request['ensure_that_no_product']);

        if (!$data) {
            return redirect()->route('qc.haccp_4.index')->withErrors('Item not found.');
        }

        if ($data->save()) {
            return redirect()->route('qc.haccp_4.index')->with('success', 'Data updated successfully');
        } else {
            return redirect()->back()->withErrors('Failed to save the data. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = HACCPFourModel::find($id);

        if (!$data) {
            return redirect()->route('qc.haccp_4.index')->withErrors('Item not found.');
        }

        // Delete the main record
        if ($data->delete()) {
            return redirect()->route('qc.haccp_4.index')->with('success', 'Data deleted successfully.');
        } else {
            return redirect()->back()->withErrors('Failed to delete the item. Please try again.');
        }
    }
}
