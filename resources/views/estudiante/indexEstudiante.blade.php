@extends('layouts.masterEstudiante')

@section('nav-estudiante')
<div class="container py-5">
    <div class="row text-center">
        <div class="col">            
            <h4 class="fw-normal">Ingrese Propuesta</h4>
            <div class="card p-3 d-flex d-sm-inline-flex ">
                <form action="{{route('estudiante.store')}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="alumnosInput" class="form-label">Quien es usted</label>
                        <select class="form-select" name="estudiante" id="estudiante" >
                            <option selected>Rut - Nombre</option>
                            @foreach ($estudiantes as $estudiantes)
                                <option value="{{$estudiantes->rut}}">{{$estudiantes->rut.' - '.$estudiantes->nombre.' '.$estudiantes->apellido}}</option>
                            @endforeach
                            </select>
                          </select>
                    </div>
                    <div class="mb-3">
                        <label for="propuestaInput" class="form-label">Suba su propuesta</label>
                        <input class="form-control" type="file" id="propuestaInput" name="propuestaInput" accept=".pdf">
                    </div>
                    <div class="d-flex justify-content-between">            
                        <button class="btn btn-secondary mx-3" type="reset">Limpiar</button>
                        <button class="btn btn-primary mx-3" type="submit">Subir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
