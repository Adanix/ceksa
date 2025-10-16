<?php

namespace App\Http\Controllers\Responden;

use App\Http\Controllers\Controller;
use App\Models\{Gejala, Penyakit, Riwayat, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RespondenController extends Controller
{
    function index()
    {
        $data = [
            'title' => 'Home',
            'diagnosa' => Riwayat::count(),
            'user' => User::count(),
            'gejala' => Gejala::count(),
            'penyakit' => Penyakit::count(),
        ];

        if (Auth::check()) {
            return view('responden.dashboard', $data);
        }
        return redirect('login')->withErrors('Silahkan Login')->withInput();
    }

    //* Bagian Tampil Profil
    function riwayatDiagnosa()
    {
        $nama = Auth::user()->id;

        $data = [
            'title' => 'Riwayat Diagnosa',
            'riwayatData' => Riwayat::where('id_user', $nama)->paginate(35),
        ];

        return view('responden.riwayat-diagnosa', $data);
    }

    //* Bagian Tampil Profil
    function profil()
    {
        $data = [
            'title' => 'Profil',
        ];

        if (Auth::check()) {
            return view('responden.profil', $data);
        }
        return redirect('login')->withErrors('Silahkan Login')->withInput();
    }


    //* Bagian Ubah Profil
    function perubahan(Request $request, User $user)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'ttl' => 'required',
            'password' => '',
        ]);

        //get post by ID
        $user = User::findOrFail(Auth::id());

        if (!empty($request->password)) {
            $adaPass = bcrypt($request->password);
        } else {
            $adaPass = $user->password;
        }

        //get post by ID

        //update post without image
        $user->update([
            'nama'     => $request->nama,
            'email'   => $request->email,
            'ttl'   => $request->ttl,
            'password'   => $adaPass,
        ]);

        return redirect('/responden/profil')->with('success', 'Profil Berhasil Diperbarui');
    }

    function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
