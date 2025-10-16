@extends('maintener.layout.main')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success mt-1 mb-0">
    <span>{{ $message }}</span>
</div>
@endif

<div class="card">
    <div class="d-flex justify-content-between align-items-center">
        <h5 class="card-header">Data Penyakit </h5>
        <button type="button" class="btn btn-info waves-effect waves-light me-4" data-bs-toggle="modal" data-bs-target="#tambahPenyakit">
            <span class="tf-icons mdi mdi-plus-box-multiple-outline me-1"></span>Tambah Penyakit
        </button>
    </div>
    <div class="table-responsive">
        <table class="table table-striped mb-3">
            <thead class="table-primary">
                <tr>
                    <th class="fw-bold">No</th>
                    <th class="fw-bold">Kode</th>
                    <th class="fw-bold">Penyakit</th>
                    <th class="fw-bold">Solusi</th>
                    <th class="fw-bold">AKSI</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($penyakit as $p)
                <tr>
                    <td class="align-top">{{ $loop->iteration }}</td>
                    <td class="align-top">{{ $p->kode_penyakit }}</td>
                    <td class="align-top">{{ $p->nama_penyakit }}</td>
                    <td class="align-top">{{ $p->solusi }}</td>
                    <td>
                        <button type="button" class="dropdown-item waves-effect mb-2" data-bs-toggle="modal" data-bs-target="#editPenyakit{{ $p->id }}">
                            <span class="mdi mdi-pencil-outline me-2" style="color:#1900ff;"></span>Edit
                        </button>
                        <button type="button" class="dropdown-item waves-effect" data-bs-toggle="modal" data-bs-target="#hapusPenyakit{{ $p->id }}">
                            <span class="mdi mdi-trash-can-outline text-danger me-2"></span>Hapus
                        </button>

                        <!-- Modal Edit -->
                        <div class="modal fade" id="editPenyakit{{ $p->id }}" data-bs-backdrop="static" tabindex="-1" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <form class="modal-content" action="{{ route('data-penyakit.update', $p->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="backDropModalTitle">Edit Penyakit</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col mb-4 mt-2">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" id="nameBackdrop" class="form-control" name="nama_penyakit" value="{{ $p->nama_penyakit }}" placeholder="Masukan Nama Penyakit" required autofocus>
                                                    <label for="nameBackdrop">Nama Penyakit</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-4 mt-2">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" id="nameBackdrop" class="form-control" name="kode_penyakit" value="{{ $p->kode_penyakit }}" placeholder="Masukan Kode Penyakit" required>
                                                    <label for="emailBackdrop">Kode Penyakit</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-4 mt-2">
                                                <div class="form-floating form-floating-outline">
                                                    <textarea class="form-control h-px-100" id="exampleFormControlTextarea1" name="solusi" placeholder="Masukan Solusi Penegahan/terjangkit Penyakit tersebut" required>{{ $p->solusi }}</textarea>
                                                    <label for="exampleFormControlTextarea1">Solusi</label>
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
                        <div class="modal fade" id="hapusPenyakit{{ $p->id }}" data-bs-backdrop="static" tabindex="-1" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <form action="{{ route('data-penyakit.destroy', $p->id) }}" method="post" class="modal-content">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="backDropModalTitle">Hapus Penyakit</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col mb-3">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <td><b>Nama Penyakit</b></td>
                                                            <td>:</td>
                                                            <td>{{ $p->nama_penyakit }}</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><b>Kode Penyakit</b></td>
                                                            <td>:</td>
                                                            <td>{{ $p->kode_penyakit }}</td>
                                                        </tr>
                                                    </tbody>
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
    </div>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
</div>
</div>
<!--/ Transactions -->

<!-- //TODO Modal Tambah Penyakit -->
<div class="modal fade" id="tambahPenyakit" data-bs-backdrop="static" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <form class="modal-content" action="{{ route('data-penyakit.store') }}" method="post">
            @csrf
            @method('POST')
            <div class="modal-header">
                <h4 class="modal-title" id="backDropModalTitle">Tambah Penyakit</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-4 mt-2">
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="nameBackdrop" class="form-control" name="nama_penyakit" placeholder="Masukan Nama Penyakit" required autofocus>
                            <label for="nameBackdrop">Nama Penyakit</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-4 mt-2">
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="nameBackdrop" class="form-control" name="kode_penyakit" placeholder="Masukan Kode Penyakit" required>
                            <label for="emailBackdrop">Kode Penyakit</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-4 mt-2">
                        <div class="form-floating form-floating-outline">
                            <textarea class="form-control h-px-100" id="exampleFormControlTextarea1" name="solusi" placeholder="Masukan Solusi Penegahan/terjangkit Penyakit tersebut" required></textarea>
                            <label for="exampleFormControlTextarea1">Solusi</label>
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
<!-- //TODO END Modal Tambah Penyakit -->
@endsection