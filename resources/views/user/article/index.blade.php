@extends('user.layouts.master')
@section('user')
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Өгүүллүүдийн жагсаалт</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="{{ route('user.article.new') }}">Шинээр нэмэх</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table">
                            <thead>
                                <th>Гарчиг</th>
                                <th>Зохиогчид</th>
                                <th>Илгээсэн</th>
                                <th>Төлөв</th>
                                <th>Файл</th>
                            </thead>
                            <tbody>
                                @foreach ($articles as $item)
                                    <tr>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->authors }}</td>
                                        <td>{{ $item->received }}</td>
                                        <td>
                                            {!! $item->approved == null ? '<span class="badge badge-warning">Нийтлээгүй</span>' : '<span class="badge badge-success">Нийтэлсэн</span>' !!}
                                        </td>
                                        <td>
                                            <a href="/{{ $item->full_article_link }}">Үзэх</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
