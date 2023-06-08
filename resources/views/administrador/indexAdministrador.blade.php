@extends('layouts.masterAdministrador')
@section('nav-administrador')
<div class="container-fluid">
    <div class="row">
        <div class="col col-12 col-sm-4 p-3">
            <h4 class="fw-normal text-center mb-3">Ingrese Estudiante</h4>
            <div class="card p-3">
                <form method="POST" action="{{route('administrador.store')}}">
                    @csrf
                    <div class="container">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="rut" class="form-label">Rut</label>
                                <input type="text" class="form-control" id="rut" name="rut" placeholder="Ej: 12345678-9">
                            </div>
                            <div class="col-6">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: Juan">
                            </div>
                            <div class="col-6">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ej: Vera">
                            </div>
                            <div class="col-12">                
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Ej: name@example.com">                            
                            </div>
                            <div class="d-flex justify-content-between">            
                                <button class="btn btn-secondary" type="reset">Limpiar</button>
                                <button class="btn btn-primary" type="submit">Subir</button>
                            </div>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
        <div class="col col-12 col-sm-8 p-3">
            <h4 class="fw-normal text-center mb-3">Estudiantes Registrados</h4>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Rut</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($estudiantes as $var=>$estudiantes)
                    <tr>
                        <td>{{$estudiantes->rut}}</td>
                        <td>{{$estudiantes->nombre}}</td>
                        <td>{{$estudiantes->apellido}}</td>
                        <td>{{$estudiantes->email}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
    
</div>
@endsection