<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="/assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Maintener | {{ $title }}</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="\landing\img\Logo.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap" rel="stylesheet" />

    <link rel="stylesheet" href="/assets/vendor/fonts/materialdesignicons.css" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="/assets/vendor/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- //! Tambahan -->
    <link rel="stylesheet" href="/assets/tambahan/diagnosa.css" />
    <link rel="stylesheet" href="/assets/tambahan/responsive.css" />
    <!-- //! End Tambahan -->

    <!-- Helpers -->
    <script src="/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="/maintener/dashboard" class="app-brand-link">
                        <span class="app-brand-text demo menu-text fw-semibold ms-2">Maintenance</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="mdi menu-toggle-icon d-xl-block align-middle mdi-20px"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item {{ $title === 'Home' ? 'active' : '' }}">
                        <a href="/maintener/dashboard" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                            <div data-i18n="Dashboards">Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-item {{ $title === 'Diagnosa Stunting' ? 'active' : '' }}">
                        <a href="/maintener/maintener-diagnosa" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-human-male-height-variant"></i>
                            <div data-i18n="Academy">Diagnosa</div>
                        </a>
                    </li>
                    <!-- //! End Dashboards -->

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Pengaturan Data</span>
                    </li>

                    <!-- Data Data -->
                    <li class="menu-item {{ $title === 'Data Pengguna' ? 'active' : '' }}">
                        <a href="/maintener/pengguna" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-account-group"></i>
                            <div data-i18n="CRM">Data Pengguna</div>
                        </a>
                    </li>
                    <li class="menu-item {{ $title === 'Data Diagnosa' ? 'active' : '' }}">
                        <a href="/maintener/data-diagnosa" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-account-search"></i>
                            <div data-i18n="eCommerce">Data Diagnosa</div>
                        </a>
                    </li>
                    <li class="menu-item {{ $title === 'Data Gejala' ? 'active' : '' }}">
                        <a href="/maintener/data-gejala" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-stethoscope"></i>
                            <div data-i18n="Logistics">Data Gejala</div>
                        </a>
                    </li>
                    <li class="menu-item {{ $title === 'Data Penyakit' ? 'active' : '' }}">
                        <a href="/maintener/data-penyakit" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-virus-outline"></i>
                            <div data-i18n="Academy">Data Penyakit</div>
                        </a>
                    </li>
                    <li class="menu-item {{ $title === 'Jawaban Kunci' ? 'active' : '' }}">
                        <a href="/maintener/data-jawaban" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-clipboard-pulse-outline"></i>
                            <div data-i18n="Academy">Nilai Jawaban</div>
                        </a>
                    </li>
                    <li class="menu-item {{ $title === 'Rule Diagnosis' ? 'active' : '' }}">
                        <a href="/maintener/data-rule" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-cogs"></i>
                            <div data-i18n="Academy">Rule</div>
                        </a>
                    </li>
                    <!-- //! End Data Data -->

                    <!-- Apps -->
                    <!-- Components -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Personal</span></li>

                    <!-- Pages -->
                    <li class="menu-item {{ $title === 'Profil' ? 'active' : '' }}">
                        <a href="/maintener/profil" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-account-outline"></i>
                            <div data-i18n="Academy">Profil</div>
                        </a>
                    </li>
                    <li class="menu-item {{ $title === 'Riwayat Diagnosa' ? 'active' : '' }}">
                        <a href="/maintener/riwayat-diagno" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-history"></i>
                            <div data-i18n="Academy">Riwayat Diagnosa</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-link" onclick="event.preventDefault();
                            document.getElementById('logout-form-admin').submit();">
                            <i class="menu-icon tf-icons mdi mdi-logout"></i>
                            <div data-i18n="Academy">Keluar</div>
                            <form id="logout-form-admin" action="/maintener/logout" method="POST">
                                @csrf
                            </form>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0);">
                            <i class="mdi mdi-menu mdi-24px"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center mt-3" id="navbar-collapse">
                        <!-- Search -->
                        <a href="/">
                            <div class="navbar-nav align-items-center">
                                <img src="/landing/img/Logo.png" alt="" width="40" class="gambar-logo me-2">
                                <h2 class="m-0 text-primary">C E K S A.</h2>
                            </div>
                        </a>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <li class="nav-item lh-1 me-3">
                                {{ Auth::user()->nama }}
                                <!-- <a class="github-button" href="#" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star themeselection/materio-bootstrap-html-admin-template-free on GitHub">Star</a> -->
                            </li>

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
                                    <li>
                                        <a class="dropdown-item pb-2 mb-1" href="#">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-2 pe-1">
                                                    <div class="avatar avatar-online">
                                                        <img src="/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-0">{{ Auth::user()->nama }}</h6>
                                                    <small class="text-muted">{{ Auth::user()->role }}</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider my-1"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/maintener/profil">
                                            <i class="mdi mdi-account-outline me-1 mdi-20px"></i>
                                            <span class="align-middle">Profil</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider my-1"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="" onclick="event.preventDefault();
                                        document.getElementById('logout-form-admin').submit();">
                                            <i class="mdi mdi-power me-1 mdi-20px"></i>
                                            <span class="align-middle">Keluar</span>
                                        </a>
                                        <form id="logout-form-admin" action="/maintener/logout" method="POST">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">

                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row gy-4">
                            @yield('content')
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl">
                            <div class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">
                                <div class="text-body mb-2 mb-md-0">
                                    ©<script>
                                        document.write(new Date().getFullYear());
                                    </script>, made <span class="text-danger"><i class="tf-icons mdi mdi-heart"></i></span> by
                                    <a href="#" target="_blank" class="footer-link fw-medium">MBKM Proyek
                                        Independen UPY</a>
                                </div>
                                <div class="d-none d-lg-inline-block">
                                    <span class="me-3">
                                        <script>
                                            // Membuat objek Date
                                            var currentDate = new Date();

                                            // Mendapatkan informasi hari, tanggal, dan bulan
                                            var day = currentDate.getDate();
                                            var month = currentDate.getMonth() + 1; // Perlu ditambah 1 karena indeks bulan dimulai dari 0
                                            var year = currentDate.getFullYear();

                                            // Mendapatkan nama hari
                                            var daysOfWeek = ["Ahad", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
                                            var dayOfWeek = daysOfWeek[currentDate.getDay()];

                                            // Menampilkan informasi dalam dokumen
                                            document.write(dayOfWeek + ', ' + day + ' ' + getMonthName(month) + ' ' + year);

                                            // Fungsi untuk mendapatkan nama bulan berdasarkan indeks
                                            function getMonthName(monthIndex) {
                                                var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober",
                                                    "November", "Desember"
                                                ];
                                                return months[monthIndex - 1]; // Perlu dikurangi 1 karena indeks bulan dimulai dari 0
                                            }
                                        </script>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/assets/vendor/libs/popper/popper.js"></script>
    <script src="/assets/vendor/js/bootstrap.js"></script>
    <script src="/assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>