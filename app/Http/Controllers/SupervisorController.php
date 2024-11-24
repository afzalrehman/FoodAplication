<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupervisorController extends Controller
{
    public function supervisor_dashboard(){
        return view('supervisor/dashboard');
    }



    // ---------profile
    public function supervisor_profile_edit(Request $request)
    {
        $data['user_profile'] = User::where('id', '=', Auth::user()->id)->first();
        return view('supervisor.profile', $data);
    }

    public function supervisor_profile_update(Request $request)
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


    public function supervisor_user_password_change(Request $request)
    {
        $userProfile = User::find(Auth::user()->id);

        if (Hash::check($request->current_password, $userProfile->password)) {
            $request->validate([
                'current_password' => 'required',
                'new_password' => 'required|confirmed|min:8',
            ]);

            $userProfile->password = Hash::make($request->new_password);
            $userProfile->save();
            return redirect()->back()->with('success', 'Password successfully changed.');
        } else {
            return redirect()->back()->with('error', 'Old Password Does not match.');
        }
    }
    

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
