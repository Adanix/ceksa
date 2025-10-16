<?php

namespace App\Http\Controllers\Maintener;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class MaintenerPenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');
        if (!empty($search)) {
            $dataPengguna = User::where('users.nama', 'like', '%' . $search . '%')
                ->orWhere('users.email', 'like', '%' . $search . '%')
                ->paginate(35);
        } else {
            $dataPengguna = User::latest()->paginate(35);
        }

        $data = [
            'title' => 'Data Pengguna',
            'users' => $dataPengguna,
            'search' => $search,
        ];

        return view('maintener.pengguna', $data);
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
    public function update(Request $request, $id)
    {
        //validate form
        $this->validate($request, [
            'nama'     => 'required',
            'email'     => 'required',
            'ttl'     => 'required',
            'role'     => 'required',
            'password'     => '',
        ]);

        $user = User::findOrFail($id);
        // $noPass = User::

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
            'role'   => $request->role,
            'password'   => $adaPass,
        ]);

        return redirect('/maintener/pengguna')->with('success', 'Pengguna Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //get post by ID
        $data = User::findOrFail($id);

        // //delete image
        // Storage::delete('public/image/' . $data->gambar);

        //delete post
        $data->delete();

        return redirect('/maintener/pengguna')->with('success', 'Pengguna Berhasil Dihapus');
    }
}
