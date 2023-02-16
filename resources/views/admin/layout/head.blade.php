<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
            name="viewport"
            content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui"
        />
        <title>{{ config('app.name') }} - Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="{{ config('app.name') }}" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/images/favicon.ico" />
        <link href="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/plugins/animate/animate.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
        <!-- Responsive datatable examples -->
        <link href="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/css/style.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <!-- Loader -->
        <div id="preloader">
            <div id="status"><div class="spinner"></div></div>
        </div>
        <!-- Navigation Bar-->
