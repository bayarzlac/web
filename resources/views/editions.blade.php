@extends('layouts.master')
@section('public')
    <!-- Page Title -->
    <section class="page-title text-center"
        style="background-image: url({{ asset('public_files/img/page_title/blog_title_bg.jpg') }});">
        <div class="container relative clearfix">
            <div class="title-holder">
                <div class="title-text">
                    <h1 class="uppercase">Дугаарууд</h1>
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
                    @foreach ($editions as $e)
                        <article class="entry-item">
                            <div class="entry-wrap">
                                <div class="entry">
                                    <ul class="entry-meta">
                                        <li class="entry-date">
                                            <i class="fa fa-calendar-o"></i>
                                            {{ $e->created_at }}
                                        </li>
                                        <li class="entry-author">
                                            <i class="fa fa-user"></i>
                                            {{ Str::substr($e->last_name, 0, 1) . '.' . $e->first_name }}
                                        </li>
                                        <li class="entry-comments">
                                            <i class="fa fa-file-o"></i>
                                            {{ $e->num_of_articles }} өгүүлэл
                                        </li>
                                    </ul>
                                    <h2 class="entry-title">
                                        <a href="blog-single.html">
                                            {{ $e->edition }} ({{ $e->number }})
                                        </a>
                                    </h2>
                                    <div class="entry-content">
                                        <p>
                                            Хураангуй
                                        </p>
                                        <a href="{{ route('edition', $e->id) }}" class="read-more">Дэлгэрэнгүй</a>
                                    </div>
                                </div>
                            </div>
                        </article>
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

                @yield('layouts.sidebar')
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- end blog standard -->
@endsection
