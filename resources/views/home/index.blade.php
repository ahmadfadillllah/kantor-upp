<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ config('app.name') }}">
    <meta name="keywords" content="{{ config('app.name') }}">
    <meta name="author" content="Adhyy">
    <title>Home - {{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('home/dist') }}/assets/img/favicon.png">
    <link rel="stylesheet" href="{{ asset('home/dist') }}/assets/css/plugins.css">
    <link rel="stylesheet" href="{{ asset('home/dist') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('home/dist') }}/assets/css/colors/grape.css">
    <link rel="preload" href="{{ asset('home/dist') }}/assets/css/fonts/urbanist.css" as="style" onload="this.rel='stylesheet'">
</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper">
            <nav class="navbar navbar-expand-lg center-nav transparent navbar-light caret-none">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                    <div class="navbar-brand w-100">
                        <a href="{{ route('home.index') }}">
                            <h3 class="text-black fs-30 mb-0">{{ config('app.name') }}</h3>
                        </a>
                    </div>
                    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                        <div class="offcanvas-header d-lg-none">
                            <h3 class="text-white fs-30 mb-0">{{ config('app.name') }}</h3>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home.index') }}">Home</a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('kontak.index') }}">Hubungi Kami</a>

                                </li>
                            </ul>
                        </div>
                        <!-- /.offcanvas-body -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="navbar-other w-100 d-flex ms-auto">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item d-lg-none">
                                <button class="hamburger offcanvas-nav-btn"><span></span></button>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-other -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navbar -->
        </header>
        <!-- /header -->
        <section class="wrapper bg-light">
            <div class="container-card">
                <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-light-500 mt-2 mb-5"
                    data-image-src="{{ asset('home/dist') }}/assets/img/photos/bg22.png">
                    <div class="card-body py-14 px-0">
                        <div class="container">
                            <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center text-center text-lg-start">
                                <div class="col-lg-6" data-cues="slideInDown" data-group="page-title"
                                    data-delay="900">
                                    <h1 class="display-2 mb-4 me-xl-5 me-xxl-0">Kantor UPP <span
                                            class="text-gradient gradient-1"> Kelas III</span> Majene</h1>
                                    <p class="lead fs-23 lh-sm mb-7 pe-xxl-15">PERANCANGAN SISTEM PELAYANAN PORCLEARANCE BERBASIS WEB</p>
                                    <div><a href="{{ route('app.index') }}" class="btn btn-lg btn-gradient gradient-1 rounded">Buat Surat</a></div>
                                </div>
                                <!--/column -->
                                <div class="col-lg-6">
                                    <img class="img-fluid mb-n18" src="{{ asset('home/dist') }}/assets/img/illustrations/3d6.png"
                                        srcset="{{ asset('home/dist') }}/assets/img/illustrations/3d6@2x.png 2x" data-cue="fadeIn"
                                        data-delay="300" alt="" />
                                </div>
                                <!--/column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container -->
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!-- /.container-card -->
        </section>
        <!-- /section -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="bg-light">
        <div class="container-card">
            <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-light-500 mb-14"
                data-image-src="{{ asset('home/dist') }}/assets/img/photos/bg22.png">
                <div class="card-body py-14 px-0">
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-xl-11 col-xxl-9 mx-auto">
                                <h2 class="fs-16 text-uppercase text-gradient gradient-1 mb-3">Pelayanan Cepat</h2>
                                <h3 class="display-4 mb-7 px-lg-17">Pelayanan kami sudah menggunakan berbasis web dengan tingkat kecepatan membuat surat yang baik</h3>
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!--/.container -->
                </div>
                <!--/.card-body -->
            </div>
            <!--/.card -->
        </div>
        <!-- /.container-card -->
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="{{ asset('home/dist') }}/assets/js/plugins.js"></script>
    <script src="{{ asset('home/dist') }}/assets/js/theme.js"></script>
</body>

</html>
