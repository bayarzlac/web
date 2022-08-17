<!DOCTYPE html>
<html lang="en">
<head>
    <title>Боловсрол судлал сэтгүүл</title>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,600,700%7COpen+Sans:400,400i,700%7CNoto+Serif:400i'
        rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('public_files/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public_files/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('public_files/revolution/css/settings.css') }}" />
    <link rel="stylesheet" href="{{ asset('public_files/css/font-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('public_files/css/rev-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('public_files/css/sliders.css') }}" />
    <link rel="stylesheet" href="{{ asset('public_files/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('public_files/css/colors/pink.css') }}" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('public_files/img/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('public_files/img/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('public_files/img/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('public_files/img/apple-touch-icon-114x114.png') }}">
</head>

<body class="relative raleway grid-1440">
    <!-- Preloader -->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Sidenav -->
    <section class="sidenav">
        <img class="logo-dark mb-30" src="{{ asset('public_files/img/logo_dark.png') }}" alt="logo">
        <p>We possess within us two minds. So far I have written only of the conscious mind. I would now like to
            introduce
            you to your second mind, the hidden and mysterious subconscious.</p>
        <img src="{{ asset('public_files/img/sidenav_img.jpg') }}" class="sidenav-img" alt="">
        <h6 class="mt-40">Get in Touch</h6>
        <address class="info-address">Philippines, Afela inc.<br> Talay st. 65, PO Box 6200 </address>
        <p>Phone: <a href="tel:+1-888-1554-456-123">+ 1-888-1554-456-123</a></p>
        <p>Email: <a href="mailto:themesupport@gmail.com">themesupport@gmail.com</a></p>
        <p>Fax: +63 918 4084 694</p>
        <div class="social-icons nobase dark mt-40">
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-vimeo"></i></a>
        </div>
        <a href="#" id="sidenav-close">
            <i class="ui-close"></i>
        </a>
    </section> <!-- end sidenav -->
    <main class="main-wrapper">
        <header class="nav-type-3">
            <!-- Top Bar -->
            <div class="top-bar hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="top-bar-links">
                            <ul class="col-sm-7">
                                <li class="top-bar-phone">
                                    <i class="fa fa-phone"></i><a href="tel:+976-99147780">+ 976-99147780</a>
                                </li>
                                <li class="top-bar-email">
                                    <i class="fa fa-envelope"></i><a
                                        href="mailto:info@bolovsrolsudlal.mn">info@bolovsrolsudlal.mn</a>
                                </li>
                            </ul>

                            <div class="col-sm-5 text-right">
                                <a href="{{ route('login') }}"><i class="fa fa-user"></i> Нэвтрэх</a> | 
                                <a href="{{ route('user.signup') }}"><i class="fa fa-register"></i> Бүртгүүлэх</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div> <!-- end top bar -->
            <!-- Fullscreen search -->
            <div class="search-wrap">
                <div class="search-inner">
                    <div class="search-cell">
                        <form method="get">
                            <div class="search-field-holder">
                                <input type="search" class="form-control main-search-input" placeholder="Search for">
                                <i class="ui-close search-close" id="search-close"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end fullscreen search -->
            <nav class="navbar navbar-static-top">
                <div class="navigation" id="sticky-nav">
                    <div class="container relative">
                        <div class="row">
                            <div class="navbar-header">
                                <!-- Logo -->
                                <div class="logo-container">
                                    <div class="logo-wrap">
                                        <a href="index-ny.html">
                                            <img class="logo-dark" src="{{ asset('public_files/img/logo_dark.png') }}" alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div> <!-- end navbar-header -->
                            <div class="nav-wrap right">
                                <div class="collapse navbar-collapse text-center" id="navbar-collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="dropdown">
                                            <a href="{{ route('index') }}">Нүүр хуудас</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{ route('papers') }}">Өгүүллүүд</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{ route('editions') }}">Дугаарууд</a>
                                        </li> 
                                        <li class="dropdown">
                                            <a href="{{ route('about') }}">Сэтгүүлийн тухай</a>
                                        </li>
                                        <!-- Nav right -->
                                        <li class="nav-right hidden-sm hidden-xs">
                                            <ul>
                                                <li class="nav-search-wrap hidden-sm hidden-xs">
                                                    <a href="#" class="nav-search search-trigger">
                                                        <i class="ui-search"></i>
                                                    </a>
                                                </li>
                                                <li class="nav-icon-wrap hidden-sm hidden-xs">
                                                    <div id="nav-icon">
                                                        <div class="nav-icon-inner">
                                                            <a href="#" id="nav-icon-trigger"
                                                                class="nav-icon-trigger">
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        {{-- <li id="mobile-search" class="hidden-lg hidden-md">
                                            <form method="get" class="mobile-search">
                                                <input type="search" class="form-control" placeholder="Хайх утга...">
                                                <button type="submit" class="search-button">
                                                    <i class="ui-search"></i>
                                                </button>
                                            </form>
                                        </li> --}}
                                    </ul> <!-- end menu -->
                                </div> <!-- end collapse -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div> <!-- end navigation -->
            </nav> <!-- end navbar -->
        </header>
        <div class="content-wrapper oh">
            
            @yield('public')

            <!-- Footer Type-4 -->
            <footer class="footer footer-type-4">
                <div class="container">
                    <div class="footer-widgets pb-mdm-20">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="widget footer-logo">
                                    <img src="img/logo_alt.png" alt="">
                                </div>
                            </div> <!-- end about us -->
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="widget footer-about-us">
                                    <h5 class="widget-title">Боловсрол судлал сэтгүүл</h5>
                                    <p class="mb-0">Our Theme is a very slick and clean e-commerce template with
                                        endless possibilities.
                                        Creating an awesome website with this Theme.</p>
                                </div>
                            </div> <!-- end about us -->
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="widget footer-get-in-touch">
                                    <h5 class="widget-title">Холбоо барих</h5>
                                    <p>Утас: + 1-888-1554-456-123</p>
                                    <p>Email: info@bolovsrolsudlal.mn</p>
                                    <div class="footer-socials">
                                        <div class="social-icons nobase">
                                            <a href="https://www.facebook.com/bolovsrolsudlalsetguul"><i class="fa fa-facebook"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end stay in touch -->
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="widget footer-get-in-touch">
                                    <h5 class="widget-title">Хаяг байршил</h5>
                                    <address class="footer-address mb-0">Улаанбаатар хот<br>Сүхбааатар дүүрэг<br>8-р хороо, Энхтайваны өргөн чөлөө<br>
                                        Багшийн хөгжлийн ордон, 301 тоот</address>
                                </div>
                            </div> <!-- end address -->
                        </div>
                    </div>
                </div> <!-- end container -->
                <div class="bottom-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 copyright sm-text-center">
                                <span>
                                    &copy; Боловсрол судлал сэтгүүл
                                </span>
                            </div>
                            <div class="col-sm-6">
                                <ul class="bottom-footer-links text-right sm-text-center">
                                    <li><a href="{{ route('index') }}">Нүүр хуудас</a></li>
                                    <li><a href="{{ route('papers') }}">Өгүүлүүд</a></li>
                                    <li><a href="{{ route('editions') }}">Дугаарууд</a></li>
                                    <li><a href="{{ route('about') }}">Сэтгүүлийн тухай</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- end bottom footer -->
            </footer> <!-- end footer -->
            <div id="back-to-top">
                <a href="#top"><i class="fa fa-angle-up"></i></a>
            </div>
        </div> <!-- end content wrapper -->
    </main> <!-- end main wrapper -->

    <!-- jQuery Scripts -->
    <script type="text/javascript" src="{{ asset('public_files/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public_files/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public_files/js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public_files/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public_files/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public_files/js/rev-slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public_files/js/scripts.js') }}"></script>

    <script type="text/javascript" src="{{ asset('public_files/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public_files/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public_files/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public_files/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public_files/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public_files/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public_files/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public_files/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public_files/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
</body>
</html>