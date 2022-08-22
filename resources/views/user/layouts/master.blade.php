<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Sleek - Admin Dashboard Template</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('user_assets/plugins/toaster/toastr.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('user_assets/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
    <link href="{{ asset('user_assets/plugins/flag-icons/css/flag-icon.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('user_assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
    <link href="{{ asset('user_assets/plugins/ladda/ladda.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('user_assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('user_assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{ asset('user_assets/css/sleek.css') }}" />

    <!-- FAVICON -->
    {{-- <link href="{{ asset('user_assets/img/favicon.png') }}" rel="shortcut icon" /> --}}
    <link rel="shortcut icon" href="{{ asset('public_files/img/favicon.ico') }}">
    <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>


<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>
    <div class="mobile-sticky-body-overlay"></div>
    <div class="wrapper">
        <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
                <!-- Aplication Brand -->
                <div class="app-brand">
                    <a href="{{ route('user') }}">
                        <img src="{{ asset('user_assets/logo1.png') }}" width="30" />
                        <span class="brand-name">Боловсрол судлал</span>
                    </a>
                </div>
                <!-- begin sidebar scrollbar -->
                <div class="sidebar-scrollbar">

                    <!-- sidebar menu -->
                    <ul class="nav sidebar-inner" id="sidebar-menu">
                        <li class="{{ request()->is('user') ? 'active' : '' }}">
                            <a class="sidenav-item-link" href="{{ route('user') }}">
                                <i class="mdi mdi-view-dashboard-outline"></i>
                                <span class="nav-text">Хянах самбар</span> <b class="caret"></b>
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#ui-elements" aria-expanded="false" aria-controls="ui-elements">
                                <i class="mdi mdi-folder-multiple-outline"></i>
                                <span class="nav-text">Захиалга</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="ui-elements" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li>
                                        <a class="sidenav-item-link" href="introduction.html">
                                            <span class="nav-text">Introduction</span>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#documentation" aria-expanded="false" aria-controls="documentation">
                                <i class="mdi mdi-book-open-page-variant"></i>
                                <span class="nav-text">Өгүүлэл нийтлэх</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="documentation" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li>
                                        <a class="sidenav-item-link" href="{{ route('user.article.new') }}">
                                            <span class="nav-text">Өгүүлэл илгээх</span>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>

                <hr class="separator" />

                <div class="sidebar-footer">
                    <div class="sidebar-footer-content">
                        <h6 class="text-uppercase">
                            Cpu Uses <span class="float-right">40%</span>
                        </h6>
                        <div class="progress progress-xs">
                            <div class="progress-bar active" style="width: 40%;" role="progressbar"></div>
                        </div>
                        <h6 class="text-uppercase">
                            Memory Uses <span class="float-right">65%</span>
                        </h6>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-warning" style="width: 65%;" role="progressbar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <div class="page-wrapper">
            <!-- Header -->
            <header class="main-header " id="header">
                <nav class="navbar navbar-static-top navbar-expand-lg">
                    <!-- Sidebar toggle button -->
                    <button id="sidebar-toggler" class="sidebar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <!-- search form -->
                    <div class="search-form d-none d-lg-inline-block">
                        <div class="input-group">
                            <button type="button" name="search" id="search-btn" class="btn btn-flat">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <input type="text" name="query" id="search-input" class="form-control"
                                placeholder="'button', 'chart' etc." autofocus autocomplete="off" />
                        </div>
                        <div id="search-results-container">
                            <ul id="search-results"></ul>
                        </div>
                    </div>

                    <div class="navbar-right ">
                        <ul class="nav navbar-nav">
                            <li class="dropdown notifications-menu">
                                <button class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="mdi mdi-bell-outline"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-header">Танд 5 мэдэгдэл байна.</li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-account-plus"></i> Бүртгэл үүслээ
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 10 AM</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-footer">
                                        <a class="text-center" href="#"> Бүгдийг харах </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- User Account -->
                            <li class="dropdown user-menu">
                                <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <img src="user_assets/img/user/user.png" class="user-image" alt="User Image" />
                                    <span
                                        class="d-none d-lg-inline-block">{{ Auth::user()->last_name . ' ' . Auth::user()->first_name }}</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <!-- User image -->
                                    <li class="dropdown-header">
                                        <img src="user_assets/img/user/user.png" class="img-circle"
                                            alt="User Image" />
                                        <div class="d-inline-block">
                                            {{ Auth::user()->first_name }}
                                            <small class="pt-1">{{ Auth::user()->email }}</small>
                                        </div>
                                    </li>
                                    @if (Auth::user()->role == 'Admin')
                                        <li>
                                            <a href="{{ route('admin') }}">
                                                <i class="mdi mdi-settings"></i>
                                                Удирдлагын хэсэг
                                            </a>
                                        </li>
                                    @endif
                                    <li>
                                        <a href="profile.html">
                                            <i class="mdi mdi-account"></i> My Profile
                                        </a>
                                    </li>

                                    <li class="dropdown-footer">
                                        <a href="{{ route('user.signout') }}"> <i class="mdi mdi-logout"></i> Гарах
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <div class="content-wrapper">
                <div class="content">

                    @yield('user')

                </div>
            </div>
            <footer class="footer mt-auto">
                <div class="copyright bg-white">
                    <p>
                        &copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard Bootstrap Template by
                        <a class="text-primary" href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
                    </p>
                </div>
                <script>
                    var d = new Date();
                    var year = d.getFullYear();
                    document.getElementById("copy-year").innerHTML = year;
                </script>
            </footer>

        </div>
    </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
    <script src="{{ asset('user_assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('user_assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user_assets/plugins/toaster/toastr.min.js') }}"></script>
    <script src="{{ asset('user_assets/plugins/slimscrollbar/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('user_assets/plugins/charts/Chart.min.js') }}"></script>
    <script src="{{ asset('user_assets/plugins/ladda/spin.min.js') }}"></script>
    <script src="{{ asset('user_assets/plugins/ladda/ladda.min.js') }}"></script>
    <script src="{{ asset('user_assets/plugins/jquery-mask-input/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('user_assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('user_assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('user_assets/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
    <script src="{{ asset('user_assets/plugins/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('user_assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('user_assets/plugins/jekyll-search.min.js') }}"></script>
    <script src="{{ asset('user_assets/js/sleek.js') }}"></script>
    <script src="{{ asset('user_assets/js/chart.js') }}"></script>
    <script src="{{ asset('user_assets/js/date-range.js') }}"></script>
    <script src="{{ asset('user_assets/js/map.js') }}"></script>
    <script src="{{ asset('user_assets/js/custom.js') }}"></script>
</body>

</html>
