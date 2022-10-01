@extends('admin.layouts.master')
@section('admin')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Өгүүллийн дэлгэрэнгүй</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>{{ $article[0]->title }}</h3>
                            <hr />
                            <h5 class="mt-3">Зохиогчид</h5>
                            <p class="mt-2">
                                {{ $article[0]->authors }}
                            </p>
                            <h5 class="mt-3">Түлхүүр үгс</h5>
                            <p class="mt-2">{{ $article[0]->keywords }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="mt-3">Хураангуй</h5>
                            <p class="mt-2">
                                {{ $article[0]->abstract_mn }}
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h5 class="mt-3">Abstract (Хураангуй англи хэлээр)</h5>
                            <p class="mt-2">
                                {{ $article[0]->abstract_en }}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('') }}" class="mb-1 btn btn-outline-success">
                                <i class="mdi mdi-file-pdf-box">::before</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
