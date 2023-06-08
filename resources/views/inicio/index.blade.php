<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Document</title>
</head>
<body class="bg-body-secondary text-center">
    
    <div class="container-fluid">
        <h1 class="fw-normal">Elija Tipo de usuario</h1>
        <hr class="mb-5">
        <div class="row ">
            <div class="col-12 col-sm-4 mb-3 d-flex">
                <a class="btn btn-secondary btn-lg flex-fill" href="{{route('estudiante.indexEstudiante')}}" role="button">Estudiante</a>
            </div>
            <div class="col-12 col-sm-4 mb-3 d-flex ">
                <a class="btn btn-secondary btn-lg flex-fill" href="#" role="button">Profesor</a>
            </div>
            <div class="col-12 col-sm-4 mb-3 d-flex">
                <a class="btn btn-secondary btn-lg flex-fill" href="{{route('administrador.indexAdministrador')}}" role="button">Administrador</a>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>