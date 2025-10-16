@extends('maintener.layout.main')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success mt-1 mb-0">
    <span>{{ $message }}</span>
</div>
@endif

<div class="card">
    <h5 class="card-header">Hasil Riwayat Diagnosa</h5>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="table-primary">
                <tr>
                    <th><b>No</b></th>
                    <th><b>Nama</b></th>
                    <th><b>Penyakit</b></th>
                    <th><b>Nilai</b></th>
                    <th><b>Solusi</b></th>
                    <th><b>aksi</b></th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @forelse ($riwayatData as $h)
                <tr>
                    <td class="align-top">{{ $loop->iteration }}</td>
                    <td class="align-top">{{ $h->nama }}</td>
                    <td class="align-top">{{ $h->penyakit_terpilih }}</td>
                    <td class="align-top">{{ $h->bobot }}%</td>
                    <td class="align-top">{{ $h->solusi }}</td>
                    <td>
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editPenyakit{{ $h->id }}">
                            <i class="mdi mdi-trash-can-outline text-danger me-2"></i>Hapus
                        </button>

                        <!-- Modal Edit -->
                        <div class="modal fade" id="editPenyakit{{ $h->id }}" data-bs-backdrop="static" tabindex="-1" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <form class="modal-content" action="{{ route('data-diagnosa.destroy', $h->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="backDropModalTitle">Hapus Riwayat Diagnosa</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col mb-3">
                                                <table>
                                                    <tr>
                                                        <td class="fw-bold">Nama</td>
                                                        <td class="fw-bold">:</td>
                                                        <td class="fw-bold">{{ $h->nama }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-bold">Penyakit</td>
                                                        <td class="fw-bold">:</td>
                                                        <td class="fw-bold">{{ $h->penyakit_terpilih }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-bold">Bobot Diagnosa</td>
                                                        <td class="fw-bold">:</td>
                                                        <td class="fw-bold">{{ $h->bobot }}%</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-danger waves-effect waves-light">Hapus</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- //! End Modal Edit -->
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">Belum ada data.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <nav aria-label="Page navigation" class="pagination justify-content-end mt-3">
            {{ $riwayatData->onEachSide(35)->links() }}
        </nav>
    </div>
</div>
@endsection