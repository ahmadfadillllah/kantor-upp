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
                                <span class="text-muted">Total Storage</span>
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
                                Form Surat
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.notif.index')
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-outline-purple waves-effect waves-light" style="float:right"
                        data-animation="zoomIn"
                        data-toggle="modal"
                        data-target="#exampleModalLong-1">
                            <i class="mdi mdi-email-outline mr-2" ></i>Tambah Surat
                        </button>
                        @include('admin.daftar_surat.modal.insert')
                        <h4 class="mt-0 header-title">
                            Daftar Surat
                        </h4>
                        <br>
                        <br>
                        <table
                            id="datatable"
                            class="table table-bordered dt-responsive nowrap"
                            style="
                                border-collapse: collapse;
                                border-spacing: 0;
                                width: 100%;
                            "
                        >
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Surat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($surat as $s)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $s->nama_surat }}</td>
                                    <td>
                                        <a href="{{ asset('admin/mannatthemes.com/zoogler/horizontal/assets/images/users') }}/{{ $s->file }}" target="_blank" class="btn btn-success btn-sm">
                                            <i class="mdi mdi-cloud-download mr-2"></i>Download
                                        </a>
                                        <button type="button" class="btn btn-warning btn-sm"
                                        data-animation="zoomIn"
                                        data-toggle="modal"
                                        data-target="#destroSurat{{$s->id}}">
                                            <i class="mdi mdi-alert-outline mr-2"></i>Hapus
                                        </button>
                                        @include('admin.daftar_surat.modal.destroy')
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
    </div>
    <!-- end container -->
</div>
<!-- end wrapper -->
<!-- Footer -->
@include('admin.layout.footer')
