<!DOCTYPE html>
<html lang="es">


<!-- Mirrored from www.radixtouch.in/templates/logicswave/ality/source/light/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Nov 2020 05:20:57 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Ality - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="/template/assets/css/app.min.css">
  <link rel="stylesheet" href="/template/assets/bundles/jquery-selectric/selectric.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="/template/assets/css/style.css">
  <link rel="stylesheet" href="/template/assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="/template/assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='/template/assets/img/favicon.ico' />

  {{-- maincss --}}
  <link rel="stylesheet" href="/css/main.css">

</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section login-register_drone">
        <div class="container-fluid">
            <div class="row h-100 align-items-center">
                <div class="col-md-6 p-0 d-none d-md-block">
                    <div class="login_background">
                        <img src="/img/drone_background_01.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6 auth-content d-flex justify-content-center align-items-center flex-column">
                    <div class="card card-primary">
                        <div class="card-header">
                          <h4>Login</h4>
                        </div>
                        <div class="card-body">
                          <form  method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                            @csrf
                            <div class="form-group">
                              <label for="email">Email</label>
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              <div class="invalid-feedback">
                                Please fill in your email
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="d-block">
                                <label for="password" class="control-label">Password</label>
                                {{-- <div class="float-right">
                                  <a href="auth-forgot-password.html" class="text-small">
                                    Forgot Password?
                                  </a>
                                </div> --}}
                              </div>
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              <div class="invalid-feedback">
                                please fill in your password
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                <label class="custom-control-label" for="remember-me">Remember Me</label>
                              </div>
                            </div>
                            <div class="form-group">
                              <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                Login
                              </button>
                            </div>
                          </form>
                        </div>
                    </div>
                    <div class="mt-5 text-muted text-center">No tienes una cuenta? <a href="{{ url('/register') }}" class="text-bold">Registrarse</a>
                    </div>
                </div>
            </div>
        </div>
      {{-- <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">

          </div>
        </div>
      </div> --}}
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="/template/assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="/template/assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="/template/assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="/template/assets/js/page/auth-register.js"></script>
  <!-- Template JS File -->
  <script src="/template/assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="/template/assets/js/custom.js"></script>
</body>


<!-- Mirrored from www.radixtouch.in/templates/logicswave/ality/source/light/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Nov 2020 05:20:58 GMT -->
</html>

{{-- @extends('layouts.main')

@section('main_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
