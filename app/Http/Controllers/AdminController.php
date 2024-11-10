<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminDashboard()
    {
        return view('admin/dashboard');
    }
    public function Admin_user_list(Request $request)
    {
        // Count users by role
        $data['admin_count'] = User::where('role', 'admin')->count();
        $data['plantManager_count'] = User::where('role', 'Plant Manager')->count();
        $data['Qc_count'] = User::where('role', 'QC')->count();
        $data['supervisor_count'] = User::where('role', 'Supervisor')->count();
        $data['alluser_count'] = User::count();
    
        // Get filtered user data based on role, if any
        $data['user'] = User::UserData($request);
    
        return view('admin.user.list', $data);
    }
    
    public function Admin_user_add()
    {
        return view('admin.user.add');
    }


    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
