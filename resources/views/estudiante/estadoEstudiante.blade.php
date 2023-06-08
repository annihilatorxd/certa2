@extends('layouts.masterEstudiante')
@section('nav-estudiante')
<head>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container mt-5">
      <h2>Seleccionar Estudiante</h2>
      <div class="form-group">
        <select class="form-control" id="selectEstudiante">
          <option>Estudiante 1</option>
          
          <!-- Agrega más opciones de estudiantes según sea necesario -->
        </select>
      </div>
  
      <h2>Comentarios del Profesor</h2>
      <div class="card mt-4">
        <div class="card-header">
          <h5>Comentario 1</h5>
        </div>
        <div class="card-body">
          <p>Este es el comentario del profesor sobre tu proyecto.</p>
        </div>
      </div>
      
  
      <h2>Estado del Proyecto</h2>
      <div class="alert alert-success mt-4" role="alert">
        Aceptado: Tu proyecto ha sido aceptado.
      </div>
  
      <!-- Agrega más tarjetas de comentarios o estados del proyecto según sea necesario -->
  
    </div>
  </body>
@endsection