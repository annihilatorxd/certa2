@extends('layouts.masterAdministrador')
@section('nav-administrador')
<div class="container-fluid">
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
                    @if($propuestas->estado==0)<td>En espera</td>
                        @elseif($propuestas->estado==1)<td>Modificar Propuesta</td>
                        @elseif($propuestas->estado==2)<td>Rechazado</td>
                        @elseif($propuestas->estado==3)<td>Aceptado</td>
                        @endif
                    <td>
                        <form action="{{route('administrador.propuestaEstado')}}" method="POST">
                            @csrf
                            @method('PUT')
                            <select class="form-select" name="estado" id="estado">
                                <option selected>Estado revision</option>
                                <option value=0>Aceptado</option>
                                <option value=1>Necesita modificaciones</option>
                                <option value=2>Rechazado</option>
                                <option value=3>En espera</option>
                            </select>
                            <button type="submit" class="btn btn-primary mt-2" >Enviar</button></button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
</div>
@endsection