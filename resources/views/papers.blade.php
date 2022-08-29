@extends('layouts.master')
@section('public')
    <!-- Page Title -->
    <section class="page-title text-center"
        style="background-image: url({{ asset('public_files/img/page_title/blog_title_bg.jpg') }});">
        <div class="container relative clearfix">
            <div class="title-holder">
                <div class="title-text">
                    <h1 class="uppercase">Өгүүллүүд</h1>
                </div>
            </div>
        </div>
    </section> <!-- end page title -->


    <!-- Blog Standard -->
    <section class="section-wrap-sm blog-standard bg-light pb-50">
        <div class="container relative">
            <div class="row">

                <!-- content -->
                <div class="col-md-9 post-content mb-50">
                    @foreach ($papers as $item)
                        <!-- standard post -->
                        <article class="entry-item">
                            {{-- <div class="entry-img">
                            <a href="blog-single.html" class="hover-scale">
                                <img src="{{ asset('public_files/img/blog/post_img_1.jpg') }}" alt="">
                            </a>
                        </div> --}}
                            <div class="entry-wrap">
                                <div class="entry">
                                    <ul class="entry-meta">
                                        <li class="entry-date">
                                            <i class="fa fa-calendar-o"></i>
                                            {{ $item->approved }}
                                        </li>
                                        <li class="entry-author">
                                            <i class="fa fa-user"></i>
                                            <a href="#">{{ $item->authors }}</a>
                                        </li>
                                        <li class="entry-category">
                                            <i class="fa fa-folder-open"></i>
                                            <a href="#">Fashion</a>
                                        </li>
                                        <li class="entry-comments">
                                            <i class="fa fa-comment"></i>
                                            <a href="blog-single.html">15 Comments</a>
                                        </li>
                                    </ul>
                                    <h2 class="entry-title">
                                        <a href="blog-single.html">{{ $item->title }}</a>
                                    </h2>
                                    <div class="entry-content">
                                        <p>
                                            {{ $item->abstract_mn }}
                                        </p>
                                        <a href="blog-single.html" class="read-more">Дэлгэрэнгүй</a>
                                    </div>
                                </div>
                            </div>
                        </article> <!-- end standard post -->
                    @endforeach


                    <!-- Pagination -->
                    <nav class="pagination clearfix">
                        <a href="#"><i class="fa fa-angle-left"></i></a>
                        <span class="page-numbers current">1</span>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#"><i class="fa fa-angle-right"></i></a>
                    </nav>

                </div> <!-- end col -->

                <!-- Sidebar -->
                <aside class="col-md-3 sidebar">

                    <div class="widget search">
                        <form class="relative" action="{{ route('search_paper') }}" method="POST">
                            <input type="search" name="search" class="searchbox mb-0" placeholder="Search">
                            <button type="submit" class="search-button"><i class="ui-search"></i></button>
                        </form>
                    </div>

                    <!-- Categories -->
                    <div class="widget categories">
                        <h3 class="widget-title heading uppercase relative bottom-line full-grey">Categories</h3>
                        <ul class="list-dividers">
                            <li>
                                <a href="#">Business</a>
                            </li>
                            <li>
                                <a href="#">Science</a>
                            </li>
                            <li>
                                <a href="#">Sport</a>
                            </li>
                            <li>
                                <a href="#">Politics</a>
                            </li>
                            <li>
                                <a href="#">Lifestyle</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Recent posts -->
                    <div class="widget recent-posts">
                        <h3 class="widget-title heading uppercase relative bottom-line full-grey">Recent Posts</h3>
                        <div class="entry-list">
                            <ul class="posts-list">
                                <li class="entry-li">
                                    <article class="post-small clearfix">
                                        <div class="entry">
                                            <h3 class="entry-title"><a href="blog-single.html">6 Ways to Be More
                                                    Productive</a></h3>
                                            <ul class="entry-meta list-inline">
                                                <li class="entry-date">
                                                    19 Mar, 2016
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </li>
                                <li class="entry-li">
                                    <article class="post-small clearfix">
                                        <div class="entry">
                                            <h3 class="entry-title"><a href="blog-single.html">3 Tips to Align Your
                                                    Startup</a></h3>
                                            <ul class="entry-meta list-inline">
                                                <li class="entry-date">
                                                    16 Mar, 2016
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </li>
                                <li class="entry-li">
                                    <article class="post-small clearfix">
                                        <div class="entry">
                                            <h3 class="entry-title"><a href="blog-single.html">Make more money blogging
                                                    with these 6 tips</a></h3>
                                            <ul class="entry-meta list-inline">
                                                <li class="entry-date">
                                                    16 Mar, 2016
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Twitter -->
                    <div class="widget recent-tweets">
                        <h3 class="widget-title heading relative">Recent Tweets</h3>
                        <ul class="list-no-dividers" id="tweets" data-twitter-id="594366594521804800"
                            data-max-tweets="2">
                        </ul>
                    </div>


                    <!-- Tags -->
                    <div class="widget tags light clearfix">
                        <h3 class="widget-title heading uppercase relative bottom-line full-grey">Tags</h3>
                        <a href="#">Multi-purpose</a>
                        <a href="#">Creative</a>
                        <a href="#">Elegant</a>
                        <a href="#">Clean</a>
                        <a href="#">Modern</a>
                        <a href="#">Responsive</a>
                        <a href="#">E-commerce</a>
                        <a href="#">WordPress</a>
                        <a href="#">Woocommerce</a>
                        <a href="#">Store</a>
                        <a href="#">Business</a>
                    </div>

                </aside> <!-- end sidebar -->

            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- end blog standard -->
@endsection
