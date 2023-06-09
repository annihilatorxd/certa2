@extends('layouts.masterProfesor')

@section('nav-profesor')
<div class="container-fluid">
    <div class="row">
        <div class="col col-12 col-sm-4 p-3">
            <h4 class="fw-normal text-center mb-3">Ingrese Estudiante</h4>
            <div class="card p-3">
                <form method="POST" action="{{route('profesor.store')}}">
                    @csrf
                    <div class="container">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="rut" class="form-label">Profesor</label>
                                <select class="form-control" id="profesor" name="profesor">
                                    <option selected>Rut - Nombre</option>
                                    @foreach ($profesores as $profesores)
                                        <option value="{{$profesores->rut}}">{{$profesores->rut.' - '.$profesores->nombre.' '.$profesores->apellido}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="col-12">                
                                <label for="comentario" class="form-label">Comentario</label>
                                <textarea class="form-control" id="comentario" nombre = "comentario" rows="3"></textarea>                            
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
            <h4 class="fw-normal text-center mb-3"></h4>
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
                    {{-- @foreach ($estudiantes as $var=>$estudiantes)
                    <tr>
                        <td>{{$estudiantes->rut}}</td>
                        <td>{{$estudiantes->nombre}}</td>
                        <td>{{$estudiantes->apellido}}</td>
                        <td>{{$estudiantes->email}}</td>
                    </tr>
                  @endforeach --}}
                </tbody>
              </table>
        </div>
    </div>
    
</div>
@endsection