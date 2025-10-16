@extends('maintener.layout.main')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success mt-1 mb-0">
    <span>{{ $message }}</span>
</div>
@endif


<div class="card">
    <div class="d-flex justify-content-between align-items-center">
        <h5 class="card-header">Data Gejala</h5>
        <button type="button" class="btn btn-info waves-effect waves-light me-2" data-bs-toggle="modal" data-bs-target="#backDropModalGejala">
            <span class="tf-icons mdi mdi-plus-box-multiple-outline me-1"></span>Tambah Gejala
        </button>
    </div>
    <div class="table-responsive mb-2">
        <table class="table table-bordered">
            <thead class="table">
                <tr>
                    <th>No</th>
                    <th>Kode Gejala</th>
                    <th>Nama Gejala</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($gejala as $g)
                <tr>
                    <td><span class="fw-medium">{{ $loop->iteration }}</span></td>
                    <td>{{ $g->kode_gejala }}</td>
                    <td>{{ $g->nama_gejala }}</td>
                    <td>
                        <button type="button" class="dropdown-item waves-effect mb-2" data-bs-toggle="modal" data-bs-target="#editGejala{{ $g->id }}">
                            <span class="mdi mdi-pencil-outline me-2" style="color:#001aff;"></span>Edit
                        </button>
                        <button type="button" class="dropdown-item waves-effect" data-bs-toggle="modal" data-bs-target="#hapusGejala{{ $g->id }}">
                            <span class="mdi mdi-trash-can-outline text-danger me-2"></span>Hapus
                        </button>

                        <!-- Modal Edit -->
                        <div class="modal fade" id="editGejala{{ $g->id }}" data-bs-backdrop="static" tabindex="-1" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <form class="modal-content" action="{{ route('data-gejala.update', $g->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="backDropModalTitle">Edit Gejala</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col mb-4 mt-2">
                                                <div class="form-floating form-floating-outline">
                                                    <textarea class="form-control h-px-100" id="nameBackdrop" name="nama_gejala" placeholder="Masukan Nama Gejala" required>{{ $g->nama_gejala }}</textarea>
                                                    <label for="nameBackdrop">Nama Gejala</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-4 mt-2">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" id="nameBackdrop" name="kode_gejala" value="{{ $g->kode_gejala }}" class="form-control" required>
                                                    <label for="dobBackdrop">Kode Gejala</label>
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
                        <div class="modal fade" id="hapusGejala{{ $g->id }}" data-bs-backdrop="static" tabindex="-1" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <form action="{{ route('data-gejala.destroy', $g->id) }}" method="post" class="modal-content">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="backDropModalTitle">Hapus Gejala</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col mb-3">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <td><b>Nama Gejala</b></td>
                                                            <td>:</td>
                                                            <td style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                                {{ $g->nama_gejala }}
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><b>Kode Gejala</b></td>
                                                            <td>:</td>
                                                            <td>{{ $g->kode_gejala }}</td>
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

<!-- //TODO Modal Tambah Gejala -->
<div class="modal fade" id="backDropModalGejala" data-bs-backdrop="static" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <form class="modal-content" action="{{ route('data-gejala.store') }}" method="post">
            @csrf
            @method('POST')
            <div class="modal-header">
                <h4 class="modal-title" id="backDropModalTitle">Tambah Gejala</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-4 mt-2">
                        <div class="form-floating form-floating-outline">
                            <textarea class="form-control h-px-100" id="nameBackdrop" name="nama_gejala" placeholder="Masukan Nama Gejala" required></textarea>
                            <label for="nameBackdrop">Nama Gejala</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-4 mt-2">
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="nameBackdrop" class="form-control" name="kode_gejala" placeholder="Masukan Kode Gejala" required>
                            <label for="emailBackdrop">Kode Gejala</label>
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
<!-- //TODO END Modal Tambah Gejala -->
@endsection