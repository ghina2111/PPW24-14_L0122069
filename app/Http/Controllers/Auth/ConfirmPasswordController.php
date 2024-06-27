<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfirmPasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        return view('auth.confirm-password');
    }

    public function confirm(Request $request)
    {
        if (!Auth::guard('web')->validate([
            'email' => Auth::user()->email,
            'password' => $request->password,
        ])) {
            return back()->withErrors(['password' => 'The password is incorrect.']);
        }

        $request->session()->put('auth.password_confirmed_at', time());

        return redirect()->intended(route('dashboard'));
    }
}
