@extends('layouts.masterProfesor')

@section('nav-profesor')

<div class="container">
    <h1>Seleccionar Profesor</h1>

    <form action="{{route('profesor.comentario')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="profesor">Selecciona un profesor:</label>
            <select class="form-control" id="profesor" name="profesor">
                <option selected>Rut - Nombre</option>
                @foreach ($profesores as $profesores)
                    <option value="{{$profesores->rut}}">{{$profesores->rut.' - '.$profesores->nombre.' '.$profesores->apellido}}</option>
                @endforeach
            </select>
        </div>
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
                        <td>{{$propuestas->estado}}</td>
                        <td>
                            <button class="btn btn-primary" type="submit">ver</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </form>

    
</div>


@endsection