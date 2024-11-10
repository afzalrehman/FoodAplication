<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QcController extends Controller
{
    public function Qc_Dashboard(){
        return view('QC/dashboard');
    }
}
