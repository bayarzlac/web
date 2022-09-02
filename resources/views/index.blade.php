@extends('layouts.master')
@section('public')
    <!-- Revolution Slider -->
    <section>
        <div class="rev_slider_wrapper" id="home">
            <div class="rev_slider" id="slider4">
                <ul>
                    <!-- SLIDE 1 -->
                    <li data-fstransition="fade" data-transition="fade" data-slotamount="1"
                        data-masterspeed="1000" data-delay="5000">

                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('public_files/img/revolution/slide1.jpg') }}" alt=""
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
                            Боловсрол судлал сэтгүүлд өгүүлэл нийтлүүлэх
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption medium-text" data-x="center" data-y="center"
                            data-textAlign="center" data-voffset="[-21,-21,-21,-10]" data-fontsize="[18]"
                            data-lineheight="[24]" data-width="[none,none,none,400]"
                            data-whitespace="[nowrap, nowrap, nowrap, normal]" data-transform_idle="o:1;s:700"
                            data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                            data-transform_out="opacity:0;s:1000;e:Power2.easeInOut;" data-start="1000"
                            data-elementdelay="0.01">
                            Боловсрол судлал сэтгүүлийн цахим системээр дамжуулан өгүүллээ илгээдэг боллоо
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-resizeme" data-x="center" data-y="center"
                            data-voffset="[83, 83, 83, 100]" data-hoffset="[-85,-85,-85,-80]"
                            data-lineheight="[40]" data-transform_idle="o:1;s:500"
                            data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                            data-transform_out="opacity:0;s:1000;e:Power2.easeInOut;" data-start="1200"
                            data-elementdelay="0.01" data-linktoslide="next"><a href='{{ route('user.signup') }}'
                                class='btn btn-lg btn-color'><span>Бүртгүүлэх</span></a>
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption tp-resizeme" data-x="center" data-y="center"
                            data-voffset="[83,83,83,100]" data-hoffset="[85,85,85,80]" data-lineheight="[40]"
                            data-transform_idle="o:1;s:500"
                            data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                            data-transform_out="opacity:0;s:1000;e:Power2.easeInOut;" data-start="1200"
                            data-elementdelay="0.01" data-linktoslide="next"><a href='{{ route('login') }}'
                                class='btn btn-lg btn-transparent'><span>Нэвтрэх</span></a>
                        </div>
                    </li>

                    <!-- SLIDE 2 -->
                    <li data-fstransition="fade" data-transition="fade" data-slotamount="1"
                        data-masterspeed="1000" data-delay="5000">

                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('public_files/img/revolution/slide2.jpg' )}}" alt=""
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
                            Боловсрол судлал сэтгүүлийн
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption hero-text alt-font" data-x="center" data-y="center"
                            data-textAlign="center" data-fontweight="700" data-voffset="[-48,-48,-48,-58]"
                            data-fontsize="[60,50,40,30]" data-transform_idle="o:1;s:700"
                            data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                            data-transform_out="opacity:0;s:1000;e:Power2.easeInOut;" data-start="1050"
                            data-elementdelay="0.01">
                            цахим хувилбар захиалах
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
                            Шинээр гарч байгаа дугааруудын цахим хувилбарыг улирлаар захиалах, өмнөх дугааруудаас худалдан авах боломжийг танд олгож байна.
                        </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption tp-resizeme" data-x="center" data-y="center"
                            data-lineheight="[40]" data-voffset="[123,123,123,110]"
                            data-transform_idle="o:1;s:500"
                            data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                            data-transform_out="opacity:0;s:1000;e:Power2.easeInOut;" data-start="1400"
                            data-elementdelay="0.01" data-linktoslide="next"><a href='#'
                                class='btn btn-lg btn-transparent'><span>Захиалах</span></a>
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
@endsection