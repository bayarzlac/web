@extends('user.layouts.master')
@section('user')
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Өгүүллүүдийн жагсаалт</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>header</th>
                    </thead>
                    <tbody>
                        @foreach ($articles as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection