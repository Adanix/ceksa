<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDataUserController extends Controller
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
                ->paginate(25);
        } else {
            $dataPengguna = User::where('role', 'responden')->latest()->paginate(25);
        }

        $data = [
            'title' => 'Data Pengguna',
            'users' => $dataPengguna,
            'search' => $search,
            // 'users' => User::latest()->paginate(5),
        ];

        return view('admin.user', $data);
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
        // $request->validate([
        //     'nama' => 'required|string|max:200',
        //     'email' => 'required|email|max:200|unique:users',
        //     'password' => 'required|min:8',
        // ]);

        // User::create([
        //     'nama' => $request->nama,
        //     'email' => $request->email,
        //     'password' => bcrypt($request->password),
        // ]);

        // return redirect('/admin/datauser')->withSuccess('Anda Berhasil Mendaftar');
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
    public function update(Request $request, User $user, $id)
    {
        // dd($request);
        //validate form
        $this->validate($request, [
            'nama'     => 'required',
            'email'     => 'required',
            'ttl'     => 'required',
            // 'role'     => 'required',
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
            // 'role'   => $request->role,
            'password'   => $adaPass,
        ]);

        return redirect('/admin/datauser')->with('success', 'Pengguna Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //get post by ID
        $data = User::findOrFail($id);

        //delete post
        $data->delete();

        return redirect('/admin/datauser')->with('success', 'Pengguna Berhasil Dihapus');
    }
}
