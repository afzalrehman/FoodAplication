<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Mail\forgotPasswordMail;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Mail;
use Str;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }


    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();


        if ($request->user()->role == 0) {
            return redirect()->intended(route('superadmin'));
        }
        elseif ($request->user()->role == 1) {
            return redirect()->intended(route('Admin.Dashboard'));
        }
        
         elseif ($request->user()->role == 2) {
            return redirect()->intended(route('plantmanager.dashboard'));
        }
         elseif ($request->user()->role == 4) {
            return redirect()->intended(route('qc.Dashboard'));
        }
         elseif ($request->user()->role == 3) {
            return redirect()->intended(route('supervisor'));
        }else{
            return redirect()->intended(route('login', absolute: false));
        }
    }


    
    public function verify($token)
    {
        $user = User::where('remember_token', '=', $token)->first();
        if (!empty($user)) {
            $user->email_verified_at = date('Y-m-d H:i:s');
            $user->remember_token = Str::random(50);
            $user->status = 'active';
            $user->save();
            return redirect('/login')->with('success', 'Your Account  successfully verified ');
        } else {
            abort(404);
        }
    }

    public function forgot_password()
    {
        return view('auth.forgot-password');
    }

    public function forgot_password_post(Request $request)
    {
        $request->validate([
            'email' => 'required',
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if (!empty($user)) {

            $user->remember_token = Str::random(50);
            $user->save();

            Mail::to($user->email)->send(new forgotPasswordMail($user));
            // Redirect with success message

            return redirect()->back()->with('success', 'please check your email and reset your password');
        } else {
            return redirect()->back()->with('error', 'Email Not Found in the System');
        }
    }

    public function reset_get($token)
    {
        $data['user'] = User::where('remember_token', '=', $token)->first();
        if (!empty($data)) {
            return view('auth.reset-password', $data);
        } else {
            return redirect()->back()->with('success', 'Email Not Found in the System');
        }
    }
    public function reset_store($token, Request $request)
    {
        $user = User::where('remember_token', '=', $token)->first();
        $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);
        if (!empty($user)) {

            $user->password = $request->password;
            $user->remember_token = Str::random(50);
            $user->save();
            return redirect('login')->with('success', 'Password Reset Successfuly...!');
        } else {
            return redirect()->back()->with('success', 'Email Not Found in the System');
        }
    }

    
    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
