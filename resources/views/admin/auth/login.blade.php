<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui"/>
        <title>{{ config('app.name') }} - Authentication</title>
        <meta content="{{ config('app.name') }} - Authentication" name="description" />
        <meta content="{{ config('app.name') }}" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/images/favicon.ico" />
        <link
            href="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/css/bootstrap.min.css"rel="stylesheet"type="text/css"
        />
        <link href="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">
            <div class="card">
                <div class="card-body">
                    <div class="text-center m-b-15">
                        <a href="javascript:;" class="logo logo-admin"
                            ><img
                                src="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/images/logo.png"
                                height="24"
                                alt="logo"
                        /></a>
                    </div>
                    <div class="p-3">
                        <form
                            class="form-horizontal m-t-20"
                            action="{{route('login.post')}}"
                            method="POST"
                        >
                        @csrf
                        @include('admin.notif.index')
                            <div class="form-group row">
                                <div class="col-12">
                                    <input
                                        class="form-control"
                                        type="email"
                                        required=""
                                        name="email"
                                        placeholder="Email"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <input
                                        class="form-control"
                                        type="password"
                                        required=""
                                        name="password"
                                        placeholder="Password"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input
                                            type="checkbox"
                                            class="custom-control-input"
                                            id="customCheck1"
                                        />
                                        <label
                                            class="custom-control-label"
                                            for="customCheck1"
                                            >Ingat saya</label
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button
                                        class="btn btn-danger btn-block waves-effect waves-light"
                                        type="submit"
                                    >
                                        Masuk
                                    </button>
                                </div>
                            </div>
                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-sm-7 m-t-20">
                                    <a
                                        href="javascript:;"
                                        class="text-muted"
                                        ><i class="mdi mdi-lock"></i>
                                        <small>Lupa password?</small></a
                                    >
                                </div>
                                <div class="col-sm-5 m-t-20">
                                    <a
                                        href="javascript:;"
                                        class="text-muted"
                                        ><i class="mdi mdi-account-circle"></i>
                                        <small>Belum punya akun?</small></a
                                    >
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery  -->
        <script src="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/js/jquery.min.js"></script>
        <script src="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/js/popper.min.js"></script>
        <script src="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/js/bootstrap.min.js"></script>
        <script src="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/js/modernizr.min.js"></script>
        <script src="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/js/waves.js"></script>
        <script src="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/js/jquery.slimscroll.js"></script>
        <script src="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/js/jquery.nicescroll.js"></script>
        <script src="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/js/jquery.scrollTo.min.js"></script>
        <!-- KNOB JS -->
        <script src="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/plugins/jquery-knob/excanvas.js"></script>
        <script src="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/plugins/jquery-knob/jquery.knob.js"></script>
        <!-- App js -->
        <script src="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/js/app.js"></script>
    </body>
</html>
