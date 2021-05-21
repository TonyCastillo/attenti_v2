@extends('layouts.main')

@section('main_content')

<section class="section">

    <div class="section-header">
        <h1>Mi Perfil</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item">Mi perfil</div>
        </div>
      </div>
      <div class="section-body">
        <div class="row mt-sm-4">
            <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                  <div class="padding-20">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab"
                          aria-selected="true">Editar Perfil</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab"
                          aria-selected="false">Pagos realizdos</a>
                      </li>
                    </ul>
                    <div class="tab-content tab-bordered" id="myTab3Content">
                      <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                        <form method="post" action="{{ route('profile_edit') }}" class="needs-validation">
                            @csrf
                            <div class="card-header">
                              <h4>Editar mi perfil</h4>
                            </div>
                            <div class="card-body px-1">
                              <div class="row">
                                <div class="form-group col-md-6 col-12">
                                  <label>Nombre</label>
                                  <input id="frist_name" type="text" class="form-control" name="name" value="{{ $user->name }}" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 col-12">
                                  <label>Apellido</label>
                                  <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $user->last_name }}">
                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                              </div>
                              <div class="row">
                                <div class="form-group col-md-7 col-12">
                                  <label>Email</label>
                                  <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}">
                                    @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-group col-md-5 col-12">
                                  <label>Teléfono</label>
                                  <input type="tel" class="form-control" value="{{ $user->telf }}" name="telf">
                                </div>
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
                                <div class="form-group col-12">
                                  <label>Bio</label>
                                  <textarea
                                    class="form-control summernote-simple">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur voluptatum alias molestias minus quod dignissimos.</textarea>
                                </div>
                              </div>
                            </div>
                            <div class="card-footer text-right">
                              <button class="btn btn-primary" type="submit">Guardar cambios</button>
                            </div>
                          </form>
                      </div>
                      <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                        <p class="mt-5">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo neque enim reprehenderit est ipsa dignissimos quia iusto quas asperiores voluptas minus repudiandae corporis adipisci in nemo, et nisi, aliquid ad.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <div class="col-12 col-md-12 col-lg-5">
            <div class="card author-box">
              <div class="card-body">
                <div class="author-box-center">
                  <img alt="image" src="/img/avatar-demo.gif" class="rounded-circle author-box-picture">
                  <div class="clearfix"></div>
                  <div class="author-box-name">
                    <a href="javascript:void(0)">{{ $user->name.' '.$user->last_name }}</a>
                  </div>
                  <div class="author-box-job">{{ ($user->roles()->first()->name == 'admin') ? 'Administrador' : $user->profession }}</div>
                </div>
                <div class="text-center">
                  <div class="author-box-description">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur voluptatum alias molestias
                      minus quod dignissimos.
                    </p>
                  </div>
                  <div class="mb-2 mt-3">
                    <div class="text-small font-weight-bold">Gracias por estar aquí 8)</div>
                  </div>
                  <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                  <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                    <i class="fab fa-twitter"></i>
                  </a>
                  <a href="#" class="btn btn-social-icon mr-1 btn-github">
                    <i class="fab fa-github"></i>
                  </a>
                  <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                    <i class="fab fa-instagram"></i>
                  </a>
                  <div class="w-100 d-sm-none"></div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h4>Detalle de usuario</h4>
              </div>
              <div class="card-body">
                <div class="py-4">
                  <p class="clearfix">
                    <span class="float-left">
                      <strong>Profesión:</strong>
                    </span>
                    <span class="float-right text-muted">
                      
                    </span>
                  </p>
                  <p class="clearfix">
                    <span class="float-left">
                      <strong>Teléfono:</strong>
                    </span>
                    <span class="float-right text-muted">
                      {{ $user->phone_number }}
                    </span>
                  </p>
                  <p class="clearfix">
                    <span class="float-left">
                      <strong>Email:</strong>
                    </span>
                    <span class="float-right text-muted">
                        {{ $user->email }}
                    </span>
                  </p>
                  <p class="clearfix">
                    <span class="float-left">
                      <strong>Fecha de ingreso:</strong>
                    </span>
                    <span class="float-right text-muted">
                        {{ $user->created_at }}
                    </span>
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

@endsection
