@extends('pages.layout.main')
@section('content')

<div class="container">
   @if ($errors->any())
   <div class="alert alert-danger mb-1 mt-3">
      <span>Harap isi kembali dan pastikan semua pertanyaan terjawab agar dapat didiagnosa.</span>
   </div>
   @endif

   <div class="d-flex justify-content-between align-items-center">
      <h5 class="header mt-3">Form Diagnosa</h5>
      <button type="button" class="btn btn-primary waves-effect waves-light me-3 mt-3" data-bs-toggle="modal" data-bs-target="#fullscreenModal">
         Cara Pengisian Diagnosa
      </button>

      <!-- Modal -->
      <div class="modal fade" id="fullscreenModal" tabindex="-1" style="display: none;" aria-hidden="true">
         <div class="modal-dialog modal-fullscreen" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h4 class="modal-title" id="modalFullTitle">Cara Pengisian Diagnosa</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <h4>Catatan</h4>
                  <ol class="list-group">
                     <li class="list-group-item d-flex bi bi-check-circle-fill d-block justify-content-between align-items-start border-0">
                        <div class="ms-2 me-auto">
                           Jawab pertanyaan-pertanyaan yang diberikan dengan jujur dan seakurat mungkin. Informasi yang akurat akan membantu dalam memberikan hasil yang lebih akurat.
                        </div>
                     </li>
                     <li class="list-group-item d-flex bi bi-check-circle-fill d-block justify-content-between align-items-start border-0">
                        <div class="ms-2 me-auto">
                           Setelah menjawab pertanyaan, sistem diagnosa akan memberikan saran dan rekomendasi berdasarkan informasi yang Anda berikan. Perhatikan dengan baik hasilnya dan jika diperlukan berkonsultasi dengan profesional kesehatan sesuai dengan informasi yang diberikan.
                        </div>
                     </li>
                     <li class="list-group-item d-flex bi bi-check-circle-fill d-block justify-content-between align-items-start border-0">
                        <div class="ms-2 me-auto">
                           Meskipun alat diagnosa online dapat memberikan informasi awal, penting untuk diingat bahwa hasil ini sebaiknya hanya dijadikan sebagai petunjuk awal dan bukan diagnosis pasti. Jika Anda merasa khawatir atau mengalami gejala yang serius, segera cari bantuan dari dokter atau ahli kesehatan untuk mendapatkan evaluasi, nasihat, saran dan penanganan yang lebih tepat.
                        </div>
                     </li>
                  </ol>

                  <h4 class="mt-4">Pemilihan Jawaban Yang Sesuai</h4>
                  <ol class="list-group list-group-numbered">
                     <li class="list-group-item d-flex justify-content-between align-items-start border-0">
                        <div class="ms-2 me-auto">
                           <div class="fw-bold">Sangat Yakin</div>
                           <p>
                              Berikan jawaban dengan keyakinan <span class="text text-danger">Sangat Yakin</span> jika secara jelas menyatakan bahwa gejala tersebut sesuai yang dialami atau sesuai kondisi.
                           </p>
                        </div>
                     </li>
                     <li class="list-group-item d-flex justify-content-between align-items-start border-0">
                        <div class="ms-2 me-auto">
                           <div class="fw-bold">Yakin</div>
                           <p>
                              Berikan jawaban dengan keyakinan <span class="text text-danger">Yakin</span> jika gejala yang dialami sesuai dengan keyakinan yakin.
                           </p>
                        </div>
                     </li>
                     <li class="list-group-item d-flex justify-content-between align-items-start border-0">
                        <div class="ms-2 me-auto">
                           <div class="fw-bold">Cukup Yakin</div>
                           <p>
                              Berikan jawaban dengan keyakinan <span class="text text-danger">Cukup Yakin</span> jika meskipun tidak ada informasi tentang gejala, namun memiliki pemahaman yang memadai mengenai kondisinya sendiri.
                           </p>
                        </div>
                     </li>
                     <li class="list-group-item d-flex justify-content-between align-items-start border-0">
                        <div class="ms-2 me-auto">
                           <div class="fw-bold">Kurang Yakin</div>
                           <p>
                              Berikan jawaban dengan keyakinan <span class="text text-danger">Kurang Yakin</span> jika informasi tentang riwayat penyakit anemia ibu sangat terbatas, dan tidak dapat diandalkan sepenuhnya.
                           </p>
                        </div>
                     </li>
                     <li class="list-group-item d-flex justify-content-between align-items-start border-0">
                        <div class="ms-2 me-auto">
                           <div class="fw-bold">Tidak Tahu</div>
                           <p>
                              Berikan jawaban dengan keyakinan <span class="text text-danger">Tidak Tahu</span> jika tidak ada informasi yang dapat diambil untuk menentukan apakah ibu memiliki riwayat penyakit anemia atau tidak.
                           </p>
                        </div>
                     </li>
                     <li class="list-group-item d-flex justify-content-between align-items-start border-0">
                        <div class="ms-2 me-auto">
                           <div class="fw-bold">Tidak</div>
                           <p>
                              Berikan jawaban dengan keyakinan <span class="text text-danger">Tidak</span> jika ibu secara tegas menyatakan bahwa tidak memiliki riwayat penyakit anemia.
                           </p>
                        </div>
                     </li>
                  </ol>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal">Tutup</button>
               </div>
            </div>
         </div>
      </div>
   </div>

   <form id="formValidationExamples" action="/proses" method="post" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework needs-validation" novalidate>
      @csrf
      @method('POST')
      <!-- Input Nama -->
      <div class="col">
         <label for="nama" class="form-label text-dark">Nama</label>
         <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Anak" value="{{ old('nama') }}" required autofocus>
         <div class="invalid-feedback">Nama harus diisi.</div>
      </div>

      <div class="card">
         @foreach($gejala as $g)
         <!-- Menampilkan Gejala -->
         <div class="col-12">
            <hr class="mt-0">
            <h6 class="mt-0 ms-5">{{ $loop->iteration . ". " . $g->nama_gejala }}</h6>
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
      </div>

      <!-- Tombol Diagnosa di sebelah kanan -->
      <div class="col-12 text-center">
         <button type="submit" class="btn btn-primary waves-effect waves-light mt-4 mb-3">Diagnosa</button>
      </div>
   </form>
</div>

<!-- Modal Jawaban Belum Terisi -->
<div class="modal fade" id="jawabanModal" tabindex="-1" aria-labelledby="jawabanModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="jawabanModalLabel">Peringatan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            Harap isi semua jawaban sebelum mengirim formulir.
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
         </div>
      </div>
   </div>
</div>

<script>
   // Menambahkan validasi menggunakan Bootstrap 5
   document.getElementById('formValidationExamples').addEventListener('submit', function(event) {
      var jawabanInputs = document.querySelectorAll('.jawaban:checked');
      var namaInput = document.getElementById('nama');

      // Validasi input nama
      if (namaInput.value.trim() === '') {
         event.preventDefault();
         event.stopPropagation();

         // Soroti atau fokuskan input nama yang belum diisi
         namaInput.classList.add('is-invalid');

         // Gulir ke input nama
         namaInput.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
         });

         // Menampilkan pesan modal
         showValidationErrorModal('Nama harus diisi.');
      } else {
         namaInput.classList.remove('is-invalid');
      }

      // Validasi input jawaban
      if (jawabanInputs.length < <?php echo count($gejala); ?> || namaInput.value.trim() === '') {
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
         showValidationErrorModal('Harap isi semua jawaban sebelum mengirim formulir.');
      } else {
         // Form valid, lanjutkan dengan pengiriman
         this.classList.add('was-validated');
      }
   });

   // Membersihkan status is-invalid pada input nama saat diubah
   document.getElementById('nama').addEventListener('input', function() {
      this.classList.remove('is-invalid');
   });

   // Fungsi untuk menampilkan modal dengan pesan kesalahan
   function showValidationErrorModal(message) {
      var modalBody = document.getElementById('jawabanModalBody');
      modalBody.innerHTML = '<p>' + message + '</p>';

      // Menampilkan modal
      var jawabanModal = new bootstrap.Modal(document.getElementById('jawabanModal'));
      jawabanModal.show();
   }
</script>






@endsection