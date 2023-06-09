@extends('layouts.masterEstudiante')
@section('nav-estudiante')
<div class="container">
    <h1 class="mt-4">Pagina de Proyectos</h1>
    <div class="row mt-4">
      <div class="col-lg-4">
        <label for="students-select" class="form-label">Seleccionar estudiante:</label>
        <select id="students-select" class="form-select">
          
          <option selected>Rut - Nombre</option>
              @foreach ($estudiantes as $estudiantes)
                  <option value="{{$estudiantes->rut}}">{{$estudiantes->rut.' - '.$estudiantes->nombre.' '.$estudiantes->apellido}}</option>
              @endforeach
          
          
        </select>
      </div>
    </div>
    <table class="table mt-4">
      <thead>
        <tr>
          <th scope="col">Proyecto</th>
          <th scope="col">Fecha</th>
          <th scope="col">Estado</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($propuestas as $var=>$propuestas)
                    <tr>
                        <td>{{$propuestas->documento}}</td>
                        <td>{{$propuestas->fecha}}</td>
                        @if($propuestas->estado==0)<td>Esperando Resultado</td>
                        @elseif($propuestas->estado==1)<td>Modificar Propuesta</td>
                        @elseif($propuestas->estado==2)<td>Rechazado</td>
                        @elseif($propuestas->estado==3)<td>Aceptado</td>
                        @endif
                        <td><a href="#" class="btn btn-dark">Ver comentarios</a></td>
                    </tr>
         @endforeach
         
        
        
      </tbody>
    </table>
  </div>
@endsection