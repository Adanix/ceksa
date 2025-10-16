<?php

namespace App\Http\Controllers\Maintener;

use App\Http\Controllers\Controller;
use App\Models\{Gejala, GejalaPenyakit, Penyakit};
use Illuminate\Http\Request;

class MaintenerRuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gej = Gejala::all();
        $penyakit = Penyakit::pluck('nama_penyakit');

        $gejalaPenyakitData = [];
        foreach ($penyakit as $nama_penyakit) {
            $gejalaPenyakitData[$nama_penyakit] = GejalaPenyakit::where('nama_penyakit', $nama_penyakit)->get();
        }

        $data = [
            'title' => 'Rule Diagnosis',
            'penyakit' => $penyakit,
            'gej' => $gej,
            'gejalaPenyakitData' => $gejalaPenyakitData,
        ];

        return view('maintener.rule', $data);
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
    public function store(Request $request)
    {
        $kodeGejala = Gejala::where('nama_gejala', $request['nama_gejala'])->first();

        $request->validate([
            'nama_gejala' => 'required',
            'nama_penyakit' => 'required',
            'bobot' => 'required|numeric',
        ]);



        GejalaPenyakit::create([
            'kode_gejala' => $kodeGejala->kode_gejala,
            'nama_gejala' => $request->nama_gejala,
            'nama_penyakit' => $request->nama_penyakit,
            'bobot' => $request->bobot,
        ]);

        return redirect('/maintener/data-rule')->withSuccess('Rule Berhasil Ditambah');

        // dd($request);
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
        $this->validate($request, [
            'nama_gejala'     => 'required',
            'nama_penyakit'     => 'required',
            'bobot'     => 'required|numeric',
        ]);

        //get post by ID
        $gejalaPenyakit = GejalaPenyakit::findOrFail($id);

        //update post without image
        $gejalaPenyakit->update([
            'nama_gejala'   => $request->nama_gejala,
            'nama_penyakit'   => $request->nama_penyakit,
            'bobot'   => $request->bobot,
        ]);

        return redirect('/maintener/data-rule')->with('success', 'Rule Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //get post by ID
        $data = GejalaPenyakit::findOrFail($id);

        //delete post
        $data->delete();

        return redirect('/maintener/data-rule')->with('success', 'Rule Berhasil Dihapus');
    }
}
