<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    public function Supervisor_Dashboard(){
        return view('supervisor/dashboard');
    }
}
