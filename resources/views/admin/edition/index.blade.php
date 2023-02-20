@extends('admin.layouts.master')
@section('admin')
    <div class="row">
        <div class="col-12">
            <!-- Recent Order Table -->
            <div class="card card-default">
                <div class="card-header justify-content-between">
                    <h2>Сэтгүүлийн дугаарууд</h2>
                    <div class="date-range-report">
                        <span></span>
                    </div>
                </div>

                <div class="card-body pt-5 pb-5">
                    <div class="search-form d-none d-lg-inline-block">
                        <div class="input-group">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <input type="text" name="query" id="search-input" class="form-control"
                                placeholder="'button', 'chart' etc." autofocus autocomplete="off" />
                        </div>
                    </div>
                    <table class="table table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Дугаар</th>
                                <th class="d-none d-md-table-cell">Дугаар</th>
                                <th class="d-none d-md-table-cell">Төлөв</th>
                                <th>Нийтлэгч</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($editions as $item)
                                <tr row="scope">
                                    <td>{{ $item->id }}</td>
                                    <td>
                                        <a class="text-dark" href=""> {{ $item->edition }}</a>
                                    </td>
                                    <td class="d-none d-md-table-cell">{{ $item->number }}</td>
                                    <td>
                                        {!! $item->status === 1
                                            ? '<span class="badge badge-danger">Хянаагүй</span>'
                                            : '<span class="badge badge-success">Нийтлэгдсэн</span>' !!}
                                    </td>
                                    <td>{{ Str::substr($item->last_name, 0, 1) . '.' . $item->first_name }}</td>
                                    <td class="text-right">
                                        <div class="dropdown show d-inline-block widget-dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="" role="button"
                                                id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" data-display="static"></a>
                                            <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdown-recent-order1">
                                                <li class="dropdown-item">
                                                    <a href="{{ route('admin.edition.articles', $item->id) }}">Дэлгэрэнгүй</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#">Устгах</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
