@extends('layouts.main')

@section('main_content')
@php
  use App\Models\Company;
@endphp

<section class="section">

    <div class="section-header">
      <h1>Bienvenido puedes registrarte</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">empresas</a></div>
        <div class="breadcrumb-item">checkin</div>
      </div>
    </div>
    <div class="bg bg-white text-warning p-3 d-flex justify-content-lg-around mb-4">
      <h5 class="m-0" ><strong>Tipo de evento:</strong> {{ $event->type }}</h5>
      <h5 class="m-0"><strong>Empresa:</strong> {{Company::Where('id', $event->company_id)->first()->company_name }}</h5>
    </div>
    <div class="container py-3">
      <div class="row justify-content-around align-items-center">
        <div class="col-md-5">
            <div class="form-check-in">
                <form action="">
                    <div class="row g-3">
                        <div class="col px-0">
                          <input id="ci_numer" type="text" class="form-control" placeholder="C.I. Numero" aria-label="First name">
                          <label for="ci_number">Ingrese su numero de CI {{ $event->id }}</label>
                        </div>
                    </div>
                    <div class="row py-3 justify-content-around py-md-5">
                        <div class="form-check radio_btn">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                <p>30° - 34°</p>
                              <img src="/img/confused.svg" alt="">
                            </label>
                        </div>
                        <div class="form-check radio_btn">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                <p>35° - 37°</p>
                              <img src="/img/confused.svg" alt="">
                            </label>
                        </div>
                        <div class="form-check radio_btn">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">
                                <p>38° - 40°</p>
                              <img src="/img/confused.svg" alt="">
                            </label>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg w-100">Realizar checkIn</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <h3>Escanear código QR</h3>
            <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/QR_code_for_mobile_English_Wikipedia.svg/1200px-QR_code_for_mobile_English_Wikipedia.svg.png" alt="">
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="card">
          <div class="card-body text-center">
            <div class="mb-2">Success Message</div>
            <button class="btn btn-primary" id="swal-2">Launch</button>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
@section('custon_js')
<script src="assets/bundles/sweetalert/sweetalert.min.js"></script>
<script src="/template/assets/js/page/sweetalert.js"></script>
@endsection
