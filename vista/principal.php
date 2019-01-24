<!DOCTYPE html>
<?php
include_once 'Database.php';
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>AMAZON UTN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  <title>pjj</title>

  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">AMAZON UTN </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="#">Productos</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="¿Qué estas buscando?" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>

        </div>
    </nav>
  </br>

  <div class="container">
    <div class="alert alert-success">
      <a href="#" class="badge badge-success">Ver carrito</a>
    </div>
    <div class="row">
      <div class="col-3">

        <div class="card" >
          <img class="card-img-top" src="https://www.familiasnumerosascv.org/wp-content/uploads/2015/05/icono-camara.png">
            <div class="card-body">
              <h5 class="card-title">Nombre del producto</h5>
              <p class="card-text">$100</p>
              <p class="card-text">Descripción</p>
              <a href="#" class="btn btn-primary">Añadir al carrito</a>
            </div>
          </div>

        </div>

      </div>
    </div>

</html>
