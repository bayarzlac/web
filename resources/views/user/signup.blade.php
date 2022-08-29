<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Хэрэглэгчээр бүртгүүлэх</title>

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
        <link rel="shortcut icon" href="{{ asset('public_files/img/favicon.ico') }}">
        <script src="assets/plugins/nprogress/nprogress.js"></script>

        <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
        <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>

        <!-- Load our React component. -->
        <script src="{{ asset('js/like_button.js') }}"></script>
    </head>

</head>

<body class="bg-light-gray" id="body">
    <div class="container d-flex flex-column justify-content-between vh-100">
        <div class="row justify-content-center mt-5">
            <div class="col-xl-10 col-lg-6 col-md-10">
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
                        <h4 class="text-dark mb-5">Хэрэглэгчийн бүртгэл</h4>
                        <form action="{{ route('user.add') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <input type="text" class="form-control input-lg"
                                                aria-describedby="nameHelp" placeholder="Овог (эцэг / эхийн нэр)"
                                                name="last_name">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="text" class="form-control input-lg"
                                                aria-describedby="nameHelp" placeholder="Нэр" name="first_name">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Төрсөн огноо</label>
                                            <input type="date" class="form-control input-lg"
                                                placeholder="Төрсөн огноо" name="birth_date">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Хүйс</label>
                                            <select class="form-control" id="exampleFormControlSelect12" name="sex">
                                                <option disabled selected>--Сонго--</option>
                                                <option>Эрэгтэй</option>
                                                <option>Эмэгтэй</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <input type="email" class="form-control input-lg" id="email"
                                                aria-describedby="emailHelp" placeholder="Email хаяг" name="email">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="password" class="form-control input-lg" name="password"
                                                placeholder="Нууц үг">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="password" class="form-control input-lg"
                                                placeholder="Нууц үг давтах">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label>Боловсролын зэрэг</label>
                                            <select class="form-control" id="exampleFormControlSelect12"
                                                name="education_degree">
                                                <option disabled selected>--Сонго--</option>
                                                <option>Оюутан</option>
                                                <option>Бакалавр</option>
                                                <option>Магистр</option>
                                                <option>Ph.D</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Эрдмийн зэрэг</label>
                                            <select class="form-control" id="exampleFormControlSelect12"
                                                name="academic_degree">
                                                <option disabled selected>--Сонго--</option>
                                                <option>Зэрэггүй</option>
                                                <option>ШУ Доктор</option>
                                                <option>Дэд профессор</option>
                                                <option>Профессор</option>
                                                <option>Доктор</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <input type="text" class="form-control input-lg" name="work"
                                                placeholder="Ажлын газар">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <input type="text" class="form-control input-lg" name="position"
                                                placeholder="Албан тушаал">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <input type="text" class="form-control input-lg" name="phone"
                                                placeholder="Гар утасны дугаар">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Аймаг / хот</label>
                                            <select class="form-control" id="exampleFormControlSelect12"
                                                name="province">
                                                <option disabled selected>--Сонго--</option>
                                                <option>Архангай</option>
                                                <option>Баянхонгор</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Сум / дүүрэг</label>
                                            <select class="form-control" id="exampleFormControlSelect12"
                                                name="district">
                                                <option disabled selected>--Сонго--</option>
                                                <option>Батцэнгэл</option>
                                                <option>Зэрэг</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <input type="text" class="form-control input-lg" name="address"
                                                placeholder="Оршин суугаа хаяг">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit"
                                        class="btn btn-lg btn-primary btn-block mb-4">Бүртгүүлэх</button>
                                    <p>Та өмнө нь бүртгүүлсэн үү?
                                        <a class="text-blue" href="sign-in.html">Нэвтрэх</a>
                                    </p>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="copyright pl-0">
            <p class="text-center">&copy; Боловсрол судлал сэтгүүл</p>
        </div>
    </div>
    
    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>

    <!-- Load our React component. -->
    <script src="like_button.js"></script>

</body>

</html>
