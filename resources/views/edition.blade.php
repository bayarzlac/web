@extends('layouts.master')
@section('public')
    <!-- Page Title -->
    <section class="page-title text-center"
        style="background-image: url({{ asset('public_files/img/page_title/blog_title_bg.jpg') }});">
        <div class="container relative clearfix">
            <div class="title-holder">
                <div class="title-text">
                    <h1 class="uppercase">{{ $edition->edition }} ({{ $edition->number }})</h1>
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

                @include('layouts.sidebar')
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- end blog standard -->
@endsection
