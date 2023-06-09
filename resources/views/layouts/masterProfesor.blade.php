<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
        body {
            background-color: #ffc107;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #343a40;
            border: none;
        }

        .navbar-brand {
            margin-right: 1rem;
        }

        .navbar-nav {
            margin-left: auto;
        }

        .nav-item {
            padding: 0;
        }

        .nav-link {
            padding: 1rem;
            color: #fff;
        }

        .nav-link:hover,
        .nav-link:focus {
            color: #fff;
            background-color: transparent;
        }

        .content {
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
        }
    </style>

    <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark" aria-label="Tenth navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Profesor</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-sm-center" id="navbarsExample08">
        <ul class="navbar-nav">
          
          <li class="nav-item">
            <a class="nav-link" href="{{route('inicio.index')}}">Cerrar sesión</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
      
  <div class="content">
    @yield('nav-profesor')
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
