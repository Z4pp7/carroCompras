<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>AMAZON UTN</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href="css/carousel.css" rel="stylesheet">
        <link href="css/navbar.css" rel="stylesheet">
    </head>
    <body>
      <nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand" href="../index.php"><i class="icon fas fa-ghost"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="../index.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="productos.php">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contacto.php">Contáctanos</a>
            </li>
            </ul>
                    <a class="nav-link" href="registro.php">Registrarse</a>
            <a class="nav-link-user" href="ingresar.php">Ingresar</a>
        </div>
      </nav>
        <div class="container">

            <form action="../controlador/ControladorPrincipal.php">

                <div class="form-group">
                    <label for="formGroupExampleInput">Cédula</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Cédula" name="cedula">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Nombres</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nombres" name="nombres">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Apellidos</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Apellidos" name="apellidos">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Fecha De Nacimiento</label>
                    <input type="datetime" class="form-control" id="formGroupExampleInput2" placeholder="Fecha De Nacimiento" name="fecha">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Teléfono</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Teléfono" name="telefono">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Email</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="correo" name="correo">
                </div>


                <input type="hidden" value="guardarCliente" name="opcion">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Registrar</button>

            </form>

        </div>


  

    </body>
</html>
