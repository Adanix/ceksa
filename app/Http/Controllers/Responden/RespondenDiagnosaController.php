<?php

namespace App\Http\Controllers\Responden;

use App\Http\Controllers\Controller;
use App\Models\{Gejala, GejalaPenyakit, NilaiJawaban, Penyakit, Riwayat};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RespondenDiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Diagnosa Stunting',
            'gejala' => Gejala::all(),
            'jawaban' => NilaiJawaban::all(),
        ];

        return view('responden.form-diagnosa', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //! Revisi
    {
        $request->validate(
            [
                'G1' => 'required',
                // 'G2' => 'required',
                // 'G3' => 'required',
                // 'G4' => 'required',
                // 'G5' => 'required',
                // 'G6' => 'required',
                // 'G7' => 'required',
                // 'G8' => 'required',
                // 'G9' => 'required',
                // 'G10' => 'required',
                // 'G11' => 'required',
                // 'G12' => 'required',
                // 'G13' => 'required',
                // 'G14' => 'required',
                // 'G15' => 'required',
                // 'G16' => 'required',
                // 'G17' => 'required',
                // 'G18' => 'required',
                // 'G19' => 'required',
                // 'G20' => 'required',
            ]
        );

        $penyakit = Penyakit::pluck('nama_penyakit');
        $hasil_akhir = [];
        $dataPenyakit = []; // Menyimpan gejala untuk setiap penyakit

        foreach ($penyakit as $nama_penyakit) {
            $gejalaPenyakitData = GejalaPenyakit::where('nama_penyakit', $nama_penyakit)->get();

            $kg = [];
            foreach ($gejalaPenyakitData as $gejalaItem) {
                $kg[] = $gejalaItem->bobot * $request[$gejalaItem->kode_gejala];
                // echo end($kg) . "<br>";
            }

            $output = [];
            foreach ($kg as $key => $value) {
                if ($key == 0) {
                    $output[$key] = $value;
                    // echo $output[$key] . " Rumus 2<br>";
                } else {
                    $output[$key] = $output[$key - 1] + $value * (1 - $output[$key - 1]);
                    // echo $output[$key] . " Rumus 2<br>";
                }
            }

            $hasil_akhir[$nama_penyakit] = end($output);

            // Simpan gejala untuk setiap penyakit
            $dataPenyakit[$nama_penyakit] = $gejalaPenyakitData;
        }

        $nama_penyakit_tertinggi = array_search(max($hasil_akhir), $hasil_akhir);
        $nilaiMax = number_format(max($hasil_akhir) * 100, 2);
        $solusi = Penyakit::where('nama_penyakit', $nama_penyakit_tertinggi)->first();

        Riwayat::create([
            'id_user' => Auth::user()->id,
            'nama' => Auth::user()->nama,
            'penyakit_diagnosa' => serialize($hasil_akhir),
            'nilai_diagnosa' => serialize($penyakit),
            'penyakit_terpilih' => $nama_penyakit_tertinggi,
            'bobot' => $nilaiMax,
            'solusi' => $solusi->solusi,
        ]);

        $data = [
            'title' => 'Riwayat Diagnosa',
            'sol' => $solusi->solusi,
            'nilaiTertinggi' => $nilaiMax,
            'namaPenyakit' => $nama_penyakit_tertinggi,
            'hasilAhir' => $hasil_akhir,
            'dataPenyakit' => $penyakit,
        ];

        return view('responden.hasilDiagnosa', $data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //get post by ID
        $data = Riwayat::findOrFail($id);

        //delete post
        $data->delete();

        return redirect('responden/riwayat')->with('success', 'Riwayat Berhasil Dihapus');
    }
}
