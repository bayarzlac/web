@extends('admin.layouts.master')
@section('admin')
<div class="row">
    <div class="col-lg-6">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Сэтгүүлийн бүлгүүд</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>№</th>
                        <th>Бүлэг</th>
                        <th>#</th>
                    </thead>
                    <tbody>
                        @foreach ($chapters as $item)
                        <tr>
                            <td>{{ $item->numOfOrder }}</td>
                            <td>{{ $item->chapter }}</td>
                            <td><a href="#">Засах</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Шинэ бүлэг нэмэх</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.chapters.add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Дэс дугаар</label>
                        <input type="number" class="form-control" name="numOfOrder" />
                    </div>
                    <div class="form-group">
                        <label>Бүлэг</label>
                        <input type="text" class="form-control" name="chapter" />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-default">Хадгалах</button>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</div>
@endsection