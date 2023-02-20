@include('admin.layout.head')
@include('admin.layout.header')
<!-- End Navigation Bar-->
<div class="wrapper">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right hide-phone">
                        <ul class="list-inline">
                            <li class="list-inline-item mr-3">
                                <input class="knob" data-width="48" data-height="48" data-linecap="round"
                                    data-fgcolor="#605daf" value="80" data-skin="tron" data-angleoffset="180"
                                    data-readonly="true" data-thickness=".1" />
                            </li>
                            <li class="list-inline-item">
                                <span class="text-muted">Storage used</span>
                                <h6><?php
                                    $bytes = disk_free_space(".");
                                    $si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
                                    $base = 1024;
                                    $class = min((int)log($bytes , $base) , count($si_prefix) - 1);
                                    echo $bytes . '<br />';
                                    echo sprintf('%d' , $bytes / pow($base,$class)) . ' ' . $si_prefix[$class] . '<br />';
                                ?></h6>
                            </li>
                        </ul>
                    </div>
                    <h4 class="page-title">Dashboard</h4>
                    <div class="btn-group mt-2">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item">
                                <a href="#">Admin</a>
                            </li>
                            <li class="breadcrumb-item active">
                                Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.notif.index')
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="icon-contain">
                                    <div class="row">
                                        <div class="col-2 align-self-center">
                                            <i class="fas fa-users text-gradient-warning"></i>
                                        </div>
                                        <div class="col-10 text-right">
                                            <h5 class="mt-0 mb-1">
                                                {{$user->count()}}
                                            </h5>
                                            <p class="mb-0 font-12 text-muted">
                                                User
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body justify-content-center">
                                <div class="icon-contain">
                                    <div class="row">
                                        <div class="col-2 align-self-center">
                                            <i class="far fa-gem text-gradient-danger"></i>
                                        </div>
                                        <div class="col-10 text-right">
                                            <h5 class="mt-0 mb-1">
                                                {{ $kontak->count() }}
                                            </h5>
                                            <p class="mb-0 font-12 text-muted">
                                                Kontak
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="icon-contain">
                                    <div class="row">
                                        <div class="col-2 align-self-center">
                                            <i class="fas fa-tasks text-gradient-success"></i>
                                        </div>
                                        <div class="col-10 text-right">
                                            <h5 class="mt-0 mb-1">
                                                {{$surat_masuk->count()}}
                                            </h5>
                                            <p class="mb-0 font-12 text-muted">
                                                Surat Masuk
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="icon-contain">
                                    <div class="row">
                                        <div class="col-2 align-self-center">
                                            <i class="fas fa-tasks text-gradient-success"></i>
                                        </div>
                                        <div class="col-10 text-right">
                                            <h5 class="mt-0 mb-1">
                                                {{$surat_keluar->count()}}
                                            </h5>
                                            <p class="mb-0 font-12 text-muted">
                                                Surat Keluar
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                            <label class="btn btn-primary btn-sm active"><input type="radio" name="options"
                                    id="option1" checked="" />
                                Bulanan</label>
                        </div>
                        <h5 class="header-title mb-4 mt-0">
                            Record Surat
                        </h5>
                        <canvas id="lineChart1" height="80"></canvas>
                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="header-title mb-4 mt-0">Record</h5>
                        <div>
                            <canvas id="dash-doughnut" height="200"></canvas>
                        </div>
                        <ul class="list-unstyled list-inline text-center mb-0 mt-3">
                            <li class="mb-2 list-inline-item text-muted font-13">
                                <i class="mdi mdi-label text-success mr-2"></i>Kontak
                            </li>
                            <li class="mb-2 list-inline-item text-muted font-13">
                                <i class="mdi mdi-label text-danger mr-2"></i>Surat Masuk
                            </li>
                            <li class="mb-2 list-inline-item text-muted font-13">
                                <i class="mdi mdi-label text-warning mr-2"></i>Surat Keluar
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end wrapper -->
<!-- Footer -->
<script>
    var semuaData = {!! json_encode($semuaData) !!};
    var dataSuratMasuk = {!! json_encode($dataSuratMasuk) !!};
    var dataSuratKeluar = {!! json_encode($dataSuratKeluar) !!};
</script>
@include('admin.layout.footer')
