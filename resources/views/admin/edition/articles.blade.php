@extends('admin.layouts.master')
@section('admin')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Дугаарын өгүүллүүд</h2>
                </div>
                <div class="card-body">
                    <h3 class="mb-5">{{ $edition->edition }} ({{ $edition->number }})</h3>
                    

                    <table class="table table-bordered table-hover">
                        <thead>
                            <th>#</th>
                            <th>Бүлэг</th>
                            <th>Гарчиг</th>
                            <th>Үйлдэл</th>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr>
                                    <td>{{ $article->article_number }}</td>
                                    <td>
                                        {{ $article->chapter }}
                                    </td>
                                    <td>
                                        <p>
                                            {{ $article->title }}
                                        </p>
                                        <cite class="title">{{ $article->authors }}</cite>
                                    </td>
                                    <td>
                                        <button type="button" class="mb-1 btn btn-sm btn-outline-danger" 
                                            onclick="remove({{ $article->id }})">
                                            Хасах
                                        </button>
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
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function remove(id) {
            Swal.fire({
                icon: 'warning',
                title: 'Хасах',
                text: 'Сонгосон өгүүллийг хасах гэж байна.', 
                confirmButtonText: 'Тийм',
                showCancelButton: true
            }).then((result) => {

            })
        }
    </script>
@endsection