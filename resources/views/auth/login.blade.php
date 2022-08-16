<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Боловсрол судлал сэтгүүл</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('user_assets/plugins/toaster/toastr.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('user_assets/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
    <link href="{{ asset('user_assets/plugins/flag-icons/css/flag-icon.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('user_assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
    <link href="{{ asset('user_assets/plugins/ladda/ladda.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('user_assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('user_assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{ asset('user_assets/css/sleek.css') }}" />

    <!-- FAVICON -->
    <link href="{{ asset('user_assets/img/favicon.png" rel="shortcut icon') }}" />
    <script src="{{ asset('user_assets/plugins/nprogress/nprogress.js') }}"></script>
</head>

<body class="bg-light-gray" id="body">
    <div class="container d-flex flex-column justify-content-between vh-100">
        <div class="row justify-content-center mt-5">
            <div class="col-xl-5 col-lg-6 col-md-10">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="app-brand">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('user_assets/logo1.png') }}" height="33" />
                                <span class="brand-name">Боловсрол судлал сэтгүүл</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-5">
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h4 class="text-dark mb-5">Sign In</h4>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12 mb-4">
                                    <input type="email" class="form-control input-lg" id="email" name="email"
                                        aria-describedby="emailHelp" placeholder="Username">
                                </div>
                                <div class="form-group col-md-12 ">
                                    <input type="password" class="form-control input-lg" id="password" name="password"
                                        placeholder="Password">
                                </div>

                                <div class="col-md-12">
                                    <div class="d-flex my-2 justify-content-between">
                                        <div class="d-inline-block mr-3">
                                            <label class="control control-checkbox">Remember me
                                                <input type="checkbox" />
                                                <div class="control-indicator"></div>
                                            </label>

                                        </div>
                                        <p><a class="text-blue" href="{{ route('password.request') }}">Нууц үгээ
                                                мартсан бол энд дарна уу</a></p>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-lg btn-primary btn-block mb-4">Нэвтрэх</button>
                                    <p>Бүртгүүлээгүй бол
                                        <a class="text-blue" href="sign-up.html">энд дарж</a>
                                        бүртгүүлнэ үү.
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright pl-0">
            <p class="text-center">&copy; Боловсрол судлал сэтгүүл
            </p>
        </div>
    </div>
</body>
</html>