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
    public function Admin_user_list()
    {
        $data['user'] = User::UserData();
        return view('admin.user.list' , $data);
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
