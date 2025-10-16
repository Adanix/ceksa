<?php

namespace App\Http\Controllers\Maintener;

use App\Http\Controllers\Controller;
use App\Models\{Gejala, NilaiJawaban, Penyakit, Riwayat, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MaintenerController extends Controller
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
            return view('maintener.dashboard', $data);
        }
        return redirect('login')->withErrors('Silahkan Login')->withInput();
    }

    function jawaban()
    {
        $data = [
            'title' => 'Jawaban Kunci',
            'jawaban' => NilaiJawaban::all(),
        ];

        return view('maintener.nilai-jawaban', $data);
    }

    function riwayat()
    {
        $nama = Auth::user()->id;

        $data = [
            'title' => 'Riwayat Diagnosa',
            'riwayatData' => Riwayat::where('id_user', $nama)->paginate(35),
        ];

        return view('maintener.riwayat-diagnosa', $data);
    }

    function profil()
    {
        $data = [
            'title' => 'Profil',
        ];

        if (Auth::check()) {
            return view('maintener.profil', $data);
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

        return redirect('/maintener/profil')->with('success', 'Profil Berhasil Diubah');
    }

    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/'); //->with('You have logged out successfully!');
    }
}
