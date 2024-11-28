<?php

namespace App\Http\Controllers;

use App\Models\vendormodel;
use Illuminate\Http\Request;


class VendorController extends Controller
{
    public function vandor_list(Request $request){
        $data['vendor_list'] = vendormodel::vendor($request);
        return view('supervisor.vendor.list' , $data);
    }
    public function vandor_add(){
        return view('supervisor.vendor.add');
    }
    public function vandor_upload(){
        return view('supervisor.vendor.upload');
    }
    public function vandor_store(Request $request){

        $request->validate([
            'vendor_name' => 'required',
            'vendor_category' => 'required',
            'vendor_number' => 'required',
            'vendor_email' => 'required',
            'vendor_address' => 'required',
            'status' => 'required',
        ]);

        $vander = new vendormodel();
        $vander->vendor_name = $request->vendor_name;
        $vander->vendor_catagory = $request->vendor_category;
        $vander->vendor_number = $request->vendor_number;
        $vander->vendor_address = $request->vendor_address;
        $vander->vendor_email = $request->vendor_email;
        $vander->status = $request->status;
        $vander->save();

        return redirect('supervisor/vendor/list')->with('success' , 'Vendor Successfuly add');
    }
}
