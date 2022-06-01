@extends('admin.layouts.master')
@section('admin')
    <div class="row">
        <div class="col-12">
            <!-- Recent Order Table -->
            <div class="card card-table-border-none" id="recent-orders">
                <div class="card-header justify-content-between">
                    <h2>Сэтгүүлийн дугаарууд</h2>
                    <div class="date-range-report ">
                        <span></span>
                    </div>
                </div>

                <div class="card-body pt-0 pb-5">
                    <table class="table table-striped card-table table-responsive" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Дугаар</th>
                                <th class="d-none d-md-table-cell">Дугаар</th>
                                <th class="d-none d-md-table-cell">Төлөв</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($editions as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>
                                        <a class="text-dark" href=""> {{ $item->edition }}</a>
                                    </td>
                                    <td class="d-none d-md-table-cell">{{ $item->number }}</td>
                                    <td class="d-none d-md-table-cell">{{ $item->status }}</td>
                                    
                                    <td>
                                        @if (empty($item->revised))
                                            <span class="badge badge-danger">Хянаагүй</span>
                                        @elseif (empty($item->approved))
                                            <span class="badge badge-warning">Хянаж байгаа</span>
                                        @else
                                            <span class="badge badge-success">Хүлээн авсан</span>
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown show d-inline-block widget-dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="" role="button"
                                                id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" data-display="static"></a>
                                            <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdown-recent-order1">
                                                <li class="dropdown-item">
                                                    <a href="#">View</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#">Remove</a>
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
