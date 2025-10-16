@extends('responden.layout.main')
@section('content')

<div class="card">
   <div class="container-fluid d-flex justify-content-between align-items-center">
      <h5 class="card-header">Hasil Diagnosa Awal/Dini</h5>
   </div>
   <div class="table-responsive text-nowrap">
      <table class="table">
         <thead class="table-success">
            <tr>
               @foreach ($dataPenyakit as $nama_penyakit)
               <th>{{ $nama_penyakit }}</th>
               @endforeach
            </tr>
         </thead>
         <tbody class="table-border-bottom-0">
            <tr>
               @foreach ($hasilAhir as $ahir)
               <td class="text text-dark"><b>{{ number_format($ahir * 100, 2) }}%</b></td>
               @endforeach
            </tr>
         </tbody>
      </table>
   </div>
</div>

<div class="alert alert-success text-dark" role="alert">
   <div class="alert-body">
      <h5 class="alert-title text-dark">Kesimpulan</h5>
      <p class="alert-text text-dark">
         Setelah melakukan diagnosa berdasarkan gejala yang diinput, hasilnya menunjukkan bahwa kemungkinan
         terbesar pasien mengalami <b>{{ $namaPenyakit }}</b> dengan perkiraan sebesar <b>{{ $nilaiTertinggi }}%</b>.
      </p>
      <p class="alert-text text-dark">
         {{ $sol }}
      </p>
      <p class="alert-text text-dark">
         Rekomendasi selanjutnya adalah untuk segera berkonsultasi kondisi anak dengan dokter atau tenaga kesehatan untuk mendapatkan diagnosis yang akurat dan rencana perawatan yang tepat.
      </p>
   </div>
</div>

<div class="d-flex justify-content-center align-items-center">
   <a type="button" href="#" class="btn btn-danger" onclick="window.print();">
      <span class="tf-icons mdi mdi-content-save-move me-1"></span>Cetak PDF
   </a>
</div>

@endsection