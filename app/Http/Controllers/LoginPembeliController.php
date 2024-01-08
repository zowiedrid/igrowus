<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginPembeliController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.loginpembeli');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }

        return back()->with('error', 'Email atau password salah');
    }

    public function loginpembeli()
    {
        return view('\loginpembeli');
    }

}
