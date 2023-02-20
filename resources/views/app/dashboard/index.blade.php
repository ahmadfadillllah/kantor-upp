@include('app.layout.head')
@include('app.layout.header')
<!-- End Navigation Bar-->
<div class="wrapper">
    <div class="container-fluid">
        <!-- Page-Title -->
        @include('admin.notif.index')
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right hide-phone">
                        <ul class="list-inline">
                            <li class="list-inline-item mr-3">
                                <input
                                    class="knob"
                                    data-width="48"
                                    data-height="48"
                                    data-linecap="round"
                                    data-fgcolor="#605daf"
                                    value="80"
                                    data-skin="tron"
                                    data-angleoffset="180"
                                    data-readonly="true"
                                    data-thickness=".1"
                                />
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
                                <a href="#">App</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">
                            Jam Kerja
                        </h4>
                        <p class="text-muted mb-4 font-13">
                            Kami akan validasi surat yang masuk ketika jam kerja
                        </p>
                        <div class="accordion" id="accordionExample">
                            <div class="card mb-0">
                                <div
                                    class="card-header"
                                    id="headingOne"
                                >
                                    <h5 class="my-1">
                                        <button
                                            class="btn btn-link text-dark"
                                            type="button"
                                            data-toggle="collapse"
                                            data-target="#collapseOne"
                                            aria-expanded="true"
                                            aria-controls="collapseOne"
                                        >
                                            Senin
                                        </button>
                                    </h5>
                                </div>
                                <div
                                    id="collapseOne"
                                    class="collapse show"
                                    aria-labelledby="headingOne"
                                    data-parent="#accordionExample"
                                >
                                    <div class="card-body">
                                        08.00 - 16.00 WITA
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <div
                                    class="card-header"
                                    id="headingTwo"
                                >
                                    <h5 class="my-1">
                                        <button
                                            class="btn btn-link collapsed text-dark"
                                            type="button"
                                            data-toggle="collapse"
                                            data-target="#collapseTwo"
                                            aria-expanded="false"
                                            aria-controls="collapseTwo"
                                        >
                                            Selasa
                                        </button>
                                    </h5>
                                </div>
                                <div
                                    id="collapseTwo"
                                    class="collapse"
                                    aria-labelledby="headingTwo"
                                    data-parent="#accordionExample"
                                >
                                    <div class="card-body">
                                        08.00 - 16.00 WITA
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <div
                                    class="card-header"
                                    id="headingThree"
                                >
                                    <h5 class="my-1">
                                        <button
                                            class="btn btn-link collapsed text-dark"
                                            type="button"
                                            data-toggle="collapse"
                                            data-target="#collapseThree"
                                            aria-expanded="false"
                                            aria-controls="collapseThree"
                                        >
                                            Rabu
                                        </button>
                                    </h5>
                                </div>
                                <div
                                    id="collapseThree"
                                    class="collapse"
                                    aria-labelledby="headingThree"
                                    data-parent="#accordionExample"
                                >
                                    <div class="card-body">
                                        08.00 - 16.00 WITA
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <div
                                    class="card-header"
                                    id="headingFour"
                                >
                                    <h5 class="my-1">
                                        <button
                                            class="btn btn-link collapsed text-dark"
                                            type="button"
                                            data-toggle="collapse"
                                            data-target="#collapseFour"
                                            aria-expanded="false"
                                            aria-controls="collapseFour"
                                        >
                                            Kamis
                                        </button>
                                    </h5>
                                </div>
                                <div
                                    id="collapseFour"
                                    class="collapse"
                                    aria-labelledby="headingFour"
                                    data-parent="#accordionExample"
                                >
                                    <div class="card-body">
                                        08.00 - 16.00 WITA
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <div
                                    class="card-header"
                                    id="headingFive"
                                >
                                    <h5 class="my-1">
                                        <button
                                            class="btn btn-link collapsed text-dark"
                                            type="button"
                                            data-toggle="collapse"
                                            data-target="#collapseFive"
                                            aria-expanded="false"
                                            aria-controls="collapseFive"
                                        >
                                            Jum'at
                                        </button>
                                    </h5>
                                </div>
                                <div
                                    id="collapseFive"
                                    class="collapse"
                                    aria-labelledby="headingFive"
                                    data-parent="#accordionExample"
                                >
                                    <div class="card-body">
                                        08.00 - 14.00 WITA
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
    <!-- end container -->
</div>
<!-- end wrapper -->
<!-- Footer -->
@include('app.layout.footer')
