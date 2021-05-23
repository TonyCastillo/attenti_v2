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
    <div class="conatainer">
      <div class="row justify-content-center">
        <div class="col-md-9">
          <div class="bg bg-white text-warning p-3 d-flex justify-content-lg-around mb-4 border rounded shadow">
            <h5 class="m-0" ><strong>Tipo de evento:</strong> {{ $event->type }}</h5>
            <h5 class="m-0"><strong>Empresa:</strong> {{Company::Where('id', $event->company_id)->first()->company_name }}</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="container py-3">
      <div class="row justify-content-around align-items-center">
        <div class="col-md-5">
            <div class="form-check-in">
                <form id="checkin_form/dos" action="{{ route('create_checkin') }}" method="POST">
                  @csrf
                    <div class="row g-3">
                        <div class="col px-0">
                          <label for="ci_number">Ingrese su numero de CI {{ $event->id }}</label>
                          <input id="ci_numer" type="text" class="form-control" placeholder="C.I. Numero" aria-label="First name" name="ci_number" required>
                        </div>
                    </div>
                    <div class="row py-3 justify-content-around py-md-5">
                        <div class="form-check radio_btn">
                            <input class="form-check-input" type="radio" name="tempRadioBtn" id="flexRadioDefault1" value="30° - 34°" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                <p>30° - 34°</p>
                              <img src="/img/confused.svg" alt="">
                            </label>
                        </div>
                        <div class="form-check radio_btn">
                            <input class="form-check-input" type="radio" name="tempRadioBtn" id="flexRadioDefault2" value="35° - 37°">
                            <label class="form-check-label" for="flexRadioDefault2">
                                <p>35° - 37°</p>
                              <img src="/img/confused.svg" alt="">
                            </label>
                        </div>
                        <div class="form-check radio_btn">
                            <input class="form-check-input" type="radio" name="tempRadioBtn" id="flexRadioDefault3" value="38° - 40°">
                            <label class="form-check-label" for="flexRadioDefault3">
                                <p>38° - 40°</p>
                              <img src="/img/confused.svg" alt="">
                            </label>
                        </div>
                        <input type="hidden" name="event_name" value="{{ $event->id }}">
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
    </div>
  @if (\Session::has('success'))
    <script>
      swal('Gracias', 'El usuario ha sido registrado!', 'success');
    </script>
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div
    @endif

@endsection
@section('custon_js')

<script>
  document.getElementById("checkin_form").addEventListener("submit", function(event){
    event.preventDefault();
    const formData = new FormData(this);
    console.log(formData);
    fetch('{{route('create_checkin')}}', {
      method: 'post',
      body: formData
    }).then(function(response){
      return response.text();
    }).then(function(text){
      swal('Good Job', 'You clicked the button!', 'success');
      console.log(text)
    }).catch(function (error){
      swal('Good Job', 'You clicked the button!', 'error');

      console.error(error);
    })

  });
  
  $("#swal-2").click(function() {
	  swal('Good Job', 'You clicked the button!', 'success');
  });
</script>
@endsection
