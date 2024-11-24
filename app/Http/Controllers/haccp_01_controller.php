<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class haccp_01_controller extends Controller
{
    public function qc_haccp_01_add()
    {
        return view('QC.haccp.haccp_01');
    }
}
