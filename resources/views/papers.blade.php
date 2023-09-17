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

    @foreach ($papers as $item)
        <!-- Blog Masonry -->
        <section class="section-wrap-sm blog-masonry bg-light">
            <div class="container relative">
                <div class="row masonry blog-content">
                    <!-- standard post -->
                    <div class="col-md-4 col-sm-6 col-xs-12 masonry-item">
                        <article class="entry-item">
                            <div class="entry-img hover-scale">
                                <a href="blog-single.html">
                                    <img src="{{ asset('public_files/img/blog/blog_1.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="entry-wrap">
                                <div class="entry">
                                    <ul class="entry-meta">
                                        <li class="entry-date">
                                            <i class="fa fa-calendar-o"></i>
                                            <a href="#">{{ $item->review }}</a>
                                        </li>
                                        <li class="entry-category">
                                            <i class="fa fa-folder-open"></i>
                                            <a href="#">{{ $item->chapter }}</a>
                                        </li>
                                    </ul>
                                    <h2 class="entry-title">
                                        <a href="#">{{ $item->title }}</a>
                                    </h2>
                                    <div class="entry-content">
                                        <p>
                                            {{ $item->abstract_mn }}
                                        </p>
                                        <a href="#" class="read-more sliding-link">Цааш нь...</a>
                                    </div>
                                </div>
                            </div>
                        </article> <!-- end standard post -->
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section> <!-- end blog masonry -->
    @endforeach
@endsection
