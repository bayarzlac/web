@extends('layouts.master')
@section('public')
    <!-- Page Title -->
    <section class="page-title text-center" style="background-image: url({{ asset('public_files/img/page_title/blog_title_bg.jpg') }});">
        <div class="container relative clearfix">
            <div class="title-holder">
                <div class="title-text">
                    <h1 class="uppercase">Дугаарууд</h1>
                </div>
            </div>
        </div>
    </section> <!-- end page title -->

    <!-- Blog Masonry -->
    <section class="section-wrap-sm blog-masonry bg-light">
        <div class="container relative">
            <div class="row masonry blog-content">

                <!-- standard post -->
                <div class="col-md-4 col-sm-6 col-xs-12 masonry-item">
                    <article class="entry-item">
                        <div class="entry-img hover-scale">
                            <a href="blog-single.html">
                                <img src="img/blog/blog_1.jpg" alt="">
                            </a>
                        </div>

                        <div class="entry-wrap">
                            <div class="entry">
                                <ul class="entry-meta">
                                    <li class="entry-date">
                                        <i class="fa fa-calendar-o"></i>
                                        <a href="#">19 July, 2015</a>
                                    </li>
                                    <li class="entry-category">
                                        <i class="fa fa-folder-open"></i>
                                        <a href="#">Fashion</a>
                                    </li>
                                </ul>
                                <h2 class="entry-title">
                                    <a href="blog-single.html">4 Ways Advertising Agencies Can Protect Themselves From Click
                                        Fraud.</a>
                                </h2>
                                <div class="entry-content">
                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amadea is a simple and
                                        elegant template with tons of features. Lorem ipsum dolor sit amet, consectetur.</p>
                                    <a href="blog-single.html" class="read-more sliding-link">Read More</a>
                                </div>
                            </div>
                        </div>
                    </article> <!-- end standard post -->
                </div> <!-- end col -->

                <!-- gallery post -->
                <div class="col-md-4 col-sm-6 col-xs-12 masonry-item">
                    <article class="entry-item">
                        <div class="entry-slider">
                            <div class="flexslider light-arrows" id="flexslider">
                                <ul class="slides clearfix">
                                    <li>
                                        <a href="blog-single.html">
                                            <img src="img/blog/blog_2.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-single.html">
                                            <img src="img/blog/blog_3.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-single.html">
                                            <img src="img/blog/blog_4.jpg" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div> <!-- end slider -->

                        <div class="entry-wrap">
                            <div class="entry">
                                <ul class="entry-meta">
                                    <li class="entry-date">
                                        <i class="fa fa-calendar-o"></i>
                                        <a href="#">15 July, 2015</a>
                                    </li>
                                    <li class="entry-category">
                                        <i class="fa fa-folder-open"></i>
                                        <a href="#">Business</a>
                                    </li>
                                </ul>
                                <h2 class="entry-title">
                                    <a href="blog-single.html">Gallery blog post. Italian fashion</a>
                                </h2>
                                <div class="entry-content">
                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amadea is a simple and
                                        elegant template with tons of features. Lorem ipsum dolor sit amet, consectetur.</p>
                                    <a href="blog-single.html" class="read-more sliding-link">Read More</a>
                                </div>
                            </div>
                        </div>
                    </article> <!-- end gallery post -->
                </div>

                <!-- video post -->
                <div class="col-md-4 col-sm-6 col-xs-12 masonry-item">
                    <article class="entry-item">
                        <div class="entry-video video-wrap">
                            <iframe width="640" height="360" src="https://player.vimeo.com/video/181027959?badge=0"
                                allowfullscreen></iframe>
                        </div>

                        <div class="entry-wrap">
                            <div class="entry">
                                <ul class="entry-meta">
                                    <li class="entry-date">
                                        <i class="fa fa-calendar-o"></i>
                                        <a href="#">14 July, 2015</a>
                                    </li>
                                    <li class="entry-category">
                                        <i class="fa fa-folder-open"></i>
                                        <a href="#">World</a>
                                    </li>
                                </ul>
                                <h2 class="entry-title">
                                    <a href="blog-single.html">This is awesome Youtube video post.</a>
                                </h2>
                                <div class="entry-content">
                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amadea is a simple and
                                        elegant template with tons of features. Lorem ipsum dolor sit amet, consectetur.</p>
                                    <a href="blog-single.html" class="read-more sliding-link">Read More</a>
                                </div>
                            </div>
                        </div>
                    </article> <!-- end video post -->
                </div>

                <!-- blockquote post -->
                <div class="col-md-4 col-sm-6 col-xs-12 masonry-item">
                    <article class="entry-item">
                        <div class="entry blockquote">
                            <blockquote class="blockquote-style-1">
                                <ul class="entry-meta">
                                    <li class="entry-date">
                                        <i class="fa fa-calendar-o"></i>
                                        <a href="#">12 July, 2015</a>
                                    </li>
                                    <li class="entry-category">
                                        <i class="fa fa-folder-open"></i>
                                        <a href="#">Business</a>
                                    </li>
                                </ul>
                                <p>
                                    <a href="blog-single.html">Incredible change happens in your life when you decide to
                                        take control of what you do have power over instead of craving control over what you
                                        don't.</a>
                                </p>
                                <span>Steve Maraboli</span>
                            </blockquote>
                        </div>
                    </article> <!-- end blockquote post -->
                </div>

                <!-- standard post -->
                <div class="col-md-4 col-sm-6 col-xs-12 masonry-item">
                    <article class="entry-item">
                        <div class="entry-img hover-scale">
                            <a href="blog-single.html">
                                <img src="img/blog/blog_5.jpg" alt="">
                            </a>
                        </div>

                        <div class="entry-wrap">
                            <div class="entry">
                                <ul class="entry-meta">
                                    <li class="entry-date">
                                        <i class="fa fa-calendar-o"></i>
                                        <a href="#">09 July, 2015</a>
                                    </li>
                                    <li class="entry-category">
                                        <i class="fa fa-folder-open"></i>
                                        <a href="#">Quotes</a>
                                    </li>
                                </ul>
                                <h2 class="entry-title">
                                    <a href="blog-single.html">5 Steps to start new business</a>
                                </h2>
                                <div class="entry-content">
                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amadea is a simple and
                                        elegant template with tons of features. Lorem ipsum dolor sit amet, consectetur.</p>
                                    <a href="blog-single.html" class="read-more sliding-link">Read More</a>
                                </div>
                            </div>
                        </div>
                    </article> <!-- end standard post -->
                </div> <!-- end col -->

                <!-- text only post -->
                <div class="col-md-4 col-sm-6 col-xs-12 masonry-item">
                    <article class="entry-item">
                        <div class="entry-wrap">
                            <div class="entry">
                                <ul class="entry-meta">
                                    <li class="entry-date">
                                        <i class="fa fa-calendar-o"></i>
                                        <a href="#">10 July, 2015</a>
                                    </li>
                                    <li class="entry-category">
                                        <i class="fa fa-folder-open"></i>
                                        <a href="#">World</a>
                                    </li>
                                </ul>
                                <h2 class="entry-title">
                                    <a href="blog-single.html">Text blog post. Adventurous man using bicycle</a>
                                </h2>
                                <div class="entry-content">
                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amadea is a simple and
                                        elegant template with tons of features. Lorem ipsum dolor sit amet, consectetur.</p>
                                    <a href="blog-single.html" class="read-more sliding-link">Read More</a>
                                </div>
                            </div>
                        </div>
                    </article> <!-- end text only post -->
                </div>

                <!-- standard post -->
                <div class="col-md-4 col-sm-6 col-xs-12 masonry-item">
                    <article class="entry-item">
                        <div class="entry-img hover-scale">
                            <a href="blog-single.html">
                                <img src="img/blog/blog_6.jpg" alt="">
                            </a>
                        </div>

                        <div class="entry-wrap">
                            <div class="entry">
                                <ul class="entry-meta">
                                    <li class="entry-date">
                                        <i class="fa fa-calendar-o"></i>
                                        <a href="#">09 July, 2015</a>
                                    </li>
                                    <li class="entry-category">
                                        <i class="fa fa-folder-open"></i>
                                        <a href="#">Quotes</a>
                                    </li>
                                </ul>
                                <h2 class="entry-title">
                                    <a href="blog-single.html">5 Steps to start new business</a>
                                </h2>
                                <div class="entry-content">
                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amadea is a simple and
                                        elegant template with tons of features. Lorem ipsum dolor sit amet, consectetur.</p>
                                    <a href="blog-single.html" class="read-more sliding-link">Read More</a>
                                </div>
                            </div>
                        </div>
                    </article> <!-- end standard post -->
                </div> <!-- end col -->

                <!-- standard post -->
                <div class="col-md-4 col-sm-6 col-xs-12 masonry-item">
                    <article class="entry-item">
                        <div class="entry-img hover-scale">
                            <a href="blog-single.html">
                                <img src="img/blog/blog_7.jpg" alt="">
                            </a>
                        </div>

                        <div class="entry-wrap">
                            <div class="entry">
                                <ul class="entry-meta">
                                    <li class="entry-date">
                                        <i class="fa fa-calendar-o"></i>
                                        <a href="#">09 July, 2015</a>
                                    </li>
                                    <li class="entry-category">
                                        <i class="fa fa-folder-open"></i>
                                        <a href="#">Quotes</a>
                                    </li>
                                </ul>
                                <h2 class="entry-title">
                                    <a href="blog-single.html">5 Steps to start new business</a>
                                </h2>
                                <div class="entry-content">
                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amadea is a simple and
                                        elegant template with tons of features. Lorem ipsum dolor sit amet, consectetur.</p>
                                    <a href="blog-single.html" class="read-more sliding-link">Read More</a>
                                </div>
                            </div>
                        </div>
                    </article> <!-- end standard post -->
                </div> <!-- end col -->

                <!-- text only post -->
                <div class="col-md-4 col-sm-6 col-xs-12 masonry-item">
                    <article class="entry-item">
                        <div class="entry-wrap">
                            <div class="entry">
                                <ul class="entry-meta">
                                    <li class="entry-date">
                                        <i class="fa fa-calendar-o"></i>
                                        <a href="#">10 July, 2015</a>
                                    </li>
                                    <li class="entry-category">
                                        <i class="fa fa-folder-open"></i>
                                        <a href="#">World</a>
                                    </li>
                                </ul>
                                <h2 class="entry-title">
                                    <a href="blog-single.html">Text blog post. Adventurous man using bicycle</a>
                                </h2>
                                <div class="entry-content">
                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amadea is a simple and
                                        elegant template with tons of features. Lorem ipsum dolor sit amet, consectetur.</p>
                                    <a href="blog-single.html" class="read-more sliding-link">Read More</a>
                                </div>
                            </div>
                        </div>
                    </article> <!-- end text only post -->
                </div>


            </div> <!-- end row -->

            <div class="load-more text-center mt-30">
                <a href="#" class="btn btn-md btn-white"><span>Load More</span></a>
            </div>

        </div> <!-- end container -->
    </section> <!-- end blog masonry -->

    
@endsection
