<?php

namespace App\Http\Controllers\qc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class haccp_02_controller extends Controller
{
    public function qc_haccp_02_add()
    {
        return view('QC.haccp.haccp_02');
    }
}
