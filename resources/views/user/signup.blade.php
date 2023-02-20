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
        <script src="{{ asset('user_assets/plugins/nprogress/nprogress.js') }}"></script>
        <script type="importmap">
            {
                "imports": {
                    "vue": "https://unpkg.com/vue@3/dist/vue.esm-browser.js"
                }
            }
        </script>
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
                    <div class="card-body p-5" id="app">
                        <h4 class="text-dark mb-5">Хэрэглэгчийн бүртгэл</h4>

                        <form id="app" @submit="checkInputs" action="{{ route('user.add') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    @if (Session::has('success'))
                                        <div class="alert alert-success">
                                            <ul>
                                                <li>{{ Session::get('success') }}</li>
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label>Овог, нэр</label>
                                            <input type="text"
                                                :class="[last_name != '' ? 'form-control input-lg is-valid' :
                                                    'form-control input-lg is-invalid'
                                                ]"
                                                placeholder="Овог (эцэг / эхийн нэр)" name="last_name"
                                                v-model="last_name">
                                            <div v-if="last_name == ''" class="invalid-feedback">*</div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <input type="text"
                                                :class="[first_name != '' ? 'form-control input-lg is-valid' :
                                                    'form-control input-lg is-invalid'
                                                ]"
                                                placeholder="Нэр" name="first_name" v-model="first_name">
                                            <div v-if="first_name == ''" class="invalid-feedback">*</div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Төрсөн огноо</label>
                                            <input type="date"
                                                :class="[birth_date != '' ? 'form-control input-lg is-valid' :
                                                    'form-control input-lg is-invalid'
                                                ]"
                                                placeholder="Төрсөн огноо" name="birth_date" v-model="birth_date">
                                            <div v-if="birth_date == ''" class="invalid-feedback">*</div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Хүйс</label>
                                            <select
                                                :class="[sex != '' ? 'form-control is-valid' : 'form-control is-invalid']"
                                                id="sex" name="sex" v-model="sex">
                                                <option disabled selected value="">--Сонго--</option>
                                                <option>Эрэгтэй</option>
                                                <option>Эмэгтэй</option>
                                            </select>
                                            <div v-if="sex == ''" class="invalid-feedback">*</div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <input type="email"
                                                :class="[email != '' ? 'form-control input-lg is-valid' :
                                                    'form-control input-lg is-invalid'
                                                ]"
                                                id="email" aria-describedby="emailHelp" placeholder="Email хаяг"
                                                name="email" v-model="email">
                                            <div v-if="email == ''" class="invalid-feedback">*</div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="password"
                                                :class="[password != '' ? 'form-control input-lg is-valid' :
                                                    'form-control input-lg is-invalid'
                                                ]"
                                                name="password" placeholder="Нууц үг" v-model="password">
                                            <div v-if="password == ''" class="invalid-feedback">*</div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="password"
                                                :class="[password_confirm == password ? 'form-control input-lg is-valid' :
                                                    'form-control input-lg is-invalid'
                                                ]"
                                                placeholder="Нууц үг баталгаажуулах" v-model="password_confirm">
                                            <div v-if="password_confirm != ''" class="invalid-feedback">Нууц үг баталгаажуулалт зөрүүтэй</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label>Боловсролын зэрэг</label>
                                            <select
                                                :class="[education_degree != '' ? 'form-control is-valid' :
                                                    'form-control is-invalid'
                                                ]"
                                                id="education_degree" name="education_degree"
                                                v-model="education_degree">
                                                <option disabled selected value="">--Сонго--</option>
                                                <option>Оюутан</option>
                                                <option>Бакалавр</option>
                                                <option>Магистр</option>
                                                <option>Ph.D</option>
                                            </select>
                                            <div v-if="education_degree == ''" class="invalid-feedback">*</div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Эрдмийн зэрэг</label>
                                            <select
                                                :class="[academic_degree != '' ? 'form-control is-valid' :
                                                    'form-control is-invalid'
                                                ]"
                                                id="academic_degree" name="academic_degree"
                                                v-model="academic_degree">
                                                <option disabled selected value="">--Сонго--</option>
                                                <option>Зэрэггүй</option>
                                                <option>ШУ Доктор</option>
                                                <option>Дэд профессор</option>
                                                <option>Профессор</option>
                                                <option>Доктор</option>
                                            </select>
                                            <div v-if="academic_degree == ''" class="invalid-feedback">*</div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <input type="text"
                                                :class="[work != '' ? 'form-control input-lg is-valid' :
                                                    'form-control input-lg is-invalid'
                                                ]"
                                                name="work" placeholder="Ажлын газар" v-model="work">
                                            <div v-if="work == ''" class="invalid-feedback">*</div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <input type="text"
                                                :class="[position != '' ? 'form-control input-lg is-valid' :
                                                    'form-control input-lg is-invalid'
                                                ]"
                                                name="position" placeholder="Албан тушаал" v-model="position">
                                            <div v-if="position == ''" class="invalid-feedback">*</div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <input type="text"
                                                :class="[phone != '' ? 'form-control input-lg is-valid' :
                                                    'form-control input-lg is-invalid'
                                                ]"
                                                name="phone" placeholder="Гар утасны дугаар" v-model="phone">
                                            <div v-if="phone == ''" class="invalid-feedback">*</div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Аймаг / хот</label>
                                            <select
                                                :class="[provinceSelected != '' ? 'form-control is-valid' :
                                                    'form-control is-invalid'
                                                ]"
                                                v-model="provinceSelected" @change="onSelectProvince">
                                                <option value="" disabled selected>--Сонгох--</option>
                                                <option v-for="item in provinces" v-bind:value="item.provinceId">
                                                    @{{ item.province }}</option>
                                            </select>
                                            <div v-if="province == ''" class="invalid-feedback">*</div>
                                            <input type="hidden" name="province" v-bind:value="province">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Сум / дүүрэг</label>
                                            <select
                                                :class="[district != '' ? 'form-control is-valid' : 'form-control is-invalid']"
                                                v-model="district" name="district">
                                                <option value="" disabled selected>--Сонгох--</option>
                                                <option v-if="provinceSelected" v-for="item in districts"
                                                    :value="item.district">@{{ item.district }}</option>
                                            </select>
                                            <div v-if="district == ''" class="invalid-feedback">*</div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="text"
                                                :class="[address != '' ? 'form-control input-lg is-valid' :
                                                    'form-control input-lg is-invalid'
                                                ]"
                                                name="address" placeholder="Оршин суугаа хаяг" v-model="address">
                                            <div v-if="address == ''" class="invalid-feedback">*</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" v-if="errors.length">
                                <div class="col-md-12">
                                    <div class="alert alert-danger">
                                        <ul>
                                            <li v-for="error in errors">@{{ error }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit"
                                        class="btn btn-lg btn-primary btn-block mb-4">Бүртгүүлэх</button>
                                    <p>Та өмнө нь бүртгүүлсэн үү?
                                        <a class="text-blue" href="{{ route('login') }}">Нэвтрэх</a>
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
    <script type="module">
        import { createApp } from 'vue'
        import p from '../public_files/provinces.json' assert { type: "json" }
        import d from '../public_files/districts.json' assert { type: "json" }

        createApp({
          data() {
            return {
                last_name: '',
                first_name: '',
                birth_date: '',
                sex: '',
                email: '',
                password: '',
                password_confirm: '',
                education_degree: '',
                academic_degree: '',
                work: '',
                position: '',
                phone: '',
                province: '',
                district: '',
                address: '',
                
                provinces: p,
                districts: d,
                provinceSelected: '',
                
                errors: []
            }
          },

          methods: {
            onSelectProvince (e) {
                this.districts = d.filter(d => d.provinceId == e.target.value);
                this.province = p.filter(p => p.provinceId == e.target.value)[0].province;
                this.districtSelected = '';
            },

            checkInputs (e) {
                this.errors = [];

                if (this.provinceSelected != '' && this.last_name.trim() != '' && 
                    this.first_name.trim() != '' && this.birth_date != '' && 
                    this.sex != '' && this.email.trim() != '' &&  
                    this.education_degree != '' && this.academic_degree != '' &&
                    this.work.trim() != '' && this.position.trim() != '' && 
                    this.phone.trim() != '' && this.district.trim() != '' &&
                    this.address.trim() != '' && this.password.trim() != '' &&
                    this.password.trim() == this.password_confirm.trim()) {
                    return true;
                }

                if (this.provinceSelected == '' || 
                    this.last_name.trim() == null || this.first_name == null || 
                    this.birth_date == null || this.sex == '' || 
                    this.email == '' ||
                    this.education_degree == '' || this.academic_degree == '' ||
                    this.work.trim() == '' || this.position.trim() == '' ||
                    this.phone.trim() == '' || this.district == '' || 
                    this.address.trim() == '' || this.password.trim() == '' ||
                    this.password.trim() != this.password_confirm.trim()) {
                    this.errors.push('Та шаардлагатай мэдээллүүдийг оруулна уу.');
                }

                e.preventDefault();
            }
          }
        }).mount('#app')
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
    <script src="{{ asset('user_assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('user_assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user_assets/plugins/toaster/toastr.min.js') }}"></script>
    <script src="{{ asset('user_assets/plugins/slimscrollbar/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('user_assets/plugins/charts/Chart.min.js') }}"></script>
    <script src="{{ asset('user_assets/plugins/ladda/spin.min.js') }}"></script>
    <script src="{{ asset('user_assets/plugins/ladda/ladda.min.js') }}"></script>
    <script src="{{ asset('user_assets/plugins/jquery-mask-input/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('user_assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('user_assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('user_assets/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
    <script src="{{ asset('user_assets/plugins/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('user_assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    {{-- <script src="{{ asset('user_assets/plugins/jekyll-search.min.js') }}"></script> --}}
    <script src="{{ asset('user_assets/js/sleek.js') }}"></script>
    <script src="{{ asset('user_assets/js/chart.js') }}"></script>
    <script src="{{ asset('user_assets/js/date-range.js') }}"></script>
    <script src="{{ asset('user_assets/js/map.js') }}"></script>
    {{-- <script src="{{ asset('user_assets/js/custom.js') }}"></script> --}}
</body>

</html>
