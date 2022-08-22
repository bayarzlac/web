@extends('admin.layouts.master')
@section('admin')
    <h1>this is admin panel</h1>
    <div class="row">
        <div class="col-md-12">
            {{ Auth::id() }}
        </div>
    </div>
@endsection