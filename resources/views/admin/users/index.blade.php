@extends('admin.layouts.master')
@section('admin')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Хэрэглэгчдийн бүртгэл</h2>
                </div>
                <div class="card-body">
                    <p class="mb-5">Use <code>.table-striped</code> to add zebra-striping to any table row within the
                        &lt;tbody&gt;. Read bootstrap documentation for <a
                            href="http://getbootstrap.com/docs/4.1/content/tables/#striped-rows" target="_blank"> more
                            details.</a></p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Төрөл</th>
                                <th scope="col">Овог</th>
                                <th scope="col">Нэр</th>
                                <th scope="col">Email</th>
                                <th scope="col">Утас</th>
                                <th scope="col">Бүртгүүлсэн</th>
                                <th scope="col">Байршил</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td scope="row">1</td>
                                    <td>{{ $user->role }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>{{ $user->province . ' - ' . $user->district }}</td>
                                    <td>
                                        <div class="dropdown d-inline-block widget-dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="" role="button"
                                                id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" data-display="static"></a>
                                            <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdown-recent-order1">
                                                <li class="dropdown-item">
                                                    <a href="{{ route('admin.user.details', $user->id) }}">View</a>
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
