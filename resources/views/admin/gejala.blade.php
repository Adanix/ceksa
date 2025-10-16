@extends('admin.layout.main')
@section('content')

<div class="card">
    <h5 class="card-header">Data Gejala</h5>
    <div class="table-responsive text-nowrap mb-2">
        <table class="table table-bordered">
            <thead class="table">
                <tr>
                    <th class="fw-bold">No</th>
                    <th class="fw-bold">Kode Gejala</th>
                    <th class="fw-bold">Nama Gejala</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($gejala as $g)
                <tr>
                    <td><span class="fw-medium">{{ $loop->iteration }}</span></td>
                    <td>{{ $g->kode_gejala }}</td>
                    <td>{{ $g->nama_gejala }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection