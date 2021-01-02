{{--  <!DOCTYPE html>
<html>
<head>
    <title>Watered Garden Church | Login</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900%7CLora:400,400i,700,700i" rel="stylesheet">

    <!--meta info-->
    <meta charset="utf-8">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

  <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('website/css/responsive.css')}}">
    <!-- Addition of Custom css file -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/custom.responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/all.min.css') }}">
    <script type="text/javascript" src="{{ asset('website/js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</head>
<body class="auth_bg">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="auth_form_section">
                        <figure class="">
                            <img class="" src="{{ asset('website/images/logo1.png')}}">
                        </figure>

                        <h6 class="text-center">Reset Your Password</h6>
                        @if($errors->any() > 0)
                        @foreach($errors->all() as $error)
                        <div class=" alert-error">
                            {{ $error }}
                        </div>
                        @endforeach
                        @endif
                        <form method="POST" action="api/password/reset">
                            @csrf
                            <div class="wrapper">
                              <input type="email" name="email" placeholder="{{ __('E-Mail Address') }}" required autocomplete="email" value="{{ request()->get('email') }}" autofocus>
                              <input hidden type="text" name="token" placeholder="{{ __('E-Mail Address') }}" required autocomplete="token" value="{{ request()->get('token') }}" autofocus>

                              <button type="submit" class="btn btn-style-5">{{ __('Send Password Reset Link') }}</button>
                          </div>
                      <p align="center">
                        <small>
                            <a href="{{ route('home_page') }}">Go Home</a>
                        </small>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>  --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="api/password/reset">
                        @csrf

                        <input type="hidden" name="token" value="{{ request()->get('token') }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
