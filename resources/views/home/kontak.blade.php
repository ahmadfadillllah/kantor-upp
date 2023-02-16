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
    <link rel="preload" href="{{ asset('home/dist') }}/assets/css/fonts/urbanist.css" as="style"
        onload="this.rel='stylesheet'">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    @if (session('success'))
        <script>
            Swal.fire(
                'Good job!',
                '{{ session('success') }}',
                'success'
            )
        </script>
    @endif
    @if (session('info'))
        <script>
            Swal.fire(
                'Upps!',
                '{{ session('info') }}',
                'info'
            )
        </script>
    @endif
    <div class="content-wrapper">
        <header class="wrapper bg-soft-primary">
            <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-dark">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                    <div class="navbar-brand w-100">
                        <a href="./index.html">
                            <img class="logo-dark" src="{{ asset('home/dist') }}/assets/img/logo.png"
                                srcset="{{ asset('home/dist') }}/assets/img/logo@2x.png 2x" alt="" />
                            <img class="logo-light" src="{{ asset('home/dist') }}/assets/img/logo-light.png"
                                srcset="{{ asset('home/dist') }}/assets/img/logo-light@2x.png 2x" alt="" />
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
        <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 text-white"
            data-image-src="{{ asset('home/dist') }}/assets/img/photos/bg3.jpg">
            <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h1 class="display-1 mb-3 text-white">Hubungi Kami</h1>
                        <nav class="d-inline-block" aria-label="breadcrumb">
                            <ol class="breadcrumb text-white">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Hubungi Kami</li>
                            </ol>
                        </nav>
                        <!-- /nav -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-light angled upper-end">
            <div class="container pb-11">
                <div class="row mb-14 mb-md-16">
                    <div class="col-xl-10 mx-auto mt-n19">
                        <div class="card">
                            <div class="row gx-0">
                                <div class="col-lg-6 align-self-stretch">
                                    <div class="map map-full rounded-top rounded-lg-start">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.7984857847287!2d119.44673841398479!3d-5.136124053385283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefd3165008369%3A0x7af75b8baf265f2b!2sFakultas%20Ilmu%20Komputer%20UMI!5e0!3m2!1sen!2sid!4v1676563925597!5m2!1sen!2sid"
                                            style="width:100%; height: 100%; border:0" allowfullscreen></iframe>
                                    </div>
                                    <!-- /.map -->
                                </div>
                                <!--/column -->
                                <div class="col-lg-6">
                                    <div class="p-10 p-md-11 p-lg-14">
                                        <div class="d-flex flex-row">
                                            <div>
                                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                                        class="uil uil-location-pin-alt"></i> </div>
                                            </div>
                                            <div class="align-self-start justify-content-start">
                                                <h5 class="mb-1">Alamat</h5>
                                                <address>Universitas Muslim Indonesia<br
                                                        class="d-none d-md-block" />Fakultas Ilmu Komputer</address>
                                            </div>
                                        </div>
                                        <!--/div -->
                                        <div class="d-flex flex-row">
                                            <div>
                                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                                        class="uil uil-phone-volume"></i> </div>
                                            </div>
                                            <div>
                                                <h5 class="mb-1">No. Handphone</h5>
                                                <p>+62 853-4180-7939</p>
                                            </div>
                                        </div>
                                        <!--/div -->
                                        <div class="d-flex flex-row">
                                            <div>
                                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                                        class="uil uil-envelope"></i> </div>
                                            </div>
                                            <div>
                                                <h5 class="mb-1">E-mail</h5>
                                                <p class="mb-0"><a href="mailto:13020180078@umi.ac.id"
                                                        class="link-body">13020180078@umi.ac.id</a></p>
                                            </div>
                                        </div>
                                        <!--/div -->
                                    </div>
                                    <!--/div -->
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                        <h2 class="display-4 mb-3 text-center">Berikan Pesan</h2>
                        <p class="lead text-center mb-10">Pesan anda sangat berarti bagi kami</p>
                        <form class="contact-form" method="post"
                            action="{{ route('kontak.post') }}">
                            @csrf
                            {{-- <div class="messages"></div> --}}
                            <div class="row gx-4">
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_name" type="text" name="nama_lengkap"
                                            class="form-control" placeholder="Jane" required>
                                        <label for="form_name">Nama Lengkap *</label>
                                        <div class="valid-feedback"> Terlihat bagus! </div>
                                        <div class="invalid-feedback"> Isi nama lengkap anda. </div>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_lastname" type="text" name="no_hp" class="form-control"
                                            placeholder="Doe" required>
                                        <label for="form_lastname">No. Handphone *</label>
                                        <div class="valid-feedback"> Terlihat bagus! </div>
                                        <div class="invalid-feedback"> isi No. Handphone anda. </div>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_email" type="email" name="email" class="form-control"
                                            placeholder="jane.doe@example.com" required>
                                        <label for="form_email">Email *</label>
                                        <div class="valid-feedback"> Terlihat bagus! </div>
                                        <div class="invalid-feedback"> Isi email anda. </div>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_email" type="text" name="subject" class="form-control"
                                            placeholder="jane.doe@example.com" required>
                                        <label for="form_email">Subject *</label>
                                        <div class="valid-feedback"> Terlihat bagus! </div>
                                        <div class="invalid-feedback"> Isi subject pesan. </div>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="col-12">
                                    <div class="form-floating mb-4">
                                        <textarea id="form_message" name="pesan" class="form-control" placeholder="Your message" style="height: 150px"
                                            required></textarea>
                                        <label for="form_message">Pesan *</label>
                                        <div class="valid-feedback"> Terlihat bagus! </div>
                                        <div class="invalid-feedback"> Sampaikan pesan anda. </div>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="col-12 text-center">
                                    <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3"
                                        value="Kirim Pesan">
                                    <p class="text-muted"><strong>*</strong> Field tersebut wajib diisi.</p>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </form>
                        <!-- /form -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <!-- /section -->
    </div>
    <!-- /.content-wrapper -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="{{ asset('home/dist') }}/assets/js/plugins.js"></script>
    <script src="{{ asset('home/dist') }}/assets/js/theme.js"></script>
</body>

</html>
