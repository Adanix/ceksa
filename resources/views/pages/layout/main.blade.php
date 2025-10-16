<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="\landing\img\Logo.png" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@500;700&family=Montserrat:wght@600;700&family=Poppins:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/landing/css/owl.carousel.min.css" rel="stylesheet">
    <link href="/landing/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/landing/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/landing/css/bootstrap.min.css" rel="stylesheet">

    <!-- //! Tambahan -->
    <link rel="stylesheet" href="/assets/tambahan/diagnosa.css" />
    <!-- //! End Tambahan -->

    <!-- Template Stylesheet -->
    <link href="/landing/css/style.css" rel="stylesheet">
    <link href="/landing/css/Artikel_style.css" rel="stylesheet">
    <link href="/landing/css/p&g_style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-5 px-lg-5 px-sm-0 py-0 my">
        <a href="/" class="navbar-brand d-flex align-items-center">
            <img src="/landing/img/Logo.png" alt="" width="45" height="45"
                class="d-inline-block align-text-top">
            <h2 class="ms-3 m-0 text-logo">C E K S A.</h2>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="nav-mr collapse navbar-collapse no-transition" id="navbarCollapse">
            <!-- //! Is active Kudu dibuat -->
            @auth
                <!-- //* Nav Beranda Login -->
                <div class="navbar-nav ms-auto py-4 py-lg-0">
                    <a href="/"
                        class="nav-item nav-link {{ $title === 'Sistem Pakar Diagnosa Stunting' ? 'active' : '' }}">Home</a>
                    <a href="/diagnosa" class="nav-item nav-link {{ $title === 'Diagnosa' ? 'active' : '' }}">Diagnosa</a>
                    <a href="/penyakit-dan-gejala"
                        class="nav-item nav-link {{ $title === 'Penyakit Dan Gejala' ? 'active' : '' }}">Penyakit &
                        Gejala</a>
                    <a href="/artikel"
                        class="nav-item nav-link {{ $title === 'Artikel Stunting' ? 'active' : '' }}">Artikel</a>
                </div>
                <a class="h-100 btn btn-Kotak bg-light text-primary me-2 mb-1"
                    href="{{ Auth::user()->role }}/dashboard">Dashboard</a>
            @else
                <!-- //* Nav Beranda No Login -->
                <div class="navbar-nav ms-auto py-4 py-lg-0">
                    <a href="/"
                        class="nav-item nav-link {{ $title === 'Sistem Pakar Diagnosa Stunting' ? 'active' : '' }}">Home</a>
                    <a href="/diagnosa" class="nav-item nav-link {{ $title === 'Diagnosa' ? 'active' : '' }}">Diagnosa</a>
                    <a href="/penyakit-dan-gejala"
                        class="nav-item nav-link {{ $title === 'Penyakit Dan Gejala' ? 'active' : '' }}">Penyakit &
                        Gejala</a>
                    <a href="/artikel"
                        class="nav-item nav-link {{ $title === 'Artikel Stunting' ? 'active' : '' }}">Artikel</a>
                </div>
                <a class="h-100 btn btn-login me-3 mb-0" href="/login">Login</a>
                <a class="h-100 btn btn-register mb-0" href="/register">Register</a>
            @endauth
        </div>
    </nav>
    <!-- Navbar End -->

    @yield('content')

    <div class="container-fluid bg-light pt-3 pb-3 copyright">
        <div class="container">
            <div class="row">
                <div class="col text-center mb-3 mb-md-0">
                    &copy; <a href="#">Project Independen MBKM</a>, All Right Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="/landing/js/jquery-3.4.1.min.js"></script>
    <script src="/landing/js/owl.carousel.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/landing/lib/wow/wow.min.js"></script>
    <script src="/landing/lib/easing/easing.min.js"></script>
    <script src="/landing/lib/waypoints/waypoints.min.js"></script>
    <script src="/landing/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/landing/lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="/landing/js/main.js"></script>
</body>

</html>
