<header id="topnav">
    <div class="topbar-main">
        <div class="container-fluid">
            <!-- Logo container-->
            <div class="logo">
                <a href="javascript:;" class="logo"
                    ><i class="mdi mdi-bowling text-success mr-1"></i>
                    <span class="hide-phone">{{ config('app.name') }}</span></a
                >
            </div>
            <!-- End Logo container-->
            <div class="menu-extras topbar-custom">
                <ul class="list-unstyled float-right mb-0">
                    <!-- language-->
                    <li class="dropdown notification-list hide-phone">
                        <a
                            class="nav-link dropdown-toggle arrow-none waves-effect"
                            data-toggle="dropdown"
                            href="#"
                            role="button"
                            aria-haspopup="false"
                            aria-expanded="false"
                            >Indonesia
                            <img
                                src="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/images/flags/indo_flag.jpg"
                                class="ml-2"
                                height="16"
                                alt=""
                        /></a>
                        <div
                            class="dropdown-menu dropdown-menu-right language-switch"
                        >
                            <a class="dropdown-item" href="#"
                                ><img
                                    src="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/images/flags/indo_flag.jpg"
                                    alt=""
                                    height="16"
                                /><span>Indonesia </span></a
                            >
                        </div>
                    </li>
                    <!-- notification-->
                    <li class="dropdown notification-list">
                        <a
                            class="nav-link dropdown-toggle arrow-none waves-effect"
                            data-toggle="dropdown"
                            href="#"
                            role="button"
                            aria-haspopup="false"
                            aria-expanded="false"
                            ><i class="dripicons-mail noti-icon"></i>
                            <span
                                class="badge badge-danger noti-icon-badge"
                                >1</span
                            ></a
                        >
                        <div
                            class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg border-0"
                        >
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>
                                    <span
                                        class="badge badge-danger float-right"
                                        >1</span
                                    >Pesan
                                </h5>
                            </div>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon">
                                    <img src="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/images/users/user.png" alt="user-img" class="img-fluid rounded-circle"/>
                                </div>
                                <p class="notify-details">
                                    <b>Administrator</b><small class="text-muted">Selamat datang!</small>
                                </p>
                            </a><!-- item-->
                        </div>
                    </li>
                    <!-- notification-->
                    <li class="dropdown notification-list">
                        <a
                            class="nav-link dropdown-toggle arrow-none waves-effect"
                            data-toggle="dropdown"
                            href="#"
                            role="button"
                            aria-haspopup="false"
                            aria-expanded="false"
                            ><i class="dripicons-bell noti-icon"></i>
                            <span
                                class="badge badge-success noti-icon-badge"
                                >1</span
                            ></a
                        >
                        <div
                            class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg border-0"
                        >
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>Notification (1)</h5>
                            </div>
                            <!-- item-->
                            <a
                                href="javascript:void(0);"
                                class="dropdown-item notify-item"
                                ><div class="notify-icon bg-warning">
                                    <i class="mdi mdi-message"></i>
                                </div>
                                <p class="notify-details">
                                    <b>Pesan Penting</b
                                    ><small class="text-muted"
                                        >Gunakan web ini dengan bijak!</small
                                    >
                                </p></a
                            ><!-- item-->
                            <a
                                href="javascript:void(0);"
                                class="dropdown-item notify-item border-top"
                                >Lihat semua</a
                            >
                        </div>
                    </li>
                    <!-- User-->
                    <li class="dropdown notification-list">
                        <a
                            class="nav-link dropdown-toggle arrow-none waves-effect nav-user"
                            data-toggle="dropdown"
                            href="#"
                            role="button"
                            aria-haspopup="false"
                            aria-expanded="false"
                            ><img
                                src="{{ asset('admin/mannatthemes.com/zoogler/horizontal') }}/assets/images/users/user.png"
                                alt="user"
                                class="rounded-circle"
                        /></a>
                        <div
                            class="dropdown-menu dropdown-menu-right profile-dropdown border-0"
                        >
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>Selamat datang</h5>
                            </div>
                            <a class="dropdown-item" href="{{ route('login') }}"
                                ><i
                                    class="mdi mdi-account-circle m-r-5 text-muted"
                                ></i>
                                Login Admin</a
                            >
                        </div>
                    </li>
                    <li class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link"
                            ><div class="lines">
                                <span></span> <span></span>
                                <span></span></div></a
                        ><!-- End mobile menu toggle-->
                    </li>
                </ul>
            </div>
            <!-- end menu-extras -->
            <div class="clearfix"></div>
        </div>
        <!-- end container -->
    </div>
    <!-- end topbar-main --><!-- MENU Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class="has-submenu">
                        <a href="{{ route('app.index') }}">
                            <i class="dripicons-device-desktop"></i>Dashboard
                        </a>
                    </li>
                    <li class="has-submenu">
                        <a href="{{ route('app.buat_surat') }}">
                            <i class="dripicons-device-desktop"></i>Buat Surat
                        </a>
                    </li>
                    <li class="has-submenu">
                        <a href="{{ route('app.layanan') }}">
                            <i class="dripicons-device-desktop"></i>Lihat Progress Layanan
                        </a>
                    </li>
                    <li class="has-submenu">
                        <a href="{{ route('home.index') }}">
                            Home
                        </a>
                    </li>
                </ul>
                <!-- End navigation menu -->
            </div>
            <!-- end #navigation -->
        </div>
        <!-- end container -->
    </div>
    <!-- end navbar-custom -->
</header>
