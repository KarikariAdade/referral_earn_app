<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kapella Bootstrap Admin Dashboard Template</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/base/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>
<body>
    <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="main-panel">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                  <img src="../../images/logo.svg" alt="logo">
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>
                <form class="pt-3" action="{{ route('login_member') }}" method="POST">

                  @if($errors->any() > 0)
                        @foreach($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{ $error }}
                        </div>
                        @endforeach
                        @endif

                    @csrf
                    @method('POST')
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" name="email" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                  </div>
                  <div class="mt-3">
                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN IN</button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input">
                        Keep me signed in
                      </label>
                    </div>
                    <a href="#" class="auth-link text-black">Forgot password?</a>
                  </div>
                  <div class="mb-2">
                    <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                      <i class="mdi mdi-facebook mr-2"></i>Connect using facebook
                    </button>
                  </div>
                  <div class="text-center mt-4 font-weight-light">
                    Don't have an account? <a href="{{ route('signup') }}" class="text-primary">Create</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="{{ asset('assets/vendors/base/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{ asset('assets/js/template.js')}}"></script>
  <!-- endinject -->
   <!--  <div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="auth_form_section">
                        <figure class="">
                            <img class="" src="{{ asset('website/images/logo1.png')}}">
                        </figure>

                        <h6 class="text-center">Login to Your Portal</h6>
                        @if($errors->any() > 0)
                        @foreach($errors->all() as $error)
                        <div class=" alert-error">
                            {{ $error }}
                        </div>
                        @endforeach
                        @endif
                        <form method="POST" action="{{ route('login_member') }}">
                            @csrf
                            <div class="wrapper">
                              <input type="email" name="email" placeholder="{{ __('E-Mail Address') }}" required autocomplete="email" autofocus>
                          </div>
                          <div class="wrapper">
                            <input type="password" name="password" placeholder="{{ __('Password') }}" required autocomplete="current-password">
                        </div>
                        <div class="row">
                            @if (Route::has('password.request'))
                            <div class="col-md-6">
                                {{--                              <small><a href="{{ route("member.password_reset") }}"> {{ __('Forgot Your Password?') }}</a></small>--}}
                            </div>
                            @endif
                            <div class="col-md-6" align="right">
                              <small><a href="{{ route('signup') }}">Don't have an account?</a></small>
                          </div>
                      </div>
                      <p align="center"><button type="submit" class="btn btn-style-5">{{ __('Login') }}</button></p>
                      <p align="center">
                        <small>
                            {{--                            <a href="{{ route('home_page') }}">Go Home</a>--}}
                        </small>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
</div> -->
</body>
</html>
