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
      <div class="row">
        <div class="col-md-3 border border-danger">
          <div class="box-tools shadow">
            <div class="icon"><img src="/img/qr-code.svg" alt=""></div>
            <p>Escanear codigo</p>
          </div>
        </div>
        <div class="col-md-3 border border-danger">
          <div class="box-tools shadow">
            <div class="icon"><img src="/img/qr-code.svg" alt=""></div>
            <p>Escanear codigo</p>
          </div>
        </div>
        <div class="col-md-3 border border-danger">
          <div class="box-tools shadow">
            <div class="icon"><img src="/img/qr-code.svg" alt=""></div>
            <p>Escanear codigo</p>
          </div>
        </div>
        <div class="col-md-3 border border-danger">
          <div class="box-tools shadow">
            <div class="icon"><img src="/img/qr-code.svg" alt=""></div>
            <p>Escanear codigo</p>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
