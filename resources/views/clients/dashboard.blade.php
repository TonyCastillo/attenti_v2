@extends('layouts.main')

@section('main_content')

<section class="section">

    <div class="section-header">
      <h1>Dashboar de proyectos</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">projects</a></div>
        <div class="breadcrumb-item">new-project</div>
      </div>
    </div>
    <div class="container py-3">
      <div class="row justify-content-center">
        <div class="col-md-2">
          <div class="box-tools shadow">
            <div class="icon"><img src="/img/qr-code.svg" alt=""></div>
            <p>Escanear codigo</p>
          </div>
        </div>
        <div class="col-md-2">
          <div class="box-tools shadow">
            <div class="icon"><img src="/img/qr-code.svg" alt=""></div>
            <p>Checkin realizados</p>
          </div>
        </div>
        <div class="col-md-2">
          <div class="box-tools shadow">
            <div class="icon"><img src="/img/qr-code.svg" alt=""></div>
            <p>Mi perfil</p>
          </div>
        </div>
        <div class="col-md-2">
          <div class="box-tools shadow">
            <div class="icon"><img src="/img/qr-code.svg" alt=""></div>
            <p>Escanear codigo</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center pt-5">
        <div class="col-md-3 text-center">
          <a href="" class="btn btn-primary btn-covid-allert">Confirmar contacto positivo</a>
        </div>
      </div>
    </div>
  </section>

@endsection
