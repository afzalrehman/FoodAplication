<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantManagerController extends Controller
{
    public function Plant_Manager_Dashboard(){
        return view('plant_manager/dashboard');
    }
}
