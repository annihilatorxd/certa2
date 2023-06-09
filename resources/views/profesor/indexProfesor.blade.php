@extends('layouts.masterProfesor')

@section('nav-profesor')

<div class="container">
    
    
    <h2>Propuestas de Estudiantes</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Estudiante</th>
                <th>Id Propuesta</th>
                <th>Propuesta</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($propuestas as $propuestas)
                <tr>
                    <td>{{$propuestas->estudiantes_rut}}</td>
                    <td>{{$propuestas->id}}</td>
                    <td>{{$propuestas->documento}}</td>
                    <td>{{$propuestas->fecha}}</td>
                    @if($propuestas->estado==0)<td>Esperando Resultado</td>
                        @elseif($propuestas->estado==1)<td>Modificar Propuesta</td>
                        @elseif($propuestas->estado==2)<td>Rechazado</td>
                        @elseif($propuestas->estado==3)<td>Aceptado</td>
                        @endif
                    <td>
                        <a class="btn btn-primary" href="{{route('profesor.comentario',$propuestas)}}">ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>



</div>


@endsection