<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Login Page - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin
        Dashboard
    </title>
    <link rel="apple-touch-icon" href="{{asset('backend/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
          rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/forms/icheck/custom.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/app.css')}}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/pages/login-register.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/style.css')}}">
    <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 1-column  bg-cyan bg-lighten-2 menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="1-column">
<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item">
                    <a class="navbar-brand" href="#">
                        <img class="brand-logo" alt="modern admin logo" src="{{asset('backend/app-assets/images/logo/logo.png')}}">
                        <h3 class="brand-text">Promotion Ads</h3>
                    </a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
                </li>
            </ul>
        </div>
        <div class="navbar-container">
            <div class="collapse navbar-collapse justify-content-end" id="navbar-mobile">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a class="nav-link mr-2 nav-link-label" href="index.html"><i class="ficon ft-arrow-left"></i></a></li>
                    <li class="dropdown nav-item">
                        <a class="nav-link mr-2 nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-settings"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="content-body">
    <section class="flexbox-container">
        <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
                <div class="card border-grey border-lighten-3 m-0">
                    <div class="card-header border-0 pb-0">
                        <div class="card-title text-center">
                            <img src="{{asset('backend/app-assets/images/logo/logo-dark.png')}}" alt="branding logo">
                        </div>
                        <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                            <span>Please Sign Up</span>
                        </h6>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{route('register.store')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-6">
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" name="fname" class="form-control @error('fname') is-invalid @enderror" value="{{old('fname')}}" placeholder="First Name" tabindex="1">
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6">
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" name="lname" class="form-control @error('lname') is-invalid @enderror" value="{{old('lname')}}" placeholder="Last Name" tabindex="2">
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <fieldset class="form-group position-relative has-icon-left">
                                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{old('username')}}" placeholder="UserName" tabindex="3">
                                    <div class="form-control-position">
                                        <i class="ft-user"></i>
                                    </div>
                                    <div class="help-block font-small-3"></div>
                                </fieldset>
                                <fieldset class="form-group position-relative has-icon-left">
                                    @error('email')
                                    <div class="alert alert-danger">email already exist</div>
                                    @enderror
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="Email Address" tabindex="4">
                                    <div class="form-control-position">
                                        <i class="ft-mail"></i>
                                    </div>
                                    <div class="help-block font-small-3"></div>
                                </fieldset>
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-6">
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Password" tabindex="5">
                                            <div class="form-control-position">
                                                <i class="la la-key"></i>
                                            </div>
                                            <div class="help-block font-small-3"></div>
                                        </fieldset>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6">
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" value="{{old('password_confirmation')}}" placeholder="Confirm Password" tabindex="6">
                                            <div class="form-control-position">
                                                <i class="la la-key"></i>
                                            </div>
                                            <div class="help-block font-small-3"></div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-6">
                                        <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-user"></i> Register</button>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6">
                                        <a href="{{route('login')}}" class="btn btn-danger btn-lg btn-block"><i class="ft-unlock"></i> Login</a>
                                    </div>
                                </div>
                                <script>
                                    var password = document.getElementById("password")
                                        , password_confirmation = document.getElementById("password_confirmation");

                                    function validatePassword(){
                                        if(password.value != password_confirmation.value) {
                                            password_confirmation.setCustomValidity("confirm password not match with password");
                                        }  else{
                                            password_confirmation.setCustomValidity('');
                                        }
                                    }
                                    password.onchange = validatePassword;
                                    password_confirmation.onkeyup = validatePassword;
                                </script>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<footer class="footer fixed-bottom footer-dark navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright © 2020  <a class="text-bold-800 grey darken-2" href="#"
          >Promotion Ads </a>, All rights reserved. </span>
        <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Version 1.1.1 Alpha <i class="ft-heart pink"></i></span>
    </p>
</footer>
<!-- BEGIN VENDOR JS-->
<script src="{{asset('backend/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('backend/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"
        type="text/javascript"></script>
<script src="{{asset('backend/app-assets/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{asset('backend/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/app-assets/js/core/app.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('backend/app-assets/js/scripts/forms/form-login-register.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->
</body>
</html>
