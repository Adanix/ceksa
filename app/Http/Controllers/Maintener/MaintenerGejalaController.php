<?php

namespace App\Http\Controllers\Maintener;

use App\Http\Controllers\Controller;
use App\Models\Gejala;
use Illuminate\Http\Request;

class MaintenerGejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Data Gejala',
            'gejala' => Gejala::all(),
        ];


        return view('maintener.gejala', $data);
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
            'nama_gejala' => 'required',
            'kode_gejala' => 'required',
        ]);

        Gejala::create([
            'nama_gejala' => $request->nama_gejala,
            'kode_gejala' => $request->kode_gejala,
        ]);

        return redirect('/maintener/data-gejala')->with('success', 'Gejala Berhasil Ditambah');
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
    public function update(Request $request, Gejala $gejala, $id)
    {
        //validate form
        $this->validate($request, [
            'nama_gejala'     => 'required',
            'kode_gejala'     => 'required',
        ]);

        //get post by ID
        $gejala = Gejala::findOrFail($id);

        //update post without image
        $gejala->update([
            'nama_gejala'   => $request->nama_gejala,
            'kode_gejala'   => $request->kode_gejala,
        ]);

        return redirect('/maintener/data-gejala')->with('success', 'Gejala Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //get post by ID
        $data = Gejala::findOrFail($id);

        //delete post
        $data->delete();

        return redirect('/maintener/data-gejala')->with('success', 'Gejala Berhasil Dihapus');
    }
}
