@extends('layouts.main')

@section('main_content')

<section class="section">

    <div class="section-header">
      <h1>Elige una empresa para iniciar el checkIn de usuarios</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">projects</a></div>
        <div class="breadcrumb-item">new-project</div>
      </div>
    </div>
    <div class="container py-3">
      <div class="row justify-content-center">
        @isset($companies)
            @forelse ($companies as $company)
                <a href="">
                    <div class="col-md-2">
                        <div class="box-tools companies shadow">
                            <div class="icon"><img src="/img/restaurant.svg" alt=""></div>
                            <p>{{ $company->company_name }}</p>
                        </div>
                    </div>
                </a>
            @empty
                
            @endforelse
        @endisset
      </div>
    </div>
  </section>

@endsection
