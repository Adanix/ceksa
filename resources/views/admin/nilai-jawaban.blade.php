@extends('admin.layout.main')
@section('content')

<div class="col-lg-6">
    <div class="card">
        <h5 class="card-header">Nilai Jawaban Pertannyan</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-striped mb-2">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jawaban</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($jawaban as $j)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $j->jawaban }}</td>
                        <td>{{ $j->nilai }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection