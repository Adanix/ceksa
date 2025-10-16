<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\{Category, Gambar, Gejala, GejalaPenyakit, NilaiJawaban, Penyakit, Post, Riwayat, User};
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index()
    {
        $data = [
            'title' => 'Sistem Pakar Diagnosa Stunting',
            'artikel' => 'off',
            'posts' => Post::latest()->get(),
            'diagnosa' => Riwayat::count(),
            'user' => User::count(),
            'gejala' => Gejala::count(),
            'penyakit' => Penyakit::count(),
        ];

        return view('pages.index', $data);
    }

    function diagnosa()
    {
        $data = [
            'title' => 'Diagnosa',
            'artikel' => 'off',
            'gejala' => Gejala::all(),
            'jawaban' => NilaiJawaban::all(),
        ];

        return view('pages.diagnosa', $data);
    }

    function penyakit_gejala()
    {
        $data = [
            'title' => 'Penyakit Dan Gejala',
            'artikel' => 'off',
        ];

        return view('pages.PenyakitGejala', $data);
    }

    function stunting()
    {
        $data = [
            'title' => 'Artikel Stunting',
            'artikel' => 'on',
            'posts' => Post::latest()->get(),
        ];

        return view('pages.stunting', $data);
    }

    function artikel_post(Post $post)
    {
        $data = [
            'title' => 'Single Artikel',
            'artikel' => 'on',
            'post' => $post,
            'posts' => Post::latest()->get(),
        ];

        return view('pages.PostArtikel', $data);
    }

    function categories()
    {
        $data = [
            'title' => 'Post Categories',
            'categories' => Category::all(),
            'artikel' => 'on'
        ];

        return view('pages.categories', $data);
    }

    function category(Category $category)
    {
        $data = [
            'title' => $category->name,
            'posts' => $category->posts,
            'artikel' => 'on'
        ];

        return view('pages.stunting', $data);
    }


    public function upload()
    {
        $data = [
            'title' => 'Artikel Upload',
            'artikel' => 'on',
        ];
        $gambar = Gambar::with('posts')->get();
        return view('pages.upload', ['gambar' => $gambar], $data);
    }

    public function proses_upload(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'keterangan' => 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');

        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);

        Gambar::create([
            'file' => $nama_file,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->back();
    }

    public function diag(Request $request)
    {
        // dd($request);

        $request->validate(
            [
                'nama' => 'required',
                // 'G1' => 'required',
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
            'nama' => $request->nama,
            'penyakit_diagnosa' => serialize($hasil_akhir),
            'nilai_diagnosa' => serialize($penyakit),
            'penyakit_terpilih' => $nama_penyakit_tertinggi,
            'bobot' => $nilaiMax,
            'solusi' => $solusi->solusi,
        ]);

        $data = [
            'title' => 'Diagnosa',
            'sol' => $solusi->solusi,
            'nilaiTertinggi' => $nilaiMax,
            'namaPenyakit' => $nama_penyakit_tertinggi,
            'hasilAhir' => $hasil_akhir,
            'dataPenyakit' => $penyakit,
        ];

        return view('pages.hasilDiagnosa', $data);
    }
}
