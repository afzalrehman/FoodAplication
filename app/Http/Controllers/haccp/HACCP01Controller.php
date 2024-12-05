<?php

namespace App\Http\Controllers\haccp;

use App\Http\Controllers\Controller;
use App\Models\CCP1Model;
use App\Models\CCP2Model;
use App\Models\CCP3Model;
use App\Models\CCP4Model;
use App\Models\CCP5Model;
use App\Models\HACCPOneModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HACCP01Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['haccp01Record'] = HACCPOneModel::getAllRecord();
        return view('QC.haccp.haccp_01.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['plantManagerRecord'] = User::where('role', '=', '2')->get();
        return view('QC.haccp.haccp_01.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Store CCP1 Data
        $data1 = new CCP1Model();
        $data1->time = trim($request['1_time']);
        $data1->monitor_verifier = trim($request['1_monitor_verifier']);
        $data1->verifier_initial = trim($request['1_verifier_initial']);
        $data1->verified_date = trim($request['1_verified_date']);
        $data1->verified_time = trim($request['1_verified_time']);
        $data1->results = trim($request['1_results']);
        $data1->verification_method = trim($request['1_verification_method']);
        // Loop for 'results_fecal' fields dynamically
        $resultsFecal = [];
        foreach ($request->all() as $key => $value) {
            if (str_starts_with($key, '1_results_fecal_')) {
                $resultsFecal[] = $value;
            }
        }
        $data1->results_fecal = implode(',', $resultsFecal); // Convert array to comma-separated string
        $data1->save();
        $ccp1_id = $data1->id; // Save ID for HACCPOneModel

        // Repeat similar steps for CCP2
        $data2 = new CCP2Model();
        $data2->time_in = trim($request['2_time_in']);
        $data2->time_out = trim($request['2_time_out']);
        $data2->temp_f = trim($request['2_temp_f']);
        $data2->initial = trim($request['2_initial']);
        $data2->verifier_initial = trim($request['2_verifier_initial']);
        $data2->verified_date = trim($request['2_verified_date']);
        $data2->verified_time = trim($request['2_verified_time']);
        $data2->results = trim($request['2_results']);
        $data2->verification_method = trim($request['2_verification_method']);
        $data2->save();
        $ccp2_id = $data2->id; // Save ID for HACCPOneModel

        // Repeat similar steps for CCP3, CCP4, CCP5
        $data3 = new CCP3Model();
        $data3->time_in = trim($request['3_time_in']);
        $data3->time_out = trim($request['3_time_out']);
        $data3->temp_f = trim($request['3_temp_f']);
        $data3->initial = trim($request['3_initial']);
        $data3->verifier_initial = trim($request['3_verifier_initial']);
        $data3->verified_date = trim($request['3_verified_date']);
        $data3->verified_time = trim($request['3_verified_time']);
        $data3->results = trim($request['3_results']);
        $data3->verification_method = trim($request['3_verification_method']);
        $data3->save();
        $ccp3_id = $data3->id;

        $data4 = new CCP4Model();
        $data4->time = trim($request['4_time']);
        $data4->monitor_verifier = trim($request['4_monitor_verifier']);
        $data4->verifier_initial = trim($request['4_verifier_initial']);
        $data4->verified_date = trim($request['4_verified_date']);
        $data4->verified_time = trim($request['4_verified_time']);
        $data4->results = trim($request['4_results']);
        $data4->verification_method = trim($request['4_verification_method']);
        $resultsFecal4 = [];
        foreach ($request->all() as $key => $value) {
            if (str_starts_with($key, '4_results_fecal_')) {
                $resultsFecal4[] = $value;
            }
        }
        $data4->results_fecal = implode(',', $resultsFecal4); // Convert array to comma-separated string
        $data4->save();
        $ccp4_id = $data4->id;

        $data5 = new CCP5Model();
        $data5->time_in = trim($request['5_time_in']);
        $data5->time_out = trim($request['5_time_out']);
        $data5->temp_f = trim($request['5_temp_f']);
        $data5->initial = trim($request['5_initial']);
        $data5->verifier_initial = trim($request['5_verifier_initial']);
        $data5->verified_date = trim($request['5_verified_date']);
        $data5->verified_time = trim($request['5_verified_time']);
        $data5->results = trim($request['5_results']);
        $data5->verification_method = trim($request['5_verification_method']);
        $data5->save();
        $ccp5_id = $data5->id;

        // Store in HACCPOneModel
        $data = new HACCPOneModel();
        $data->person_perform = Auth::user()->username;
        $data->person_perfo_check = trim($request['person_perfo_check']);
        $data->date = trim($request['date']);
        $data->ccp1_id = $ccp1_id;
        $data->ccp2_id = $ccp2_id;
        $data->ccp3_id = $ccp3_id;
        $data->ccp4_id = $ccp4_id;
        $data->ccp5_id = $ccp5_id;

        if ($data->save()) {
            return redirect()->route('qc.haccp_1.index')->with('success', 'Data saved successfully');
        } else {
            return redirect()->back()->withErrors('Failed to save the data. Please try again.');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['haccp01Record'] = HACCPOneModel::find($id);

        $sqf = $data['haccp01Record']->person_perfo_check;
        $data['plantManagerRecord'] = User::where('username', '!=', $sqf)
            ->where('role', '=', '2')
            ->get();

        $ccp1 = $data['haccp01Record']->ccp1_ID;
        $data['ccp1Record'] = CCP1Model::find($ccp1);
        $ccp2 = $data['haccp01Record']->ccp2_ID;
        $data['ccp2Record'] = CCP2Model::find($ccp2);
        $ccp3 = $data['haccp01Record']->ccp3_ID;
        $data['ccp3Record'] = CCP3Model::find($ccp3);
        $ccp4 = $data['haccp01Record']->ccp4_ID;
        $data['ccp4Record'] = CCP4Model::find($ccp4);
        $ccp5 = $data['haccp01Record']->ccp5_ID;
        $data['ccp5Record'] = CCP5Model::find($ccp5);

        return view('QC.haccp.haccp_01.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['haccp01Record'] = HACCPOneModel::find($id);

        $sqf = $data['haccp01Record']->person_perfo_check;
        $data['plantManagerRecord'] = User::where('username', '!=', $sqf)
            ->where('role', '=', '2')
            ->get();

        $ccp1 = $data['haccp01Record']->ccp1_ID;
        $data['ccp1Record'] = CCP1Model::find($ccp1);
        $ccp2 = $data['haccp01Record']->ccp2_ID;
        $data['ccp2Record'] = CCP2Model::find($ccp2);
        $ccp3 = $data['haccp01Record']->ccp3_ID;
        $data['ccp3Record'] = CCP3Model::find($ccp3);
        $ccp4 = $data['haccp01Record']->ccp4_ID;
        $data['ccp4Record'] = CCP4Model::find($ccp4);
        $ccp5 = $data['haccp01Record']->ccp5_ID;
        $data['ccp5Record'] = CCP5Model::find($ccp5);

        return view('QC.haccp.haccp_01.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());

        // Update in HACCPOneModel
        $data = HACCPOneModel::find($id);
        $data->person_perform = Auth::user()->username;
        $data->person_perfo_check = trim($request['person_perfo_check']);
        $data->date = trim($request['date']);

        $data1 = $data->ccp1_ID;
        $data2 = $data->ccp2_ID;
        $data3 = $data->ccp3_ID;
        $data4 = $data->ccp4_ID;
        $data5 = $data->ccp5_ID;

        // Store CCP1 Data
        $data1 = CCP1Model::find($data1);
        $data1->time = trim($request['1_time']);
        $data1->monitor_verifier = trim($request['1_monitor_verifier']);
        $data1->verifier_initial = trim($request['1_verifier_initial']);
        $data1->verified_date = trim($request['1_verified_date']);
        $data1->verified_time = trim($request['1_verified_time']);
        $data1->results = trim($request['1_results']);
        $data1->verification_method = trim($request['1_verification_method']);
        // Loop for 'results_fecal' fields dynamically
        $resultsFecal = [];
        foreach ($request->all() as $key => $value) {
            if (str_starts_with($key, '1_results_fecal_')) {
                $resultsFecal[] = $value;
            }
        }
        $data1->results_fecal = implode(',', $resultsFecal); // Convert array to comma-separated string
        $data1->save();

        // Repeat similar steps for CCP2
        $data2 = CCP2Model::find($data2);
        $data2->time_in = trim($request['2_time_in']);
        $data2->time_out = trim($request['2_time_out']);
        $data2->temp_f = trim($request['2_temp_f']);
        $data2->initial = trim($request['2_initial']);
        $data2->verifier_initial = trim($request['2_verifier_initial']);
        $data2->verified_date = trim($request['2_verified_date']);
        $data2->verified_time = trim($request['2_verified_time']);
        $data2->results = trim($request['2_results']);
        $data2->verification_method = trim($request['2_verification_method']);
        $data2->save();

        // Repeat similar steps for CCP3, CCP4, CCP5
        $data3 = CCP3Model::find($data3);
        $data3->time_in = trim($request['3_time_in']);
        $data3->time_out = trim($request['3_time_out']);
        $data3->temp_f = trim($request['3_temp_f']);
        $data3->initial = trim($request['3_initial']);
        $data3->verifier_initial = trim($request['3_verifier_initial']);
        $data3->verified_date = trim($request['3_verified_date']);
        $data3->verified_time = trim($request['3_verified_time']);
        $data3->results = trim($request['3_results']);
        $data3->verification_method = trim($request['3_verification_method']);
        $data3->save();

        $data4 = CCP4Model::find($data4);
        $data4->time = trim($request['4_time']);
        $data4->monitor_verifier = trim($request['4_monitor_verifier']);
        $data4->verifier_initial = trim($request['4_verifier_initial']);
        $data4->verified_date = trim($request['4_verified_date']);
        $data4->verified_time = trim($request['4_verified_time']);
        $data4->results = trim($request['4_results']);
        $data4->verification_method = trim($request['4_verification_method']);
        $resultsFecal4 = [];
        foreach ($request->all() as $key => $value) {
            if (str_starts_with($key, '4_results_fecal_')) {
                $resultsFecal4[] = $value;
            }
        }
        $data4->results_fecal = implode(',', $resultsFecal4); // Convert array to comma-separated string
        $data4->save();

        $data5 = CCP5Model::find($data5);
        $data5->time_in = trim($request['5_time_in']);
        $data5->time_out = trim($request['5_time_out']);
        $data5->temp_f = trim($request['5_temp_f']);
        $data5->initial = trim($request['5_initial']);
        $data5->verifier_initial = trim($request['5_verifier_initial']);
        $data5->verified_date = trim($request['5_verified_date']);
        $data5->verified_time = trim($request['5_verified_time']);
        $data5->results = trim($request['5_results']);
        $data5->verification_method = trim($request['5_verification_method']);
        $data5->save();

        if (!$data) {
            return redirect()->route('qc.haccp_1.index')->withErrors('Item not found.');
        }

        if ($data->save()) {
            return redirect()->route('qc.haccp_1.index')->with('success', 'Data update successfully');
        } else {
            return redirect()->back()->withErrors('Failed to delete the item. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = HACCPOneModel::find($id);

        if (!$data) {
            return redirect()->route('qc.haccp_1.index')->withErrors('Item not found.');
        }

        // Delete related records manually if not using cascade
        if ($data->ccp1_ID) {
            $relatedRecord = CCP1Model::find($data->ccp1_ID);
            if ($relatedRecord) $relatedRecord->delete();
        }

        if ($data->ccp2_ID) {
            $relatedRecord = CCP2Model::find($data->ccp2_ID);
            if ($relatedRecord) $relatedRecord->delete();
        }

        if ($data->ccp3_ID) {
            $relatedRecord = CCP3Model::find($data->ccp3_ID);
            if ($relatedRecord) $relatedRecord->delete();
        }

        if ($data->ccp4_ID) {
            $relatedRecord = CCP4Model::find($data->ccp4_ID);
            if ($relatedRecord) $relatedRecord->delete();
        }

        if ($data->ccp5_ID) {
            $relatedRecord = CCP5Model::find($data->ccp5_ID);
            if ($relatedRecord) $relatedRecord->delete();
        }

        // Delete the main record
        if ($data->delete()) {
            return redirect()->route('qc.haccp_1.index')->with('success', 'Data and related records deleted successfully.');
        } else {
            return redirect()->back()->withErrors('Failed to delete the item. Please try again.');
        }
    }
}
