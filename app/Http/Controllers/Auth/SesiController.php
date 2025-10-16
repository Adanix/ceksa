<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function login()
    {
        return view('auth.login');
    }

    function ceklogin(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'email Harus Di Isi',
                'password.required' => 'Password Harus Di Isi',
            ],
        );

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'maintener') {
                return redirect('maintener/dashboard');
            } elseif (Auth::user()->role == 'admin') {
                return redirect('admin/dashboard');
            } elseif (Auth::user()->role == 'responden') {
                return redirect('responden/dashboard');
            }
        } else {
            return redirect('login')->withErrors('Email Atau Password Anda Salah')->withInput();
        }
    }

    function register()
    {
        return view('auth.register');
    }

    function cekregistrasi(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required|string|max:30',
                'email' => 'required|email|max:200|unique:users',
                'ttl' => 'required|date',
                'password' => 'required|min:8',
            ],
            [
                'nama.max' => 'Nama tidak lebih dari 30 Huruf',
                'email.unique' => 'Email Sudah Terdaftar/Sudah Digunakan',
                'password.required' => 'Kata Sandi Minimal 8 Huruf/Angka',
            ],
        );

        // return dd($request);

        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'ttl' => $request->ttl,
            'password' => bcrypt($request->password),
        ]);
        return redirect('login')->withSuccess('Anda Berhasil Mendaftar');
    }
}
