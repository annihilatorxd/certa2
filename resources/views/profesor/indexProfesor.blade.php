@extends('layouts.masterProfesor')

@section('nav-profesor')

<div class="container">
    <h1>Seleccionar Profesor</h1>

    <form>
        <div class="form-group">
            <label for="profesor">Selecciona un profesor:</label>
            <select class="form-control" id="profesor" name="profesor">
                <option selected>Rut - Nombre</option>
                @foreach ($profesores as $profesores)
                    <option value="{{$profesores->rut}}">{{$profesores->rut.' - '.$profesores->nombre.' '.$profesores->apellido}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-dark mt-2">Ver Propuestas</button>
    </form>

    <h2>Propuestas de Estudiantes</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Estudiante</th>
                <th>Propuesta</th>
                <th>Comentarios</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Estudiante 1</td>
                <td>Propuesta 1</td>
                <td>
                    <ul class="list-unstyled">
                        <li>Comentario 1</li>
                        <li>Comentario 2</li>
                        <li>Comentario 3</li>
                    </ul>
                </td>
                <td>
                    <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#comentariosModal">Agregar Comentario</a>
                    <a href="#" class="btn btn-danger">Eliminar</a>
                </td>
            <
        </tbody>
    </table>
</div>
--

<div class="modal fade" id="comentariosModal" tabindex="-1" role="dialog" aria-labelledby="comentariosModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="comentariosModalLabel">Agregar Comentario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="comentario">Comentario:</label>
                        <textarea class="form-control" id="comentario" name="comentario" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection