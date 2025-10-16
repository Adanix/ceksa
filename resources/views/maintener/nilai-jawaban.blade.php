@extends('maintener.layout.main')
@section('content')
<div class="col-lg-8">
    <div class="card">
        <h5 class="card-header">Nilai Jawaban Pertannyan</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-striped mb-3">
                <thead>
                    <tr>
                        <th class="fw-bold">No</th>
                        <th class="fw-bold">Jawaban</th>
                        <th class="fw-bold">Nilai</th>
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
<!--/ Transactions -->
@endsection