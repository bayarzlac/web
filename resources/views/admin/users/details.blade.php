@extends('admin.layouts.master')
@section('admin')
    <div class="bg-white border rounded">
        <div class="row no-gutters">
            <div class="col-lg-4 col-xl-3">
                <div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
                    <div class="card text-center widget-profile px-0 border-0">
                        {{-- <div class="card-img mx-auto rounded-circle">
                            <img src="assets/img/user/u6.jpg" alt="user image">
                        </div> --}}
                        <div class="card-body">
                            <h4 class="py-2 text-dark">{{ $user->last_name . ' ' . $user->first_name }}</h4>
                            <p>{{ $user->email }}</p>
                            <a class="btn btn-primary btn-pill btn-lg my-4" href="#">Follow</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between ">
                        <div class="text-center pb-4">
                            <h6 class="text-dark pb-2">{{ $user->work }}</h6>
                            <p>{{ $user->position }}</p>
                        </div>
                    </div>
                    <hr class="w-100">
                    <div class="contact-info pt-4">
                        <h5 class="text-dark mb-1">ХОЛБОГДОХ МЭДЭЭЛЭЛ</h5>
                        <p class="text-dark font-weight-medium pt-4 mb-2">Утасны дугаар</p>
                        <p>{{ $user->phone }}</p>
                        <p class="text-dark font-weight-medium pt-4 mb-2">Birthday</p>
                        <p>{{ $user->birth_date }}</p>
                        <p class="text-dark font-weight-medium pt-4 mb-2">Байршил</p>
                        <p>{{ $user->province . ', ' . $user->district }}</p>
                        <p class="text-dark font-weight-medium pt-4 mb-2">Оршин суугаа хаяг</p>
                        <p>{{ $user->address }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xl-9">
                <div class="profile-content-right py-5">
                    <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="timeline-tab" data-toggle="tab" href="#timeline" role="tab"
                                aria-controls="timeline" aria-selected="true">Timeline</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab"
                                aria-controls="settings" aria-selected="false">Settings</a>
                        </li>
                    </ul>
                    <div class="tab-content px-3 px-xl-5" id="myTabContent">
                        <div class="tab-pane fade show active" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">...
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...
                        </div>
                        <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
