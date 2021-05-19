@extends('layouts.main')

@section('main_content')

<section class="section">

    <div class="section-header">
      <h1>Usuarios dentro del sistema</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">admin</a></div>
        <div class="breadcrumb-item">usuarios</div>
      </div>
    </div>

    <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Tabla de usuarios</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped" id="table-1">
                    <thead>
                      <tr>
                        <th>Nombre y apellido</th>
                        <th>Email</th>
                        <th>Foto</th>
                        <th>Fecha</th>
                        <th>Status</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($usuarios as $key => $user)
                        <tr>
                            <td>{{ $user->name.' '.$user->last_name }}</td>
                            <td class="align-middle"> <a href="mailto:{{ $user->email }}">{{ $user->email }}</a> </td>
                            <td>
                              <img alt="image" src="/template/assets/img/users/user-5.png" width="35">
                            </td>
                            <td>{{ $user->created_at->diffForHumans()}}</td>
                            <td>
                              <div class="badge badge-shadow text-capitalize {{ ($user->user_status === 'activado')?'badge-success':'badge-warning' }}">{{ $user->user_status}}</div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">Detalle</a>
                                <a href="{{ url('dashboard/admin/activate-user', $user->id) }}" class="btn daterange-btn icon-left btn-icon {{ ($user->user_status === 'activado')?'btn-secondary disabled':'btn-success '}} "><i class="fas fa-user-check"></i>Activar usuario</a>
                            </td>
                          </tr>
                        @empty
                            sin usuarios
                        @endforelse
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

@endsection
