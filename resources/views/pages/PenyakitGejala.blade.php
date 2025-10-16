@extends('pages.layout.main')
@section('content')

<!-- Penyakit & Gejala Start -->
<div class="container-fluid hero-header pt-5">
   <div class="container mt-5 pt-5">
      <div class="row g-4 align-items-center">
         <div class="col-lg-6 hero-text mb-0">
            <h1 class="Judul-text mb-4 animated slideInUp">Memahami & Mengatasi <span style="color: #32ceff;">Penyakit
                  Gizi</span>
               Pada Anak</h1>
            <p class="animated slideInUp" style="text-align: justify; text-indent: 0.3in;">Penyakit gizi pada anak
               merujuk pada kondisi kesehatan yang disebabkan
               oleh kekurangan atau kelebihan zat gizi yang diperlukan oleh tubuh anak untuk tumbuh dan berkembang
               dengan baik. Kondisi ini dapat memiliki dampak yang serius pada kesehatan dan perkembangan anak.
               Pencegahan dan pengelolaan penyakit gizi pada anak melibatkan pendekatan yang holistik, termasuk
               asupan makanan yang seimbang, pemantauan pertumbuhan dan perkembangan anak, penyuluhan gizi kepada
               orang tua, serta penanganan medis jika diperlukan. </p>
         </div>
         <div class="col-lg-6 ps-4 animated fadeIn">
            <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;" src="landing/img/hero2.png" alt="">
         </div>
      </div>
   </div>
</div>
<!-- Penyakit & Gejala End -->

<!-- Gejala & Pencegahan Start -->
<div class="container-fluid bg-white py-5">
   <div class="container my-5 mb-3 border-0">
      <div class="col-12">
         <div class="text-center mx-auto wow fadeInUp mb-5 pb-5" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="Sub-judul">APA SAJA <span style="color:#32ceff;">PENYAKIT GIZI</span> PADA ANAK,
               INGIN TAU?
            </h1>
         </div>
      </div>
      <div class="col-12 btn-text my-5">
         <ul class="nav nav-tabs nav-tabs-custom border-0" role="tablist">
            <li class="nav-item1 mb-4" role="presentation">
               <button type="button" class="nav-link waves-effect active border-0 nav-link-custom1" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tab-stunting" aria-controls="navs-tab-stunting" aria-selected="true">Stunting</button>
            </li>
            <li class="nav-item1 mb-4" role="presentation">
               <button type="button" class="nav-link waves-effect border-0 nav-link-custom1" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tab-gaky" aria-controls="navs-tab-gaky" aria-selected="false">GAKY</button>
            </li>
            <li class="nav-item1 mb-4" role="presentation">
               <button type="button" class="nav-link waves-effect border-0 nav-link-custom1" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tab-gizi" aria-controls="navs-tab-gizi" aria-selected="false">Gizi Lebih</button>
            </li>
            <li class="nav-item1 mb-4" role="presentation">
               <button type="button" class="nav-link waves-effect border-0 nav-link-custom1" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tab-anemia" aria-controls="navs-tab-anemia" aria-selected="false">Anemia</button>
            </li>
         </ul>
      </div>

      <div class="col-12">
         <div class="tab-content p-0">
            <!-- Stunting Start -->
            <div class="tab-pane fade active show" id="navs-tab-stunting" role="tabpanel">
               <div class="row">
                  <div class="col-12">
                     <div class="text-center mx-auto wow fadeInUp mb-4 my-3" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h1 class="text-judul2">PENYAKIT <span class="text-judul1">STUNTING</span></h1>
                     </div>
                     <div class="bg-text wow fadeInUp" data-wow-delay="0.1s">
                        <p style="text-align: justify; text-indent: 0.3in;"> Stunting adalah
                           kondisi gagal pertumbuhan pada anak yang disebabkan oleh kekurangan gizi kronis,
                           terutama pada masa awal kehidupan. Stunting terjadi ketika anak tidak mendapatkan
                           nutrisi yang cukup untuk mendukung pertumbuhan dan perkembangan tubuhnya. Kondisi
                           ini
                           biasanya terjadi pada 1.000 hari pertama kehidupan, yaitu sejak kehamilan hingga dua
                           tahun pertama kehidupan anak. </p>
                     </div>
                  </div>
               </div>
               <div class="row py-5">
                  <div class="col-lg-6 mb-5 text-center">
                     <img class="img-fluid animated pulse infinite" style="animation-duration: 3s; width: 87%; display: inline-block;" src="landing/img/stunting.png" alt="">
                  </div>
                  <div class="col-lg-6">
                     <h2 class="text-judul1 text-center mx-auto mb-3">GEJALA</h2>
                     <p class="isi-text mb-4" style="text-align: justify; text-indent: 0.3in;">Gejala stunting
                        mengacu pada tanda-tanda fisik dan perkembangan anak yang mengalami kondisi gagal
                        pertumbuhan tersebut. Secara umum, gejala stunting melibatkan pertumbuhan tubuh yang
                        terhambat dan dampak negatif pada kesehatan fisik dan perkembangan anak. Beberapa gejala
                        umum stunting meliputi:
                     </p>
                     <div class="col-lg-12 mb-5">
                        <div class="row">
                           <div class="col-6 col-sm-6">
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Pertumbuhan Terhambat</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Berat Badan Kurang</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Perkembangan Otak Terhambat</i>
                           </div>
                           <div class="col-6 col-sm-6">
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Kelemahan Sistem Kekebalan Tubuh</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Keterlambatan Motorik dan Kognitif</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Masalah Kesehatan Lainnya</i>
                           </div>
                        </div>
                     </div>

                     <h2 class="text-judul1 text-center mx-auto mb-3">PENCEGAHAN</h2>
                     <p class="isi-text mb-4" style="text-align: justify; text-indent: 0.3in;">Pencegahan
                        penyakit stunting melakukan tindakan dan kebijakan pada anak di masa awal kehidupannya.
                        Berikut
                        adalah beberapa langkah yang dapat diambil untuk mencegah penyakit stunting:</p>

                     <div class="col-lg-12">
                        <div class="row">
                           <div class="col-6 col-sm-6">
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Nutrisi yang Adekuat</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Pemberian ASI</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Makanan Pendamping yang Seimbang</i>
                           </div>
                           <div class="col-6 col-sm-6">
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Perhatian pada Gizi Ibu Hamil</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Perawatan Kesehatan</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Pendidikan Gizi dan Kesehatan</i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Stunting End -->

            <!-- GAKY Start -->
            <div class="tab-pane fade" id="navs-tab-gaky" role="tabpanel">
               <div class="row">
                  <div class="col-12">
                     <div class="text-center mx-auto mb-4 my-3" style="max-width: 500px;">
                        <h1 class="text-judul2">PENYAKIT <span class="text-judul1">GAKY</span></h1>
                     </div>
                     <div class="bg-text">
                        <p style="text-align: justify; text-indent: 0.3in;">
                           Kekurangan yodium merupakan penyebab utama penyakit gondok dan hipotiroid. Yodium
                           diperlukan oleh kelenjar tiroid untuk hormon tiroid. Anak, ibu menyusui, dan ibu
                           hamil rentan terhadap kekurangan yodium, dapat menyebabkan Gangguan Akibat
                           Kekurangan Iodium (GAKI) seperti gondok, hipotiroid, risiko keguguran, kretinisme,
                           dan kematian janin.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="row py-5">
                  <div class="col-lg-6 mb-5 text-center">
                     <img class="img-fluid animated pulse infinite" style="animation-duration: 3s; width: 90%; display: inline-block;" src="landing/img/gaky.png" alt="">
                  </div>
                  <div class="col-lg-6">
                     <h2 class="text-judul1 text-center mx-auto mb-3">GEJALA</h2>
                     <p class="isi-text mb-4" style="text-align: justify; text-indent: 0.3in;">Kurangnya asupan
                        yodium mengakibatkan terjadinya penurunan produksi hormon tiroid di dalam tubuh,
                        sehingga menyebabkan penyakit hipotiroid dan penyakit gondok. Apabila seseorang
                        mengalami kekurangan hormon tiroid, gejalanya yaitu:
                     </p>
                     <div class="col-lg-12 mb-5">
                        <div class="row">
                           <div class="col-6 col-sm-6">
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Muncul benjolan di leher</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Rambut mengalami kerontokan</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;"> Berat
                                 badan meningkat tanpa sebab</i>
                           </div>
                           <div class="col-6 col-sm-6">
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;"> Tubuh
                                 terasa mudah lelah dan lemah</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Sering merasa kedinginan</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;"> Kulit
                                 kering dan pecah-pecah</i>
                           </div>
                        </div>
                     </div>

                     <h2 class="text-judul1 text-center mx-auto mb-3">PENCEGAHAN</h2>
                     <p class="isi-text mb-4" style="text-align: justify; text-indent: 0.3in;"> Pencegahan
                        kekurangan yodium melibatkan berbagai strategi. Langkah pertama adalah memastikan asupan
                        yodium yang memadai dengan mengonsumsi makanan kaya yodium. Pencegahan
                        kekurangan yodium melibatkan langkah-langkah sebagai berikut:</p>

                     <div class="col-lg-12">
                        <div class="row">
                           <div class="col-6 col-sm-6">
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Konsumsi Makanan Kaya Yodium</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Garam Beryodium</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Suplemen Yodium</i>
                           </div>
                           <div class="col-6 col-sm-6">
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Pemantauan Kesehatan</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Edukasi Kesehatan</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Intervensi Program Kesehatan</i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- GAKY End -->

            <!-- Gizi Lebih Start -->
            <div class="tab-pane fade" id="navs-tab-gizi" role="tabpanel">
               <div class="row">
                  <div class="col-12">
                     <div class="text-center mx-auto mb-4 my-3" style="max-width: 500px;">
                        <h1 class="text-judul2">PENYAKIT <span class="text-judul1">GIZI LEBIH</span></h1>
                     </div>
                     <div class="bg-text">
                        <p style="text-align: justify; text-indent: 0.3in;"> Penyakit gizi lebih adalah kondisi
                           kesehatan yang terjadi akibat konsumsi makanan berlebihan, khususnya kalori dan
                           nutrisi tertentu, melebihi kebutuhan tubuh. Ini dapat menyebabkan kelebihan berat
                           badan atau obesitas, yang berkontribusi pada risiko penyakit kardiovaskular,
                           diabetes, dan masalah kesehatan lainnya.</p>
                     </div>
                  </div>
               </div>
               <div class="row py-5">
                  <div class="col-lg-6 mb-5 text-center">
                     <img class="img-fluid animated pulse infinite" style="animation-duration: 3s; width: 86%; display: inline-block;" src="landing/img/gizi.png" alt="">
                  </div>
                  <div class="col-lg-6">
                     <h2 class="text-judul1 text-center mx-auto mb-3">GEJALA</h2>
                     <p class="isi-text mb-4" style="text-align: justify; text-indent: 0.3in;"> Gejala penyakit
                        gizi lebih atau obesitas melibatkan sejumlah tanda yang dapat diamati.
                        Beberapa gejala umum pada penyakit gizi lebih yaitu:
                     </p>
                     <div class="col-lg-12 mb-5">
                        <div class="row">
                           <div class="col-6 col-sm-6">
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Berat badan meningkat drastis</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Akumulasi lemak di area tertentu (perut)</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Kesulitan bernapas</i>
                           </div>
                           <div class="col-6 col-sm-6">
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Kelelahan yang berlebihan</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Tekanan darah tinggi</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Gangguan tidur(sleep apnea)</i>
                           </div>
                        </div>
                     </div>

                     <h2 class="text-judul1 text-center mx-auto mb-3">PENCEGAHAN</h2>
                     <p class="isi-text mb-4" style="text-align: justify; text-indent: 0.3in;">Pencegahan
                        obesitas melibatkan langkah-langkah berkelanjutan yang fokus pada pola hidup sehat.
                        Berikut adalah beberapa tindakan pencegahan obesitas:</p>

                     <div class="col-lg-12">
                        <div class="row">
                           <div class="col-6 col-sm-6">
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Pola Makan Sehat</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Aktivitas Fisik Rutin</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Kontrol Porsi Makan</i>
                           </div>
                           <div class="col-6 col-sm-6">
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Menghindari Makanan Tinggi Kalori</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Edukasi Gizi</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Pola Tidur yang Cukup</i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Gizi Lebih End -->

            <!-- Anemia Start -->
            <div class="tab-pane fade" id="navs-tab-anemia" role="tabpanel">
               <div class="row">
                  <div class="col-12">
                     <div class="text-center mx-auto mb-4 my-3" style="max-width: 500px;">
                        <h1 class="text-judul2">PENYAKIT <span class="text-judul1">ANEMIA</span></h1>
                     </div>
                     <div class="bg-text">
                        <p style="text-align: justify; text-indent: 0.3in;"> Gejala anemia pada anak sering
                           kali diabaikan
                           karena dianggap sebagai kecapekan biasa. Anemia
                           sendiri adalah kondisi kekurangan sel darah merah yang bisa terjadi pada siapa
                           saja. Baik itu
                           laki-laki, perempuan, orang dewasa, remaja, hingga anak-anak. Untungnya, kondisi
                           ini umumnya
                           bisa dikendalikan dan dicegah. Itulah mengapa anda sebaiknya mengenali apa saja
                           gejala anemia
                           pada anak. Dengan begitu, ketika tanda-tandanya muncul, Anda tahu bagaimana cara
                           menanganinya
                           dan mencegah kondisi anak bertambah parah.</p>
                     </div>
                  </div>
               </div>
               <div class="row py-5">
                  <div class="col-lg-6 mb-5 text-center">
                     <img class="img-fluid animated pulse infinite" style="animation-duration: 3s; width: 83%; display: inline-block;" src="landing/img/anemia.png" alt="">
                  </div>
                  <div class="col-lg-6">
                     <h2 class="text-judul1 text-center mx-auto mb-3">GEJALA</h2>
                     <p class="isi-text mb-4" style="text-align: justify; text-indent: 0.3in;">Anemia adalah
                        kondisi
                        kurangnya sel
                        darah merah atau hemoglobin dalam tubuh. Gejala
                        anemia dapat
                        bervariasi tergantung pada tingkat keparahan, tetapi beberapa gejala umum termasuk:
                     </p>
                     <div class="col-lg-12 mb-5">
                        <div class="row">
                           <div class="col-6 col-sm-6">
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Kelelahan dan Kelemahan</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Pucat</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;"> Sesak
                                 Napas</i>
                           </div>
                           <div class="col-6 col-sm-6">
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;"> Detak
                                 Jantung Cepat</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Pusing
                                 atau Pingsan</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;"> Kulit
                                 Kering dan Rambut
                                 Rapuh</i>
                           </div>
                        </div>
                     </div>

                     <h2 class="text-judul1 text-center mx-auto mb-3">PENCEGAHAN</h2>
                     <p class="isi-text mb-4" style="text-align: justify; text-indent: 0.3in;">Anemia dapat
                        dicegah
                        dengan
                        mengadopsi gaya hidup dan kebiasaan makan yang sehat. Berikut adalah beberapa
                        langkah pencegahan
                        anemia:</p>

                     <div class="col-lg-12">
                        <div class="row">
                           <div class="col-6 col-sm-6">
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Pemberian Makanan Bergizi</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Konsumsi Vitamin C</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;"> ASI
                                 Eksklusif</i>
                           </div>
                           <div class="col-6 col-sm-6">
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Suplemen Zat Besi</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Pemeriksaan Rutin</i>
                              <i class="bi bi-check-circle-fill mb-2 d-block" style="color: #32ceff;">
                                 Edukasi Gizi</i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Anemia End -->

         </div>
      </div>
   </div>
</div>
<!-- Gejala & Pencegahan End -->

<!-- FAQs Start -->
<div class="container-fluid py-5">
   <div class="container">
      <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
         <h1 class="Sub-judul mb-1">FAQs</h1>
         <p class="span-text mb-5">Pertanyaan yang sering diajukan</p>
      </div>
      <div class="row justify-content-center">
         <div class="col-lg-12">
            <div class="accordion" id="accordionExample">
               <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                  <h2 class="accordion-header" id="headingOne">
                     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><span><i class="bi bi-question-circle me-3"></i></span>
                        Apa penyebab utama stunting pada anak-anak?
                     </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        Penyebab utama stunting pada anak-anak adalah kekurangan nutrisi, khususnya gizi yang
                        kurang selama 1.000 hari pertama kehidupan, termasuk masa kehamilan dan dua tahun
                        pertama setelah kelahiran. Kondisi ini dapat dipengaruhi oleh asupan gizi ibu selama
                        kehamilan, pemberian ASI yang tidak optimal, serta kurangnya makanan pendamping dengan
                        nutrisi seimbang pada anak. Faktor-faktor lain, seperti infeksi dan sanitasi yang buruk,
                        juga dapat memperburuk risiko stunting.
                     </div>
                  </div>
               </div>
               <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                  <h2 class="accordion-header" id="headingTwo">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><span><i class="bi bi-question-circle me-3"></i></span>
                        Bagaimana cara mengidentifikasi anak yang mungkin mengalami stunting?
                     </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        Cara mengidentifikasi anak yang mungkin mengalami stunting melibatkan pengukuran tinggi
                        badan anak dan membandingkannya dengan standar pertumbuhan. Penggunaan grafik
                        pertumbuhan anak dan pemantauan perkembangan fisik secara berkala dapat membantu
                        mendeteksi tanda-tanda stunting.
                     </div>
                  </div>
               </div>
               <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                  <h2 class="accordion-header" id="headingThree">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><span><i class="bi bi-question-circle me-3"></i></span>
                        Apa peran gizi dalam mencegah stunting?
                     </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        Peran gizi dalam mencegah stunting sangat krusial karena nutrisi yang cukup, terutama
                        selama 1.000 hari pertama kehidupan, mendukung pertumbuhan dan perkembangan optimal
                        anak. Gizi yang baik, termasuk asupan protein, vitamin, dan mineral, sangat penting
                        untuk mencegah stunting dan memastikan pertumbuhan anak sesuai standar.
                     </div>
                  </div>
               </div>
               <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                  <h2 class="accordion-header" id="headingFour">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour"><span><i class="bi bi-question-circle me-3"></i></span>
                        Apa penyebab utama stunting pada anak-anak?
                     </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        Penyebab utama stunting pada anak-anak adalah kekurangan gizi, terutama kurangnya asupan
                        nutrisi yang memadai selama 1.000 hari pertama kehidupan, termasuk masa kehamilan dan
                        dua tahun pertama setelah kelahiran. Faktor-faktor lain, seperti infeksi dan sanitasi
                        yang buruk, juga dapat memperburuk risiko stunting.
                     </div>
                  </div>
               </div>
               <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                  <h2 class="accordion-header" id="headingFive">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"><span><i class="bi bi-question-circle me-3"></i></span>
                        Apa dampak jangka panjang dari stunting pada pertumbuhan dan perkembangan anak?
                     </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        Dampak jangka panjang dari stunting pada anak mencakup keterlambatan perkembangan
                        kognitif, penurunan produktivitas, risiko penyakit kronis, dan masalah kesehatan
                        sepanjang hidup.
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- FAQs End -->
@endsection