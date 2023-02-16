@include('app.layout.head')
@include('app.layout.header')
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
                            <li class="breadcrumb-item active">Progress Layanan</li>
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
                        <div class="form-group row">
                            <label
                                for="example-text-input-lg"
                                class="col-sm-12 col-form-label"
                                >Email</label
                            >
                            <div class="col-sm-12">
                                <input
                                    class="form-control form-control-lg"
                                    type="email"
                                    placeholder="Masukkan Email"
                                    id="example-text-input-lg"
                                    name="email"
                                    required
                                />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-info waves-effect waves-light"> <i class="mdi mdi-send mr-2"></i>Submit</button>
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
