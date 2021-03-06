{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Login') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--<form method="POST" action="{{ route('login') }}">--}}
                        {{--@csrf--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

                                {{--@error('email')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                {{--@enderror--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

                                {{--@error('password')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                {{--@enderror--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<div class="form-check">--}}
                                    {{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

                                    {{--<label class="form-check-label" for="remember">--}}
                                        {{--{{ __('Remember Me') }}--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0">--}}
                            {{--<div class="col-md-8 offset-md-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Login') }}--}}
                                {{--</button>--}}

                                {{--@if (Route::has('password.request'))--}}
                                    {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                        {{--{{ __('Forgot Your Password?') }}--}}
                                    {{--</a>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}



<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>Metronic | Login Page v3</title>
    <meta name="description" content="Login page example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <!--end::Fonts -->
    <!--begin::Page Custom Styles(used by this page) -->
    <link href="assets/css/pages/login/login-3.css" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles -->
    <!--begin::Global Theme Styles(used by all pages) -->
    <!--begin:: Vendor Plugins -->
    <link href="assets/plugins/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />

    <!--end:: Vendor Plugins -->
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

    <!--begin:: Vendor Plugins for custom pages -->
    <link href="assets/plugins/custom/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/@fullcalendar/core/main.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/@fullcalendar/daygrid/main.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/@fullcalendar/list/main.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/@fullcalendar/timegrid/main.css" rel="stylesheet" type="text/css" />
    <!--end:: Vendor Plugins for custom pages -->
    <!--end::Global Theme Styles -->
    <!--begin::Layout Skins(used by all pages) -->
    <link href="assets/css/skins/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/skins/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/skins/aside/dark.css" rel="stylesheet" type="text/css" />
    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    {{--<script src="http://parsleyjs.org/dist/parsley.js"></script>--}}

</head>
<!-- end::Head -->
<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
<!-- begin:: Page -->
<div class="kt-grid kt-grid--ver kt-grid--root">
    <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v3 kt-login--signin" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: {{asset('assets/media//bg/bg-3.jpg')}};">
            <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                <div class="kt-login__container">
                    <div class="kt-login__logo">
                        <a href="#">
                            <img src={{asset('assets/media/logos/logo-5.png')}}>
                        </a>
                    </div>
                    <div class="kt-login__signin">
                        <div class="kt-login__head">
                            <h3 class="kt-login__title">Sign In To Admin</h3>
                        </div>
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li> {{$error}} </li>
                                    @endforeach
                                </ul>
                            </div>

                        @endif

                        @if(session('success'))
                            <div class="alert alert-success">
                                <li> {{session('success')}}</li>
                            </div>
                        @endif
                        @if (session('status'))
                            <p class="alert alert-success">{{ session('status') }}</p>
                        @endif
                        <form class="kt-form" action="{{ route('login') }}" method="post" id="kt-login-form">
                            {{csrf_field()}}
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off"  data-parsley-type="email" data-parsley-required-message="Email is required" data-parsley-trigger="keyup">
                            </div>
                            <div class="input-group">
                                <input class="form-control" type="password" placeholder="Password" name="password"  data-parsley-length="" data-parsley-required-message="Password is required" data-parsley-trigger="keyup">
                            </div>
                            <div class="row kt-login__extra">
                                {{--<div class="col">--}}
                                {{--<label class="kt-checkbox">--}}
                                {{--<input type="checkbox" name="remember"> Remember me--}}
                                {{--<span></span>--}}
                                {{--</label>--}}
                                {{--</div>--}}
                                <div class="col kt-align-right">
                                    <a href="javascript:;" id="kt_login_forgot" class="kt-login__link">Forget Password ?</a>
                                </div>
                            </div>
                            <div class="kt-login__actions">
                                {{--<input type="submit" id="kt_login_signin_submit" class="btn btn-brand btn-elevate kt-login__btn-primary button" value="Sign In">--}}
                                <input type="submit" class="button btn btn-brand btn-elevate kt-login__btn-primary" value="Submit" id="">
                            </div>
                        </form>
                    </div>
                    <div class="kt-login__signup">
                        <div class="kt-login__head">
                            <h3 class="kt-login__title">Sign Up</h3>
                            <div class="kt-login__desc">Enter your details to create your account:</div>
                        </div>
                        <form class="kt-form" action="{{route('register')}}" method="post" id="register_form">
                            @csrf
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Fullname" name="name" required data-parsley-pattern="/^[a-zA-Z]*$/" data-parsley-required-message="Full Name is required" data-parsley-trigger="keyup">
                            </div>
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off" required data-parsley-type="email"  data-parsley-required-message="Email is required" data-parsley-trigger="keyup">
                            </div>
                            <div class="input-group">
                                <input class="form-control" type="password" placeholder="Password" name="password" required data-parsley-length="[8]" data-parsley-required-message="Password is required" data-parsley-trigger="keyup">
                            </div>
                            <div class="kt-login__actions">
                                {{--kt_login_signup_submit--}}
                                <input type="submit" id="" class="btn btn-brand btn-elevate kt-login__btn-primary" value="Sign Up">&nbsp;&nbsp;
                                <button id="kt_login_signup_cancel" class="btn btn-light btn-elevate kt-login__btn-secondary">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <div class="kt-login__forgot">
                        <div class="kt-login__head">
                            <h3 class="kt-login__title">Forgotten Password ?</h3>
                            <div class="kt-login__desc">Enter your email to reset your password:</div>
                        </div>
                        <form class="kt-form" action="{{route('password.email')}}" method="post" id="forgot_form">
                            @csrf
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off" required data-parsley-type="email" data-parsley-trigger="keyup"  data-parsley-required-message="Email is required">
                            </div>
                            <div class="kt-login__actions">
                                {{--kt_login_forgot_submit--}}
                                <input type="submit" id="" class="btn btn-brand btn-elevate kt-login__btn-primary" value="Request">&nbsp;&nbsp;
                                <button id="kt_login_forgot_cancel" class="btn btn-light btn-elevate kt-login__btn-secondary">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <div class="kt-login__account">
								<span class="kt-login__account-msg">
									Don't have an account yet ?
								</span>
                        &nbsp;&nbsp;
                        <a href="javascript:;" id="kt_login_signup" class="kt-login__account-link">Sign Up!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end:: Page -->

<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": [
                    "#c5cbe3",
                    "#a1a8c3",
                    "#3d4465",
                    "#3e4466"
                ],
                "shape": [
                    "#f0f3ff",
                    "#d9dffa",
                    "#afb4d4",
                    "#646c9a"
                ]
            }
        }
    };
</script>

<!-- end::Global Config -->
<!--begin::Global Theme Bundle(used by all pages) -->
<!--begin:: Vendor Plugins -->
{{--<script src="{{asset('assets/plugins/parsley.js')}}" type="text/javascript"></script>--}}
<script src="assets/plugins/general/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="assets/plugins/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<script src="assets/plugins/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>

<script src="assets/plugins/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
<script src="assets/plugins/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
<script src="assets/plugins/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
<script src="assets/plugins/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
<script src="assets/plugins/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
<script src="assets/plugins/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
<script src="assets/plugins/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
<script src="assets/plugins/general/autosize/dist/autosize.js" type="text/javascript"></script>
<script src="assets/plugins/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
<script src="assets/plugins/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
<script src="assets/plugins/general/js/global/integration/plugins/dropzone.init.js" type="text/javascript"></script>
<script src="assets/plugins/general/quill/dist/quill.js" type="text/javascript"></script>
<script src="assets/plugins/general/@yaireo/tagify/dist/tagify.polyfills.min.js" type="text/javascript"></script>
<script src="assets/plugins/general/@yaireo/tagify/dist/tagify.min.js" type="text/javascript"></script>
<script src="assets/plugins/general/summernote/dist/summernote.js" type="text/javascript"></script>
<script src="assets/plugins/general/markdown/lib/markdown.js" type="text/javascript"></script>
<script src="assets/plugins/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="assets/plugins/general/js/global/integration/plugins/bootstrap-markdown.init.js" type="text/javascript"></script>
<script src="assets/plugins/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
<script src="assets/plugins/general/js/global/integration/plugins/bootstrap-notify.init.js" type="text/javascript"></script>
<script src="assets/plugins/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<script src="assets/plugins/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
<script src="assets/plugins/general/js/global/integration/plugins/jquery-validation.init.js" type="text/javascript"></script>
<script src="assets/plugins/general/toastr/build/toastr.min.js" type="text/javascript"></script>
<script src="assets/plugins/general/dual-listbox/dist/dual-listbox.js" type="text/javascript"></script>
<script src="assets/plugins/general/raphael/raphael.js" type="text/javascript"></script>
<script src="assets/plugins/general/morris.js/morris.js" type="text/javascript"></script>
<script src="assets/plugins/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
<script src="assets/plugins/general/plugins/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
<!--end:: Vendor Plugins -->
<script src="assets/js/scripts.bundle.js" type="text/javascript"></script>
<!--end:: Vendor Plugins for custom pages -->
<!--end::Global Theme Bundle -->
<!--begin::Page Scripts(used by this page) -->
<script src="assets/js/pages/custom/login/login-general.js" type="text/javascript"></script>
<!--end::Page Scripts -->

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
{{--<script src="http://parsleyjs.org/dist/parsley.js"></script>--}}
<script src="{{asset('js/parsley.min.js')}}"></script>
<script src="{{asset('js/parsley.js')}}"></script>
<script>
    $(document).ready(function() {
//        alert("sdfsdf");
        $('#kt-login-form').parsley();
        $('#forgot_form').parsley();
        $('#register_form').parsley();

    });
</script>
</body>
<!-- end::Body -->
</html>

