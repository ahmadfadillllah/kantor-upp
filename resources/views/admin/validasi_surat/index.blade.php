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
                                Validasi Surat
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
                        <h4 class="mt-0 header-title">
                            Validasi Surat
                        </h4>
                        <p>Daftar surat yang ingin divalidasi dan dikirimkan ke request surat</p>
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
                                    <th>Email</th>
                                    <th>No. WhatsApp</th>
                                    <th>Kategori Surat</th>
                                    <th>Nama Pemilik Kapal</th>
                                    <th>Nama Panggilan Kapal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($surat as $s)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $s->email }}</td>
                                    <td>{{ $s->no_hp }}</td>
                                    <td>{{ $s->daftar_surat->nama_surat }}</td>
                                    <td>{{ $s->nama }}</td>
                                    <td>{{ $s->nama_panggilan_kapal }}</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm"
                                        data-toggle="modal"
                                        data-target="#validasiSurat{{$s->id}}">
                                            <i class="mdi mdi-cloud-download mr-2"></i>Validasi
                                        </button>
                                        <button type="button" class="btn btn-warning btn-sm"
                                        data-animation="zoomIn"
                                        data-toggle="modal"
                                        data-target="#destroyRequest{{$s->id}}">
                                            <i class="mdi mdi-alert-outline mr-2"></i>Hapus
                                        </button>
                                    </td>
                                </tr>
                                @include('admin.validasi_surat.modal.validasi')
                                @include('admin.validasi_surat.modal.destroy')
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
