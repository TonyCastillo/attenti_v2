@extends('layouts.main')

@section('main_content')

<section class="section">
    <div class="section-header">
      <h1>Editar datos de empresa</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Empresas</a></div>
        <div class="breadcrumb-item">Editar</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card">
            <form action="" method="POST">
              @csrf
              <div class="card-header">
                <h4>Edita los campos necesarios</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="name">Nombre empresa*</label>
                    <input id="name" type="text" class="form-control" name="company_name" value="{{ $company->company_name }}" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="name">Email empresa*</label>
                    <input id="name" type="text" class="form-control" name="company_name" value="{{ $company->email }}" required>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="razon_social">Razon Social *</label>
                    <input id="razon_social" type="text" class="form-control" name="razon_social"  required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="ruc">RUC *</label>
                    <input id="ruc" type="text" class="form-control" name="ruc"  required>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="descriptions">Descripción</label>
                    <textarea id="descriptions" class="form-control" name="description">{{ $company->description }}</textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="email">Email de la empresa *</label>
                    <input id="email" type="text" class="form-control" name="email" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="phone">Teléfono *</label>
                    <input id="phone" type="tel" class="form-control" name="phone" required>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-4">
                    <label for="departament">Departamento</label>
                      <select class="form-control select2" name="departament">
                        <option value="central">Central</option>
                        <option value="Concepción">Concepción</option>
                        <option value="San Pedro">San Pedro</option>
                        <option value="Cordillera">Cordillera</option>
                        <option value="Guairá">Guairá</option>
                        <option value="Caaguazú">Caaguazú</option>
                        <option value="Caazapá">Caazapá</option>
                        <option value="Itapúa">Itapúa</option>
                        <option value="Misiones">Misiones</option>
                        <option value="Paraguarí">Paraguarí</option>
                        <option value="Alto Paraná">Alto Paraná</option>
                        <option value="Ñeembucú">Ñeembucú</option>
                        <option value="Amambay">Amambay</option>
                        <option value="Amambay">Canindeyú</option>
                        <option value="Presidente Hayes">Presidente Hayes</option>
                        <option value="Boquerón">Boquerón</option>
                        <option value="Alto Paraguay">Alto Paraguay</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="city">Ciudad</label>
                    <input id="city" type="tel" class="form-control" name="city" >
                  </div>
                  <div class="form-group col-md-4">
                    <label for="barrio">Barrio</label>
                    <input id="barrio" type="tel" class="form-control" name="barrio" >
                  </div>
                </div>
  
                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="address">Dirección *</label>
                    <input id="address" type="text" class="form-control" name="address" required >
                  </div>
                </div>
                {{-- <div class="row">
                  <div class="form-group col-md-6">
                    <label>Rubro al que pertenece la empresa *</label>
                    <select class="form-control select2" name="rubro">
                      @foreach ($rubros as $rubro)
                        <option value="{{ $rubro->id }}">{{ $rubro->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group col-md-2 d-flex justify-content-center flex-column">
                    <label>Agregar rubro</label>
                    <a href="#" class="btn btn-primary">+</a>
                  </div>
                </div> --}}
                <div style="border: solid 1px gray; margin: 20px 0"></div>
                <h5>Administracion</h5>
                <p>Agregar usuario administrador para la empresa</p>
                <div class="row">
                    <div class="form-group col-md-3">
                      <label for="user_email">Nombre del usuario *</label>
                      <input id="user_email" type="text" class="form-control" name="user_name"  required>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="user_last_name">Apellido *</label>
                      <input id="user_last_name" type="text" class="form-control" name="user_last_name"  required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="user_ruc">Email *</label>
                      <input id="user_ruc" type="text" class="form-control" name="user_email"  required>
                    </div>
                </div>
              </div>
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary">Crear distribuidora</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  
</section>

@endsection

