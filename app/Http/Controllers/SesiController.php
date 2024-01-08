<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }


    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',

        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'admin') {
                return redirect('/admin');
            } elseif (Auth::user()->role == 'pembeli') {
                return redirect('/pembeli/home');
            } elseif (Auth::user()->role == 'penjual') {
                return redirect('/penjual/home');
            }
        } else {
            return redirect('')->withErrors('Email atau password tidak sesuai')->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('');
    }

    function register()
    {
        return view('pembeli/registerpembeli');
    }

    function create(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        Session::flash('password', $request->password);
        Session::flash('role', $request->role);
        Session::flash('no_hp', $request->no_hp);
        Session::flash('alamat', $request->alamat);
        Session::flash('jenis_kelamin', $request->jenis_kelamin);
        $request->validate([
            'name' => 'required',
            'email' => 'required | email ',
            'password' => 'required | min:6',
            'role' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',

        ], [
            'name.required' => 'name wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email tidak valid',
            // 'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 6 karakter',
            'role.required' => 'Role wajib diisi',
            'no_hp.required' => 'No HP wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi',

        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
        ];
        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'admin') {
                return redirect('/admin');
            } elseif (Auth::user()->role == 'pembeli') {
                return redirect('/dashboardpembeli');
            } elseif (Auth::user()->role == 'penjual') {
                return redirect('/dashboardpenjual');
            } else {
                return redirect('')->withErrors('Email atau password tidak sesuai')->withInput();
            }

            // $user = new \App\Models\User;
            // $user->nama = $request->nama;
            // $user->email = $request->email;
            // $user->password = bcrypt($request->password);
            // $user->alamat = $request->alamat;
            // $user->no_hp = $request->no_hp;
            // $user->role = $request->role;
            // $user->save();

            // return redirect('')->with('success', 'Data berhasil ditambahkan');
        }
    }
}
