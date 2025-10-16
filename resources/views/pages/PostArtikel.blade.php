@extends('pages.layout.main')
@section('content')
    <!-- FAQs Start -->
    <div class="container-fluid bg-light">
        <div class="container bg-white py-4 px-5">
            <div class="row">
                <div class="col-12">
                    <div class="px-2 btn-group">
                        <a href="/home" class="btn text-dark">Home</a>
                        <a href="#" class="btn text-secondary active border-start" aria-current="page">Artikel</a>
                    </div>

                </div>
                <div class="col-lg-8">
                    <article>
                        <h1 class="px-3 mt-3 mb-2 wow fadeInUp" data-wow-delay="0.1s">{{ $post->title }}
                        </h1>
                        <span class="d-flex px-3 mt-0 mb-3 ttl wow fadeInUp"
                            data-wow-delay="0.1s">{{ $post->created_at->locale('id_ID')->isoFormat('dddd, D MMMM Y') }}
                            <div class="ms-3 bg-primary px-1 py-0 rounded-3">
                                <a href="/categories/{{ $post->category->slug }}"
                                    class="text-white text-decoration-none px-1 py-1">
                                    {{ $post->category->name }}</a>
                            </div>
                        </span>
                        <div class="px-3 gambar-artikel mb-3 mt-3 wow fadeIn" data-wow-delay="0.1s" style="width: 95%">
                            <img src=" {{ asset('data_file/' . $post->gambar->file) }}" class="img-fluid rounded-3"
                                alt="">
                        </div>
                        <span class="px-3 mt-0 mb-5 wow fadeInUp" data-wow-delay="0.1s">By :
                            {{ $post->user->nama }}</span>
                        <hr class="mt-3" style="border-top: 1px solid #ccc;">
                        <div class="px-3 mt-4 wow fadeInUp" data-wow-delay="0.1s">
                            {!! $post->body !!}
                            <a href="/artikel" class="d-block mt-5 mb-4 text-decoration-none">Kembali ke
                                artikel</a>
                        </div>
                    </article>

                </div>

                @if ($posts->count())
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        @foreach ($posts->sortByDesc('created_at')->take(3) as $post)
                            <div class="card-artikel mb-2 d-flex">
                                <div class="position-absolute bg-primary px-1 py-0 rounded-3 mx-1 mt-1">
                                    <a href="/categories/{{ $post->category->slug }}"
                                        class="text-white text-decoration-none px-1 py-1">
                                        {{ $post->category->name }}</a>
                                </div>
                                <div class="trand-right-img" style="width: 280px; height: 100px; overflow: hidden;">
                                    <img src="{{ asset('data_file/' . $post->gambar->file) }}" alt=""
                                        class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                                <div class="trand-right-cap ms-3">
                                    <span class="mt-0">{{ $post->user->nama }}<span
                                            class="ms-3 ttl">{{ $post->created_at->format('d M Y') }}</span></span>
                                    <h3 class="mb-0 mt-1"><a href="/artikel/{{ $post->slug }}">
                                            {{ Str::limit($post->title, 40, '...') }}</a></h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-center fs-4">No posts found.</p>
                @endif
            </div>
        </div>
    </div>
    <!-- FAQs Start -->
@endsection
