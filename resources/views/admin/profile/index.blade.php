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
                                Profile
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
                        <h4 class="mt-0 header-title">Informasi</h4>
                        <div class="row">
                            <div class="col-xl-6">
                                <form action="{{ route('profile.update_informasi') }}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label
                                            for="example-text-input"
                                            class="col-sm-4 col-form-label"
                                            >Nama Lengkap</label
                                        >
                                        <div class="col-sm-8">
                                            <input
                                                class="form-control"
                                                type="text"
                                                value="{{ Auth::user()->name }}"
                                                id="example-text-input"
                                                name="name"
                                            />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label
                                            for="example-email-input"
                                            class="col-sm-4 col-form-label"
                                            >Email</label
                                        >
                                        <div class="col-sm-8">
                                            <input
                                                class="form-control"
                                                type="email"
                                                value="{{ Auth::user()->email }}"
                                                id="example-search-input"
                                                name="email"
                                            />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label
                                            for="example-text-input"
                                            class="col-sm-4 col-form-label"
                                            >No. Handphone</label
                                        >
                                        <div class="col-sm-8">
                                            <input
                                                class="form-control"
                                                type="text"
                                                value="{{ Auth::user()->no_hp }}"
                                                id="example-text-input"
                                                name="no_hp"
                                            />
                                        </div>
                                        <div class="col-sm-10">
                                            <br>
                                            <button type="submit" class="btn btn-gradient-success waves-effect waves-light">Update Informasi</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            {{-- <h4 class="mt-0 header-title">Informasi</h4> --}}
                            <div class="col-xl-6">
                                <form action="{{ route('profile.update_password') }}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label
                                            for="example-text-input-lg"
                                            class="col-sm-4 col-form-label"
                                            >Password Lama</label
                                        >
                                        <div class="col-sm-8">
                                            <input
                                                class="form-control form-control-lg"
                                                type="password"
                                                id="example-text-input-lg"
                                                name="password_lama"
                                            />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label
                                            for="example-text-input-lg"
                                            class="col-sm-4 col-form-label"
                                            >Password Baru</label
                                        >
                                        <div class="col-sm-8">
                                            <input
                                                class="form-control form-control-lg"
                                                type="password"
                                                id="example-text-input-lg"
                                                name="password_baru"
                                            />
                                        </div>
                                        <div class="col-sm-10">
                                            <br>
                                            <button type="submit" class="btn btn-gradient-info waves-effect waves-light">Ganti Password</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <div class="row">
            <div class="col-xl-6">
                    <form action="{{ route('profile.update_avatar')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card m-b-30">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Ganti Avatar</h4>
                                <input
                                    type="file"
                                    id="input-file-now"
                                    class="dropify"
                                    name="avatar"
                                />
                                <button type="submit" class="btn btn-gradient-success waves-effect waves-light">Update Avatar</button>
                            </div>
                        </div>
                </form>
                </div>
            <!--end col-->
            <div class="col-xl-6">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Preview Avatar Sebelumnya</h4>
                        <img src="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/images/users/{{ Auth::user()->avatar }}" alt="Preview Avatar" width="100">
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
    </div>
    <!-- end container -->
</div>
<!-- end wrapper -->
<!-- Footer -->
@include('admin.layout.footer')
