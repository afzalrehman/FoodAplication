<?php

namespace App\Http\Controllers\qc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class haccp_01_controller extends Controller
{
    public function qc_haccp_01_add()
    {
        return view('QC.haccp.haccp_01');
    }
}
