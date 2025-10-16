@extends('pages.layout.main')
@section('content')
<!-- Header Start -->
<div class="container-fluid hero-header py-5">
    <div class="container py-5">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6 hero-text mb-0">
                <h1 class="Judul-text mb-4 animated slideInUp">Mendiagnosa Penyakit Stunting Anak</h1>
                <p class="animated slideInUp">Mendiagnosa stunting anak memerlukan evaluasi tinggi badan, berat badan,
                    dan asupan gizi. Deteksi dini dan tindakan pencegahan kunci untuk pertumbuhan dan perkembangan anak
                    yang optimal.</p>
                <a href="/diagnosa" class="btn btn-diagnosa d-flex align-items-center py-2 px-4 mt-2 mb-2 animated slideInUp">Diagnosa
                    Sekarang
                    <span><i class="bi bi-arrow-right-short "></i></span></a>

                <!-- Analisis Data Start -->
                <div class="analisis-data mt-5 text-center wow fadeIn" data-wow-delay="0.1s">
                    <div class="box1 mt-3 text-center wow fadeIn" data-wow-delay="0.2s">
                        <img class="img-icon" src="landing/img/icon-p.png" alt="">
                        <h1 class="angka-analis mb-0" data-toggle="counter-up">{{ $penyakit }}</h1>
                        <p class="sub-text">Penyakit</p>
                    </div>
                    <div class="box1 mt-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <img class="img-icon" src="landing/img/icon-g.png" alt="">
                        <h1 class="angka-analis mb-0" data-toggle="counter-up">{{ $gejala }}</h1>
                        <p class="sub-text">Gejala</p>
                    </div>
                    <div class="box1 mt-3 text-center wow fadeIn" data-wow-delay="0.4s">
                        <img class="img-icon" src="landing/img/icon-d.png" alt="">
                        <h1 class="angka-analis mb-0" data-toggle="counter-up">{{ $diagnosa }}</h1>
                        <p class="sub-text">Diagnosa</p>
                    </div>
                    <div class="box1 mt-3 text-center wow fadeIn" data-wow-delay="0.5s">
                        <img class="img-icon" src="landing/img/icon-u.png" alt="">
                        <h1 class="angka-analis mb-0" data-toggle="counter-up">{{ $user }}</h1>
                        <p class="sub-text">User</p>
                    </div>
                </div>
                <!-- Analisis Data End -->
            </div>
            <div class="col-lg-6 animated fadeIn">
                <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;" src="landing/img/hero-3.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Layanan Start -->
<div class="container-fluid bg-white py-4">
    <div class="container py-5">
        <div class="row g-4 mb-4">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="Sub-judul mb-1">Layanan</h1>
                <p class="span-text mb-5">Sejak Dini, Stunting Kita Atasi Bersama!</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="card-service text-center PY-2 text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                    <div class="kotak-icon py-2 mx-auto">
                        <img src="landing/img/icon-1.png" alt="">
                    </div>
                    <h3 class="mt-4">Diagnosis Penyakit</h3>
                    <p class="mt-3">Layanan utama adalah kemampuan untuk mendiagnosa penyakit berdasarkan gejala
                        yang
                        dimasukkan oleh pengguna.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="card-service text-center PY-2 text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                    <div class="kotak-icon py-2 mx-auto">
                        <img src="landing/img/icon-4.png" alt="">
                    </div>
                    <h3 class="mt-4">Pencegahan</h3>
                    <p class="mt-3">Memberikan saran tentang perubahan gaya hidup, vaksinasi, atau tindakan lain
                        yang
                        dapat membantu mencegah penyakit.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="card-service text-center PY-2 text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                    <div class="kotak-icon py-2 mx-auto">
                        <img src="landing/img/icon-3.png" alt="">
                    </div>
                    <h3 class="mt-4">Informasi Penyakit</h3>
                    <p class="mt-3">Memberikan informasi rinci tentang penyakit-penyakit yang dapat didiagnosis
                        oleh
                        sistem.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="card-service text-center PY-2 text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                    <div class="kotak-icon py-2 mx-auto">
                        <img src="landing/img/icon-2.png" alt="">
                    </div>
                    <h3 class="mt-4">Rekomendasi Medis</h3>
                    <p class="mt-3">Sistem dapat memberikan rekomendasi perawatan atau pengobatan berdasarkan
                        diagnosis.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Layanan End -->

<!-- Penyakit & Gejala Start -->
<div class="card_wrapper py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h2 class="Sub-judul mb-5">Tentang Penyakit & Gejala</h2>
            </div>
            <div class="col-12">
                <div class="owl-carousel slider_carousel">
                    <div class="card_box">
                        <a href="/penyakit-dan-gejala"><img class="img-banner" src="landing/img/1.jpg" alt=""></a>
                    </div>
                    <div class="card_box">
                        <a href="/penyakit-dan-gejala"><img class="img-banner" src="landing/img/2.jpg" alt=""></a>
                    </div>
                    <div class="card_box">
                        <a href="/penyakit-dan-gejala"><img class="img-banner" src="landing/img/3.jpg" alt=""></a>
                    </div>
                    <div class="card_box">
                        <a href="/penyakit-dan-gejala"><img class="img-banner" src="landing/img/4.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Penyakit & Gejala End -->

<!-- Artikel Start -->
<div class="container-fluid bg-artikel py-5">
    <div class="container py-5">
        <div class="row g-4 mb-5">
            <div class="col-lg-12">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="Sub-judul mb-1">Baca 10+ Artikel Baru</h1>
                </div>
            </div>
        </div>
        <div class="row g-4">
            @foreach ($posts->take(4) as $stunting)
            <div class="col-lg-3 col-md-6 mt-md-3">
                <div class="card-artikel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-absolute bg-primary px-1 py-0 rounded-3 mx-1 mt-1">
                        <a href="/categories/{{ $stunting->category->slug }}" class="text-white text-decoration-none px-1 py-1">
                            {{ $stunting->category->name }}
                        </a>
                    </div>
                    <div class="gambar-artikel mx-auto mb-2">
                        <img src="{{ asset('data_file/' . $stunting->gambar->file) }}" class="img-fluid rounded-3" alt="">
                    </div>
                    <h3 class="mb-0">{{ Str::limit($stunting->title, 40, '...') }}</h3>
                    <span class="mt-0">By {{ $stunting->user->nama }}<span class="ms-3 ttl">{{ $stunting->created_at->format('d M Y') }}</span></span>
                    <p class="mt-2">{{ Str::limit($stunting->excerpt, 110, '...') }}</p>
                    <a href="/artikel-stunting/{{ $stunting->slug }}" class="btn btn-artikel ps-0 pt-0 pb-0 pe-0">Lihat lebih detail...</a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Artikel End -->

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

<script src="landing/js/jquery-3.4.1.min.js"></script>
<script src="landing/js/owl.carousel.min.js"></script>

<script>
    function slider_carouselInit() {
        $('.owl-carousel.slider_carousel').owlCarousel({
            dots: false,
            loop: true,
            margin: 30,
            stagePadding: 2,
            autoplay: false,
            nav: true,
            navText: ["<i class='bi bi-arrow-left-circle-fill'></i>",
                "<i class='bi bi-arrow-right-circle-fill'></i>"
            ],
            autoplayTimeout: 1500,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 3
                }
            }
        });
    }
    slider_carouselInit();
</script>
@endsection