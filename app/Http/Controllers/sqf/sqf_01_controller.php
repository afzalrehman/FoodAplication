<?php

namespace App\Http\Controllers\sqf;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sqf_01_controller extends Controller
{
    public function qc_sqf_01_add()
    {
        return view('QC.sqf.sqf_01');
    }
}
