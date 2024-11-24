<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vendormodel extends Model
{
    protected $table = 'vendor';

    public static function vendor($request)
    {
        $return = self::select('vendor.*')->orderBy('id', 'DESC');
        
        // Check if the 'role' parameter exists in the request
        // if (!empty($request->has('role')) && $request->role != 'all') {
        //  $return =   $return->where('role', $request->role);
        // }
        if (!empty($request->get('search')) ) {
         $return =   $return->where('vendor.vendor_name', 'like', '%' . $request->get('search') .'%')
         ->orWhere('vendor.vendor_catagory', 'like', '%' . $request->get('search') .'%')
         ->orWhere('vendor.vendor_number', 'like', '%' . $request->get('search') .'%')
         ->orWhere('vendor.vendor_email', 'like', '%' . $request->get('search') .'%')
         ->orWhere('vendor.status', 'like', '%' . $request->get('search') .'%');
        }
        
        return $return->paginate(10);
    }
}
