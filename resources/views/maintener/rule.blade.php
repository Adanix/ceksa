@extends('maintener.layout.main')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success mt-1 mb-0">
    <span>{{ $message }}</span>
</div>
@endif

<div class="">
    <button type="button" class="btn btn-info waves-effect waves-light btn-auto" data-bs-toggle="modal" data-bs-target="#backDropModalUlti">
        <span class="tf-icons mdi mdi-plus-box-multiple-outline me-1"></span>Tambah Data
    </button>

    <div class="modal fade" id="backDropModalUlti" data-bs-backdrop="static" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <form class="modal-content" action="{{ route('data-rule.store') }}" method="post">
                @csrf
                @method('POST')
                <div class="modal-header">
                    <h4 class="modal-title" id="backDropModalTitle">Tambah Rule</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-4 mt-2">
                            <div class="form-floating form-floating-outline">
                                <select name="nama_gejala" id="defaultSelect" class="form-select" required>
                                    <option value="">Pilih Gejala</option>
                                    @foreach ($gej as $ge)
                                    <option value="{{ $ge->nama_gejala }}">{{ $ge->nama_gejala }}</option>
                                    @endforeach
                                </select>
                                <label for="nameBackdrop">Nama Gejala</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-2">
                            <div class="form-floating form-floating-outline">
                                <select name="nama_penyakit" id="defaultSelect" class="form-select" required>
                                    <option value="">Nama Penyakit</option>
                                    @foreach ($penyakit as $pe)
                                    <option value="{{ $pe }}">{{ $pe }}</option>
                                    @endforeach
                                </select>
                                <label for="emailBackdrop">Nama Penyalit</label>
                            </div>
                        </div>
                        <div class="col mb-2">
                            <div class="form-floating form-floating-outline">
                                <input type="number" id="dobBackdrop" name="bobot" class="form-control" min="0" max="1" step="0.1" placeholder="Di isi antara 0 - 1, Misal 0,4" required>
                                <label for="dobBackdrop">Bobot Pakar</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@foreach ($gejalaPenyakitData as $nama_penyakit => $gejala)
<div class="card">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <h5 class="card-header">{{ $nama_penyakit }}</h5>
    </div>
    <div class="table-responsive">
        <table class="table mb-2">
            <thead class="table-primary">
                <tr>
                    <th>Gejala</th>
                    <th>Penyakit</th>
                    <th>Bobot</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @forelse ($gejala as $gejalaItem)
                <tr>
                    <td>{{ $gejalaItem->nama_gejala }}</td>
                    <td>{{ $gejalaItem->nama_penyakit }}</td>
                    <td>{{ $gejalaItem->bobot }}</td>
                    <td>
                        <button type="button" class="dropdown-item waves-effect mb-2" data-bs-toggle="modal" data-bs-target="#backDropModal{{ $gejalaItem->id }}">
                            <i class="mdi mdi-pencil-outline me-1" style="color:#1900ff;"></i>Edit
                        </button>
                        <button type="button" class="dropdown-item waves-effect" data-bs-toggle="modal" data-bs-target="#modalHapus{{ $gejalaItem->id }}">
                            <i class="mdi mdi-trash-can-outline text-danger me-1"></i>Hapus
                        </button>

                        <!-- Modal Edit -->
                        <div class="modal fade" id="backDropModal{{ $gejalaItem->id }}" data-bs-backdrop="static" tabindex="-1" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <form class="modal-content" action="{{ route('data-rule.update', $gejalaItem->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="backDropModalTitle">Edit</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col mb-4 mt-2">
                                                <div class="form-floating form-floating-outline">
                                                    <select name="nama_gejala" id="defaultSelect" class="form-select" required>
                                                        <option value="{{ $gejalaItem->nama_gejala }}">{{ $gejalaItem->nama_gejala }}
                                                        </option>
                                                        @foreach ($gej as $ge)
                                                        <option value="{{ $ge->nama_gejala }}">{{ $ge->nama_gejala }}</option>
                                                        @endforeach
                                                    </select>
                                                    <label for="nameBackdrop">Nama Gejala</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col mb-2">
                                                <div class="form-floating form-floating-outline">
                                                    <select name="nama_penyakit" id="defaultSelect" class="form-select">
                                                        <option value="{{ $gejalaItem->nama_penyakit }}">
                                                            {{ $gejalaItem->nama_penyakit }}
                                                        </option>
                                                        @foreach ($penyakit as $pe)
                                                        <option value="{{ $pe }}">{{ $pe }}</option>
                                                        @endforeach
                                                    </select>
                                                    <label for="nameBackdrop">Nama Penyakit</label>
                                                </div>
                                            </div>
                                            <div class="col mb-2">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="number" id="dobBackdrop" name="bobot" value="{{ $gejalaItem->bobot }}" class="form-control" min="0" max="1" step="0.1">
                                                    <label for="dobBackdrop">Bobot Pakar</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan
                                            Perubahan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- //! End Modal Edit -->

                        <!-- Modal Hapus -->
                        <div class="modal fade" id="modalHapus{{ $gejalaItem->id }}" data-bs-backdrop="static" tabindex="-1" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <form action="{{ route('data-rule.destroy', $gejalaItem->id) }}" method="post" class="modal-content">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="backDropModalTitle">Hapus</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col mb-3">
                                                <table>
                                                    <tr>
                                                        <th><b>Gejala </b></th>
                                                        <td>:</td>
                                                        <td>{{ $gejalaItem->nama_gejala }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th><b>Penyakit </b></th>
                                                        <td>:</td>
                                                        <td>{{ $gejalaItem->nama_penyakit }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th><b>Bobot Pakar </b></th>
                                                        <td>:</td>
                                                        <td>{{ $gejalaItem->bobot }}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- //!Modal Hapus -->
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">Belum ada data.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endforeach
@endSection