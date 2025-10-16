<?php

namespace App\Http\Controllers\Maintener;

use App\Http\Controllers\Controller;
use App\Models\{Riwayat};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MaintenerRiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Data Diagnosa',
            'hasil' => Riwayat::latest()->paginate(35),
        ];

        return view('maintener.data-diagnosa', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $nama = Auth::user()->id;

        // $data = [
        //     'title' => 'Riwayat Diagnosa',
        //     'riwayatData' => Riwayat::where('id_user', $nama)->paginate(35),
        //     // 'riwayatData' => Riwayat::all(),
        //     // 'jawaban' => NilaiJawaban::all(),
        // ];

        // return view('maintener.riwayat-diagnosa', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

        return redirect('maintener/data-diagnosa')->with('success', 'Riwayat Berhasil Dihapus');
    }
}
