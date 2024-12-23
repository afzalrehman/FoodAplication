<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\rolesModel;
use App\Mail\registerMail;
use App\Models\User;
use Auth;
use DB;
use Hash;
use Mail;
use Str;
class SuperadminController extends Controller
{
    public function superadmin_Dashboard()
    {
        return view('superadmin.dashboard');
    }
    public function superadmin_user_list(Request $request)
    {
        // Count users by role
        $data['admin_count'] = User::where('role', '1')->count();
        $data['plantManager_count'] = User::where('role', '2')->count();
        $data['supervisor_count'] = User::where('role', '3')->count();
        $data['Qc_count'] = User::where('role', '4')->count();
        $data['alluser_count'] = User::where('role', '!=', 0)->count();

        // Get filtered user data based on role, if any
        $data['superadmin'] = User::superadmin($request);

        return view('superadmin.user.list', $data);
    }

    public function superadmin_user_add()
    {
        $data['roles'] = rolesModel::where('id', '!=', 0)->get();
        return view('superadmin.user.add', $data);
    }
    public function superadmin_user_edit($id, Request $request)
    {
        $data['editUser'] = User::find($id);
        $data['roles'] = DB::table('roles')->where('id', '!=', 0)->get();
        return view('superadmin.user.edit', $data);
    }
    public function superadmin_user_view($id, Request $request)
    {
        $data['viewUser'] = User::find($id);
        return view('superadmin.user.view', $data);
    }
    public function superadmin_user_store(Request $request)
    {
        $request->validate([
            'employeeID' => 'required|unique:users,employeeID',
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'phone' => 'required|unique:users,phone',
            'email' => 'required|email|unique:users,email',
            'role' => 'required',
            'password' => 'required|min:8',
        ]);


        $user = new User();
        $user->employeeID = trim($request->employeeID);
        $user->name = trim($request->name);
        $user->username = trim($request->username);
        $user->phone = trim($request->phone);
        $user->email = trim($request->email);
        $user->role = $request->role;
        $user->password = Hash::make(trim($request->password));
        $user->remember_token = Str::random(50);
        $user->save();
        Mail::to($user->email)->send(new registerMail($user));
        return redirect('superadmin/user/list')->with('success', 'User added successfully. Please verify your account with the link sent to your email address. If you cannot find the email, please check spam folder.');


    }

    public function superadmin_user_update($id, Request $request)
    {
        $request->validate([
            'employeeID' => 'required|unique:users,employeeID,' . $id,
            'name' => 'required|string|max:255',
            'username' => 'required|string|unique:users,username,' . $id,
            'phone' => 'required|string|unique:users,phone,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required|string',
        ]);


        $user = User::find($id);
        $user->employeeID = trim($request->employeeID);
        $user->name = trim($request->name);
        $user->username = trim($request->username);
        $user->phone = trim($request->phone);
        $user->email = trim($request->email);
        $user->role = $request->role;
        $user->status = $request->status;
        $user->save();

        return redirect('superadmin/user/list')->with('success', 'User Successfuly Updated..!');


    }
    public function superadmin_user_delete($id, Request $request)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('superadmin/user/list')->with('error', 'User Successfuly Deleted');
    }




    public function superadmin_profile_edit(Request $request)
    {
        $data['user_profile'] = User::where('id', '=', Auth::user()->id)->first();
        return view('superadmin.user.profile', $data);
    }

    public function superadmin_profile_update(Request $request)
    {
        $userproile = User::where('id', '=', Auth::user()->id)->first();
        $userproile->name = $request->name;
        $userproile->username = $request->username;

        if ($request->hasFile('profile')) {
            $image = $request->file('profile');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/img/user_profile/'), $imageName);
            $userproile->photo = $imageName;
        }
        $userproile->save();
        return redirect()->back()->with('success', 'Profile Successfuly Update');
    }


    public function superadmin_password_change(Request $request)
    {
        $userProfile = User::find(Auth::user()->id);
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed|min:8',
        ]);
        if (Hash::check($request->current_password, $userProfile->password)) {


            $userProfile->password = Hash::make($request->new_password);
            $userProfile->save();
            return redirect()->back()->with('success', 'Password successfully changed.');
        } else {
            return redirect()->back()->with('error', 'Old Password Does not match.');
        }
    }
}
