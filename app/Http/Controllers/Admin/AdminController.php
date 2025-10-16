<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{User, Gejala, Penyakit, NilaiJawaban, Riwayat};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
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
            return view('admin.index', $data);
        }
        return redirect('login')->withErrors('Silahkan Login')->withInput();
    }

    function profil()
    {
        $data = [
            'title' => 'Profil',
            // 'opo' => 'on',
        ];

        if (Auth::check()) {
            return view('admin.profil', $data);
        }
        return redirect('login')->withErrors('Silahkan Login')->withInput();
    }

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

        return redirect('/admin/profil')->with('success', 'Profil Berhasil Diubah');
    }

    function gejala()
    {
        $data = [
            'title' => 'Data Gejala',
            'gejala' => Gejala::all(),
        ];


        return view('admin.gejala', $data);
    }

    function penyakit()
    {
        $data = [
            'title' => 'Data Penyakit',
            'penyakit' => Penyakit::all(),
        ];

        return view('admin.penyakit', $data);
    }

    function jawaban_ori()
    {
        $data = [
            'title' => 'Jawaban Kunci',
            'jawaban' => NilaiJawaban::all(),
        ];

        return view('admin.nilai-jawaban', $data);
    }

    function logout(Request $request)
    {
        // Auth::logout();

        // return redirect('');

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login'); //->with('You have logged out successfully!');
    }
}
