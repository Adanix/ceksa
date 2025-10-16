@extends('pages.layout.main')
@section('content')
    <!-- Carosel Section Start-->
    <div class="container-fluid bg-light ">
        <div class="container bg-white py-2 wow fadeIn" data-wow-delay="0.1s">
            <div id="carouselExampleIndicators" class="carousel slide align-items-center" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/landing/img/img2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/landing/img/img3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/landing/img/img2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/landing/img/img3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Carosel Section End -->

    <!-- Artikel Terpopuler Start -->
    <div class="container-fluid bg-light trending-tittle ">
        <div class="container trending-area bg-white py-4 px-3">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row g-4 mb-4">
                    <div class="col-lg-12">
                        <div class="wow fadeInUp" data-wow-delay="0.1s">
                            <h1 class="Sub-judul mb-1">Artikel Terbaru</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                        <!-- Trending Top -->
                        @if ($latestPost = $posts->first())
                            <div class="trending-top mb-5">
                                <div class="trend-top-img">
                                    <img src="/data_file/{{ $latestPost->gambar->file }}" alt="" class="img-fluid">
                                    <div class="trend-top-cap">
                                        <span class="bg-primary">
                                            <a href="/categories/{{ $latestPost->category->slug }}"
                                                class="text-white text-decoration-none">
                                                {{ $latestPost->category->name }}
                                            </a>
                                        </span>
                                        <h2>
                                            <a href="/artikel/{{ $latestPost->slug }}">{{ $latestPost->title }}</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        @else
                            <p class="text-center fs-4">No posts found.</p>
                        @endif

                        <!-- Trending Bottom -->
                        @if ($posts->count() > 1)
                            <div class="trending-bottom">
                                <div class="row">
                                    @foreach ($posts->skip(1)->sortByDesc('created_at')->take(3) as $post)
                                        <div class="col-lg-4">
                                            <div class="card-artikel mb-3">
                                                <div class="position-absolute bg-primary px-1 py-0 rounded-3 mx-1 mt-1">
                                                    <a href="/categories/{{ $post->category->slug }}"
                                                        class="text-white text-decoration-none px-1 py-1">
                                                        {{ $post->category->name }}
                                                    </a>
                                                </div>
                                                <div class="trend-bottom-img mb-2">
                                                    <img src="/data_file/{{ $post->gambar->file }}" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <span class="mt-0">{{ $post->user->nama }}<span
                                                        class="ms-3 ttl">{{ $post->created_at->format('d M Y') }}</span></span>
                                                <h3 class="mb-0 mt-1"><a
                                                        href="/artikel/{{ $post->slug }}">{{ Str::limit($post->title, 40, '...') }}</a>
                                                </h3>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @else
                            <p class="text-center fs-4">No additional posts found.</p>
                        @endif
                    </div>

                    <!-- Right content -->
                    @if ($posts->count() > 3)
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                            @foreach ($posts->skip(3)->sortByDesc('created_at')->take(4) as $post)
                                <div class="card-artikel mb-2 d-flex">
                                    <div class="position-absolute bg-primary px-1 py-0 rounded-3 mx-1 mt-1">
                                        <a href="/categories/{{ $post->category->slug }}"
                                            class="text-white text-decoration-none px-1 py-1">
                                            {{ $post->category->name }}
                                        </a>
                                    </div>
                                    <div class="trand-right-img" style="width: 280px; height: 100px; overflow: hidden;">
                                        <img src="/data_file/{{ $post->gambar->file }}" alt="" class="img-fluid"
                                            style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                    <div class="trand-right-cap ms-3">
                                        <span class="mt-0">{{ $post->user->nama }}<span
                                                class="ms-3 ttl">{{ $post->created_at->format('d M Y') }}</span></span>
                                        <h3 class="mb-0 mt-1"><a
                                                href="/artikel/{{ $post->slug }}">{{ Str::limit($post->title, 40, '...') }}</a>
                                        </h3>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-center fs-4">No additional posts found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Artikel Terpopuler End -->
    <!-- Artikel Terbaru Start -->

    <div class="container-fluid bg-artikel">
        <div class="container bg-white py-4 px-3">
            <div class="row g-4 mb-4 mt-5">
                <div class="col-lg-12">
                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="Sub-judul mb-1">Semua Artikel</h1>
                    </div>
                </div>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                @foreach ($posts as $stunting)
                    <div class="col-lg-3 col-md-6 mt-md-3">
                        <div class="card-artikel">
                            <div class="position-absolute bg-primary px-1 py-0 rounded-3 mx-1 mt-1">
                                <a href="/categories/{{ $stunting->category->slug }}"
                                    class="text-white text-decoration-none px-1 py-1">
                                    {{ $stunting->category->name }}</a>
                            </div>
                            <div class="gambar-artikel mx-auto mb-2">
                                <img src="/data_file/{{ $stunting->gambar->file }}" class="img-fluid rounded-3"
                                    alt="">
                            </div>
                            <h3 class="mb-0">{{ Str::limit($stunting->title, 40, '...') }}</h3>
                            <span class="mt-0">By {{ $stunting->user->nama }}<span
                                    class="ms-3 ttl">{{ $stunting->created_at->format('d M Y') }}</span></span>
                            <p class="mt-2">{{ Str::limit($stunting->excerpt, 110, '...') }}</p>
                            <a href="/artikel/{{ $stunting->slug }}" class="btn btn-artikel ps-0 pt-0 pb-0 pe-0">Lihat
                                lebih detail...</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Artikel Terbaru End -->
@endsection
