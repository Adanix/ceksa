@extends('admin.layout.main')
@section('content')

<div class="card">
    <h5 class="card-header">Data Penyakit</h5>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="table-primary">
                <tr>
                    <th><b>No</b></th>
                    <th><b>Kode</b></th>
                    <th><b>Penyakit</b></th>
                    <th><b>Solusi</b></th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($penyakit as $p)
                <tr>
                    <td class="align-top">{{ $loop->iteration }}</td>
                    <td class="align-top">{{ $p->kode_penyakit }}</td>
                    <td class="align-top">{{ $p->nama_penyakit }}</td>
                    <td class="align-top">{{ $p->solusi }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection