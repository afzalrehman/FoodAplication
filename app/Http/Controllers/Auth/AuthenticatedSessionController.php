<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

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

        // dd($request->role);

        if ($request->user()->role == 'Admin') {
            return redirect()->intended(route('Admin.Dashboard'));
        }
         elseif ($request->user()->role == 'Plant_Manager') {
            return redirect()->intended(route('plant.manager.Dashboard'));
        }
         elseif ($request->user()->role == 'QC') {
            return redirect()->intended(route('qc.Dashboard'));
        }
         elseif ($request->user()->role == 'Supervisor') {
            return redirect()->intended(route('supervisor', absolute: false));
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

        return redirect('/');
    }
}
