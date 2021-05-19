<!DOCTYPE html>
<html lang="es">


<!-- Mirrored from www.radixtouch.in/templates/logicswave/ality/source/light/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Nov 2020 05:20:57 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Ality - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="/template/assets/bundles/select2/dist/css/select2.min.css">
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
                <div class="col-md-4 p-0 d-none d-md-block">
                    <div class="login_background">
                        <img src="/img/drone_background_02.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-8 auth-content register d-flex justify-content-center align-items-center flex-column">
                    <div class="card card-primary">
                        <div class="card-header">
                          <h4>Registro de usuarios</h4>
                        </div>
                        <div class="card-body">
                          <form method="POST" action="{{ route('register') }}" >
                            @csrf
                            <div class="row">
                              <div class="form-group col-6">
                                <label for="frist_name">Nombre</label>
                                <input id="frist_name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                              <div class="form-group col-6">
                                <label for="last_name">Apellido</label>
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="email">Email</label>
                              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                              @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row">
                              <div class="form-group col-6">
                                <label for="password" class="d-block">Contraseña</label>
                                <input id="password" type="password" class="form-control pwstrength" name="password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                              <div class="form-group col-6">
                                <label for="password2" class="d-block">Confirmar contraseña</label>
                                <input id="password2" type="password" class="form-control" name="password_confirmation">
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-6">
                                <label>Profesión</label>
                                <select class="form-control select2" name="profession" value="{{ old('profession') }}">
                                    @forelse ($professions as $key => $profession)
                                        <option value="{{ $profession->id }}">{{ $profession->name }}</option>
                                    @empty
                                        <option value="Agronomo">Otros</option>
                                    @endforelse
                                </select>
                              </div>
                              <div class="form-group col-6">
                                <label>Productos de interes</label>
                                <select class="form-control select2" multiple="" name="des_product[]" >
                                    @forelse ($categories as $key => $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @empty
                                        <option value="0">Otros</option>
                                    @endforelse
                                </select>
                                <p class="small">Eliga algunos metodos de pagos mas comodos para realizar sus pagos.</p>
                              </div>
                            </div>
                            {{-- <div class="form-group">
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                              </div>
                            </div> --}}
                            <div class="form-group">
                              <button type="submit" class="btn btn-primary btn-lg btn-block">
                                Registrarse
                              </button>
                            </div>
                          </form>
                        </div>
                        <div class="mb-4 text-muted text-center">
                          Ya estas registrado? <a href="/login">Login</a>
                        </div>
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
  <script src="/template/assets/bundles/select2/dist/js/select2.full.min.js"></script>
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
{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
