@extends('admin.layout.main')
@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="card-title m-0 me-2 text-center">ANALISIS DATA</h5>
        <p class="mt-3 text-center"><span class="fw-medium">Sistem Pakar Stunting - Solusi Inovatif dalam Mendukung Program Kesehatan Balita & Anak di Masyarakat</span></p>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3 col-6">
                <div class="d-flex align-items-center">
                    <div class="avatar">
                        <div class="avatar-initial bg-primary rounded shadow">
                            <i class="mdi mdi-virus mdi-24px"></i>
                        </div>
                    </div>
                    <div class="ms-3">
                        <div class="small mb-1">Jumlah Penyakit</div>
                        <h5 class="mb-0">{{ $penyakit }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="d-flex align-items-center">
                    <div class="avatar">
                        <div class="avatar-initial bg-success rounded shadow">
                            <i class="mdi mdi-stethoscope mdi-24px"></i>
                        </div>
                    </div>
                    <div class="ms-3">
                        <div class="small mb-1">Total Gejala</div>
                        <h5 class="mb-0">{{ $gejala }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="d-flex align-items-center">
                    <div class="avatar">
                        <div class="avatar-initial bg-warning rounded shadow">
                            <i class="mdi mdi-human-male-height mdi-24px"></i>
                        </div>
                    </div>
                    <div class="ms-3">
                        <div class="small mb-1">Total Diagnosa</div>
                        <h5 class="mb-0">{{ $diagnosa }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="d-flex align-items-center">
                    <div class="avatar">
                        <div class="avatar-initial bg-info rounded shadow">
                            <i class="mdi mdi-account-outline mdi-24px"></i>
                        </div>
                    </div>
                    <div class="ms-3">
                        <div class="small mb-1">Jumlah Pengguna</div>
                        <h5 class="mb-0">{{ $user }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection