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

                                        <li class="dropdown active">
                                            <a href="{{ route('index') }}">Нүүр хуудас</a>
                                        </li>

                                        <li class="dropdown">
                                            <a href="{{ route('articles') }}">Өгүүллүүд</a>
                                        </li>

                                        <li class="dropdown">
                                            <a href="{{ route('editions') }}">Дугаарууд</a>
                                        </li> <!-- end portfolio -->

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

                                        <li id="mobile-search" class="hidden-lg hidden-md">
                                            <form method="get" class="mobile-search">
                                                <input type="search" class="form-control" placeholder="Хайх утга...">
                                                <button type="submit" class="search-button">
                                                    <i class="ui-search"></i>
                                                </button>
                                            </form>
                                        </li>

                                    </ul> <!-- end menu -->
                                </div> <!-- end collapse -->
                            </div> <!-- end col -->

                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div> <!-- end navigation -->
            </nav> <!-- end navbar -->
        </header>

        <div class="content-wrapper oh">

            <!-- Revolution Slider -->
            <section>
                <div class="rev_slider_wrapper" id="home">
                    <div class="rev_slider" id="slider4">
                        <ul>
                            <!-- SLIDE 1 -->
                            <li data-fstransition="fade" data-transition="fade" data-slotamount="1"
                                data-masterspeed="1000" data-delay="5000" data-title="Creative Minimalism">

                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('public_files/img/revolution/melbourne_slide_1.jpg') }}" alt=""
                                    data-bgrepeat="no-repeat" data-bgfit="cover" data-bgparallax="7"
                                    class="rev-slidebg">

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption hero-text alt-font" data-x="center" data-y="center"
                                    data-textAlign="center" data-voffset="[-85]" data-hoffset="[0]"
                                    data-fontsize="[60,50,40,30]" data-lineheight="[60,50,40,40]"
                                    data-fontweight="700" data-width="[none,none,none,400]"
                                    data-whitespace="[nowrap, nowrap, nowrap, normal]" data-transform_idle="o:1;s:700"
                                    data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                                    data-transform_out="opacity:0;s:1000;e:Power2.easeInOut;" data-start="1000"
                                    data-elementdelay="0.01">
                                    Right ideas. Real Results. All in One
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption medium-text" data-x="center" data-y="center"
                                    data-textAlign="center" data-voffset="[-21,-21,-21,-10]" data-fontsize="[18]"
                                    data-lineheight="[24]" data-width="[none,none,none,400]"
                                    data-whitespace="[nowrap, nowrap, nowrap, normal]" data-transform_idle="o:1;s:700"
                                    data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                                    data-transform_out="opacity:0;s:1000;e:Power2.easeInOut;" data-start="1000"
                                    data-elementdelay="0.01">
                                    Gaze is a simple and elegant template with tons of features. Based on Bootstrap
                                    framework.
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption medium-text" data-x="center" data-y="center"
                                    data-textAlign="center" data-voffset="[12,12,12,40]" data-fontsize="[18]"
                                    data-lineheight="[24]" data-width="[none,none,none,400]"
                                    data-whitespace="[nowrap, nowrap, nowrap, normal]" data-transform_idle="o:1;s:700"
                                    data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                                    data-transform_out="opacity:0;s:1000;e:Power2.easeInOut;" data-start="1000"
                                    data-elementdelay="0.01">
                                    It is retina ready, easy to customize and has amazing support.
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme" data-x="center" data-y="center"
                                    data-voffset="[83, 83, 83, 100]" data-hoffset="[-85,-85,-85,-80]"
                                    data-lineheight="[40]" data-transform_idle="o:1;s:500"
                                    data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                                    data-transform_out="opacity:0;s:1000;e:Power2.easeInOut;" data-start="1200"
                                    data-elementdelay="0.01" data-linktoslide="next"><a href='#'
                                        class='btn btn-lg btn-color'><span>Buy Theme</span></a>
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption tp-resizeme" data-x="center" data-y="center"
                                    data-voffset="[83,83,83,100]" data-hoffset="[85,85,85,80]" data-lineheight="[40]"
                                    data-transform_idle="o:1;s:500"
                                    data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                                    data-transform_out="opacity:0;s:1000;e:Power2.easeInOut;" data-start="1200"
                                    data-elementdelay="0.01" data-linktoslide="next"><a href='#'
                                        class='btn btn-lg btn-transparent'><span>Learn More</span></a>
                                </div>
                            </li>

                            <!-- SLIDE 2 -->
                            <li data-fstransition="fade" data-transition="fade" data-slotamount="1"
                                data-masterspeed="1000" data-delay="5000" data-title="Creative Minimalism">

                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('public_files/img/revolution/melbourne_slide_2.jpg' )}}" alt=""
                                    data-bgrepeat="no-repeat" data-bgfit="cover" data-bgparallax="7"
                                    class="rev-slidebg">

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption hero-text alt-font" data-x="center" data-y="center"
                                    data-textAlign="center" data-fontweight="700"
                                    data-voffset="[-117,-117,-117,-100]" data-fontsize="[60,50,40,30]"
                                    data-transform_idle="o:1;s:700"
                                    data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                                    data-transform_out="opacity:0;s:1000;e:Power2.easeInOut;" data-start="1000"
                                    data-elementdelay="0.01">
                                    Amazing Flexibility
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption hero-text alt-font" data-x="center" data-y="center"
                                    data-textAlign="center" data-fontweight="700" data-voffset="[-48,-48,-48,-58]"
                                    data-fontsize="[60,50,40,30]" data-transform_idle="o:1;s:700"
                                    data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                                    data-transform_out="opacity:0;s:1000;e:Power2.easeInOut;" data-start="1050"
                                    data-elementdelay="0.01">
                                    With Great Performance
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption medium-text" data-x="center" data-y="center"
                                    data-textAlign="center" data-voffset="[16,16,16,-5]"
                                    data-fontsize="[18,18,18,18]" data-lineheight="[24]"
                                    data-width="[none,none,none,400]"
                                    data-whitespace="[nowrap, nowrap, nowrap, normal]" data-transform_idle="o:1;s:700"
                                    data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                                    data-transform_out="opacity:0;s:1000;e:Power2.easeInOut;" data-start="1200"
                                    data-elementdelay="0.01">
                                    Gaze is a simple and elegant template with tons of features. Based on Bootstrap
                                    framework.
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption medium-text" data-x="center" data-y="center"
                                    data-textAlign="center" data-voffset="[52,52,52,45]"
                                    data-fontsize="[18,18,18,18]" data-lineheight="[24]"
                                    data-width="[none,none,none,400]"
                                    data-whitespace="[nowrap, nowrap, nowrap, normal]" data-transform_idle="o:1;s:700"
                                    data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                                    data-transform_out="opacity:0;s:1000;e:Power2.easeInOut;" data-start="1300"
                                    data-elementdelay="0.01">
                                    It is retina ready, easy to customize and has amazing support.
                                </div>

                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption tp-resizeme" data-x="center" data-y="center"
                                    data-lineheight="[40]" data-voffset="[123,123,123,110]"
                                    data-transform_idle="o:1;s:500"
                                    data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                                    data-transform_out="opacity:0;s:1000;e:Power2.easeInOut;" data-start="1400"
                                    data-elementdelay="0.01" data-linktoslide="next"><a href='#'
                                        class='btn btn-lg btn-transparent'><span>Purchase Now</span></a>
                                </div>

                            </li>

                            <!-- SLIDE 3 -->
                            <li data-fstransition="fade" data-transition="fade" data-slotamount="1"
                                data-masterspeed="1000" data-delay="5000" data-title="Creative Minimalism">

                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('public_files/img/revolution/melbourne_slide_3.jpg')}}" alt=""
                                    data-bgrepeat="no-repeat" data-bgfit="cover" data-bgparallax="7"
                                    class="rev-slidebg">

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption hero-text alt-font bold" data-x="center" data-y="center"
                                    data-textAlign="center" data-voffset="[-69,-69,-69,-69]"
                                    data-fontsize="[90,80,70,40]" data-transform_idle="o:1;s:700"
                                    data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                                    data-transform_out="opacity:0;s:1000;e:Power2.easeInOut;" data-start="1000"
                                    data-elementdelay="0.01">
                                    Unleash The Power
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption medium-text" data-x="center" data-y="center"
                                    data-textAlign="center" data-voffset="[7,7,7,-5]" data-fontsize="[22,22,20,18]"
                                    data-width="[none,none,none,300]"
                                    data-whitespace="[nowrap, nowrap, nowrap, normal]" data-transform_idle="o:1;s:700"
                                    data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                                    data-transform_out="opacity:0;s:1000;e:Power2.easeInOut;" data-start="1100"
                                    data-elementdelay="0.01">
                                    Gaze is a simple and elegant template with tons of features.
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme" data-x="center" data-y="center"
                                    data-lineheight="[40]" data-voffset="[92,92,92,70]"
                                    data-transform_idle="o:1;s:500"
                                    data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                                    data-transform_out="opacity:0;s:1000;e:Power2.easeInOut;" data-start="1200"
                                    data-elementdelay="0.01" data-linktoslide="next"><a href='#'
                                        class='btn btn-lg btn-color'><span>Purchase Now</span></a>
                                </div>

                            </li>
                        </ul>

                    </div>
                </div>
            </section> <!-- end rev slider -->

            <!-- Icon Boxes -->
            <section class="section-wrap icon-boxes pb-100 pb-mdm-40">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 mb-40">
                            <div class="service-item-box style-4">
                                <a href="#" class="icon-holder">
                                    <i class="icon-Finger-Print"></i>
                                </a>
                                <div class="service-text">
                                    <h3>Awesome Features</h3>
                                    <p>Gaze is a simple and elegant template with tons of features. Lorem ipsum dolor
                                        sit amet,
                                        consectetur. Powered with WordPress.</p>
                                </div>
                            </div>
                        </div> <!-- end service item -->

                        <div class="col-sm-4 mb-40">
                            <div class="service-item-box style-4">
                                <a href="#" class="icon-holder">
                                    <i class="icon-Drag-Drop"></i>
                                </a>
                                <div class="service-text">
                                    <h3>Drag &amp; Drop Builder</h3>
                                    <p>Gaze is a simple and elegant template with tons of features. Lorem ipsum dolor
                                        sit amet,
                                        consectetur. Powered with WordPress.</p>
                                </div>
                            </div>
                        </div> <!-- end service item -->

                        <div class="col-sm-4 mb-40">
                            <div class="service-item-box style-4">
                                <a href="#" class="icon-holder">
                                    <i class="icon-Headset-1"></i>
                                </a>
                                <div class="service-text">
                                    <h3>Customers Support</h3>
                                    <p>Gaze is a simple and elegant template with tons of features. Lorem ipsum dolor
                                        sit amet,
                                        consectetur. Powered with WordPress.</p>
                                </div>
                            </div>
                        </div> <!-- end service item -->

                    </div>
                </div>
            </section> <!-- end icon boxes -->

            <!-- Promo -->
            <section class="section-wrap pb-0 bg-light">
                <div class="container">
                    <div class="row heading-row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <h2 class="heading large">We Make Awesome Themes</h2>
                            <p class="subheading style-2">Gaze is a simple and elegant template with tons of features.
                                Lorem ipsum
                                dolor sit amet, consectetur. It is retina ready, easy to cuztomize and has amazing
                                support. Get this
                                perfect theme right now.</p>
                        </div>
                    </div>
                    <div class="text-center animated-bottom">
                        <img src="img/devices.png" alt="">
                    </div>
                </div>
            </section> <!-- end promo -->

            <!-- Counters -->
            <section class="section-wrap counters bg-parallax pb-100 pb-mdm-40">
                <div class="parallax-wrap">
                    <div class="parallax-inner" data-stellar-background-ratio="0.8"></div>
                </div>
                <div class="container">
                    <div class="row">

                        <div class="col-sm-3 col-xs-6 mb-40">
                            <div class="statistic text-center">
                                <span class="statistic-timer" data-from="0" data-to="968">968</span>
                                <h5 class="counter-text">хэвлэгдсэн дугаар</h5>
                            </div>
                        </div>

                        <div class="col-sm-3 col-xs-6 mb-40">
                            <div class="statistic text-center">
                                <span class="statistic-timer" data-from="0" data-to="1357">1357</span>
                                <h5 class="counter-text">гаруй өгүүлэл</h5>
                            </div>
                        </div>

                        <div class="col-sm-3 col-xs-6 mb-40">
                            <div class="statistic text-center">
                                <span class="statistic-timer" data-from="0" data-to="30">30</span>
                                <h5 class="counter-text">жилийн турш</h5>
                            </div>
                        </div>

                        <div class="col-sm-3 col-xs-6 mb-40">
                            <div class="statistic text-center">
                                <span class="statistic-timer" data-from="0" data-to="972">972</span>
                                <h5 class="counter-text">authors</h5>
                            </div>
                        </div>

                    </div>
                </div>
            </section> <!-- end Counters -->

            <!-- Feature Boxes -->
            <section class="section-wrap bg-light pb-100 pb-mdm-40">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 animated-from-left mb-40">
                            <img src="img/feature_1.jpg" class="img-fw" alt="">
                            <div class="feature-box text-center">
                                <h4>Amazing Support Team</h4>
                                <p>Gaze is a simple and elegant template with tons of features. Lorem ipsum dolor sit
                                    amet, consectetur.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 animated-from-left mb-40">
                            <img src="img/feature_2.jpg" class="img-fw" alt="">
                            <div class="feature-box text-center">
                                <h4>Fully Documented</h4>
                                <p>Gaze is a simple and elegant template with tons of features. Lorem ipsum dolor sit
                                    amet, consectetur.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 animated-from-left mb-40">
                            <img src="img/feature_3.jpg" class="img-fw" alt="">
                            <div class="feature-box text-center">
                                <h4>Powerful Options</h4>
                                <p>Gaze is a simple and elegant template with tons of features. Lorem ipsum dolor sit
                                    amet, consectetur.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- end feature boxes -->

            <!-- CTA -->
            <section class="call-to-action bg-color">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9 col-xs-12 sm-text-center">
                            <h3 class="white">Are you ready to enjoy? Grab this perfect theme now</h3>
                        </div>
                        <div class="col-sm-3 col-xs-12 cta-button text-right sm-text-center">
                            <a href="#" class="btn btn-lg btn-white">
                                <span>Purchase Now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section> <!-- end CTA -->

            <!-- Promo Features -->
            <section class="section-wrap promo-features bg-img">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 animated-left">
                            <h2 class="promo-features-title">Why Choose Us?</h2>
                            <p class="lead">Fully Responsive WordPress Theme. We Make Amazing Support.<br>Build Your
                                Website Easy With
                                Page Builder.</p>
                            <ul class="features-list mt-40">
                                <li>
                                    <i class="ui-ok-circle"></i>
                                    <span>10 Years on the Global Market</span>
                                </li>
                                <li>
                                    <i class="ui-ok-circle"></i>
                                    <span>167 Projects Completed</span>
                                </li>
                                <li>
                                    <i class="ui-ok-circle"></i>
                                    <span>1000+ Happy Clients</span>
                                </li>
                                <li>
                                    <i class="ui-ok-circle"></i>
                                    <span>Tons of Shortcodes</span>
                                </li>
                                <li>
                                    <i class="ui-ok-circle"></i>
                                    <span>Clean and Fresh Style</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section> <!-- end promo features -->

            <!-- Partners -->
            <section class="section-wrap partners pb-60">
                <div class="container">

                    <div class="row heading-row mb-30">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <h2 class="heading large">Happy Partners</h2>
                            <p class="subheading style-2">Gaze is a simple and elegant template with tons of features.
                                Lorem ipsum
                                dolor sit amet, consectetur. It is retina ready, easy to cuztomize and has amazing
                                support. Get this
                                perfect theme right now.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div id="owl-partners" class="owl-carousel owl-theme">
                            <div class="item">
                                <a href="#">
                                    <img src="img/partners/partner_logo_dark_1.png" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="img/partners/partner_logo_dark_2.png" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="img/partners/partner_logo_dark_3.png" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="img/partners/partner_logo_dark_4.png" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="img/partners/partner_logo_dark_5.png" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="img/partners/partner_logo_dark_6.png" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="img/partners/partner_logo_dark_1.png" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="img/partners/partner_logo_dark_2.png" alt="">
                                </a>
                            </div>

                        </div> <!-- end carousel -->

                    </div>
                </div>
            </section> <!-- end partners -->

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
                                    <li><a href="{{ route('articles') }}">Өгүүлүүд</a></li>
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