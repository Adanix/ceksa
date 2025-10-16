<?php

namespace App\Http\Controllers\Maintener;

use App\Http\Controllers\Controller;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class MaintenerPenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Data Penyakit',
            'penyakit' => Penyakit::all(),
        ];

        return view('maintener.penyakit', $data);
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
        $request->validate([
            'nama_penyakit' => 'required',
            'kode_penyakit' => 'required',
            'solusi' => 'required',
        ]);

        Penyakit::create([
            'nama_penyakit' => $request->nama_penyakit,
            'kode_penyakit' => $request->kode_penyakit,
            'solusi' => $request->solusi,
        ]);

        return redirect('/maintener/data-penyakit')->with('success', 'Penyakit Berhasil Ditambah');
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
    public function update(Request $request, Penyakit $penyakit, $id)
    {
        //validate form
        $this->validate($request, [
            'nama_penyakit'     => 'required',
            'kode_penyakit'     => 'required',
            'solusi'     => 'required',
        ]);

        //get post by ID
        $penyakit = Penyakit::findOrFail($id);

        //update post without image
        $penyakit->update([
            'nama_penyakit'   => $request->nama_penyakit,
            'kode_penyakit'   => $request->kode_penyakit,
            'solusi'   => $request->solusi,
        ]);
        return redirect('/maintener/data-penyakit')->with('success', 'Penyakit Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //get post by ID
        $data = Penyakit::findOrFail($id);

        //delete post
        $data->delete();

        return redirect('/maintener/data-penyakit')->with('success', 'Penyakit Berhasil Dihapus');
    }
}
