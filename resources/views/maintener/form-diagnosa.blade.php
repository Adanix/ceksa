@extends('maintener.layout.main')
@section('content')

<div class="card">
   <h5 class="card-header">Form Diagnosa</h5>
   @if ($errors->any())
   <div class="alert alert-danger mb-1">
      <span>Harap isi kembali dan pastikan semua pertanyaan terjawab agar dapat didiagnosa.</span>
   </div>
   @endif
   <div class="card-body">
      <form id="formValidationExamples" action="{{ route('maintener-diagnosa.store') }}" method="post" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
         @csrf
         @method('POST')

         @foreach($gejala as $g)
         <!-- Menampilkan Gejala -->
         <div class="col-12">
            <hr class="mt-0">
            <h6 class="mt-0">{{ $loop->iteration . ". " . $g->nama_gejala }}</h6>
         </div>

         <!-- Menampilkan Jawaban -->
         <div class="radio-tile-group-diagnosa" id="gejala{{ $loop->iteration }}">
            @foreach($jawaban as $j)
            <div class="input-container-f">
               <input type="radio" value="{{ $j->nilai }}" name="G{{ $loop->parent->iteration }}" id="jawaban{{ $loop->parent->iteration }}_{{ $loop->iteration }}" class="jawaban" required>
               <div class="radio-tile-p">
                  <label for="jawaban{{ $loop->parent->iteration }}_{{ $loop->iteration }}">{{ $j->jawaban }}</label>
               </div>
            </div>
            @endforeach
         </div>
         @endforeach
         <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light mt-4">Diagnosa</button>
         </div>
      </form>
   </div>
</div>

<!-- Modal Jawaban Belum Terisi -->
<div class="modal fade" id="jawabanModal" tabindex="-1" aria-labelledby="jawabanModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="jawabanModalLabel">Peringatan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body" id="jawabanModalBody">
            <!-- Pesan kesalahan akan ditampilkan di sini -->
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
         </div>
      </div>
   </div>
</div>

<script>
   // Menambahkan validasi menggunakan Bootstrap 4 (Laravel default)
   document.getElementById('formValidationExamples').addEventListener('submit', function(event) {
      var jawabanInputs = document.querySelectorAll('.jawaban:checked');

      // Validasi input jawaban
      if (jawabanInputs.length < <?php echo count($gejala) ?>) {
         event.preventDefault();
         event.stopPropagation();

         // Temukan dan soroti elemen yang belum diisi
         var gejalaContainers = document.querySelectorAll('.radio-tile-group-diagnosa');
         for (var i = 0; i < gejalaContainers.length; i++) {
            var jawabanCount = gejalaContainers[i].querySelectorAll('.jawaban:checked').length;
            if (jawabanCount === 0) {
               // Soroti atau fokuskan elemen yang belum diisi
               gejalaContainers[i].classList.add('bg-warning');
               // Jika ingin menggunakan fokus, aktifkan baris berikut
               gejalaContainers[i].scrollIntoView({
                  behavior: 'smooth',
                  block: 'center'
               });
            }
         }

         // Menampilkan pesan modal
         showValidationErrorModal('Pastikan harap isi semua jawaban sebelum mengirim formulir.');
      } else {
         // Form valid, lanjutkan dengan pengiriman
         this.classList.add('was-validated');
      }
   });

   // Fungsi untuk menampilkan modal dengan pesan kesalahan
   function showValidationErrorModal(message) {
      var modalBody = document.getElementById('jawabanModalBody');
      modalBody.innerHTML = '<p>' + message + '</p>';

      // Menampilkan modal dengan menggunakan Bootstrap 4
      $('#jawabanModal').modal('show');
   }
</script>

@endsection