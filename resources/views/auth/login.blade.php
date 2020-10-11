<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="/Panel/img/favicon.html">

    <title>FlatLab - Flat & Responsive Bootstrap Admin Template</title>
    <!-- Bootstrap core CSS -->
    <link href="/Panel/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Panel/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link rel="stylesheet" type="text/css" href="/Site/css/font-awesome/css/font-awesome.min.css"/>
    <!-- Custom styles for this template -->
    <link href="/Panel/css/style.css" rel="stylesheet">
    <link href="/Panel/css/style-responsive.css" rel="stylesheet"/>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="/Panel/js/html5shiv.js"></script>
    <script src="/Panel/js/respond.min.js"></script>
    <![endif]-->


</head>
<body>

<div class="container">
    <div class="row justify-content-center">

        <img src="/Panel/img/logo.png" width="150" height="150" alt="" class="academyitLogo"/>

        <form class="form-signin" action="{{ route('login') }}" method="POST">
            @csrf
            <h2 class="form-signin-heading">همین حالا وارد شوید</h2>
            <div class="login-wrap">
                <input type="tel" class="form-control @error('email') is-invalid @enderror"
                       placeholder="شماره موبایل" name="email"
                       value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                       name="password"
                       required autocomplete="current-password"
                       placeholder="کلمه عبور">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label class="checkbox">
                    <input class="form-check-input" type="checkbox" name="remember"
                           id="remember" {{ old('remember') ? 'checked' : '' }}>
                    مرا به خاطر بسپار
                    <span class="pull-left">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                 کلمه عبور را فراموش کرده اید؟
                            </a>
                        @endif
                    </span>
                </label>
                <button class="btn btn-lg btn-login btn-block" type="submit" name="btn">ورود</button>
                <a href="{{url('/login/google')}}" class="btn btn-lg btn-block" name="btn"><i class="fa fa-icon-google-plus"></i>ورود با حساب گوگل</a>
            </div>

        </form>
    </div>
</div>
</body>