<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Amazon UTN</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  <title>pjj</title>


    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Amazon UTN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Inicio <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Ofertas</a>
                    </li>                  
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contactanos</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="¿Qué estas buscando?" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>




                </form>
                <a class="nav-link" href="ingreso.php">Ingresar</a>
                <a class="nav-link" href="registro.php">Registrarse</a>
            </div>
        </nav>
        
        
        
                <div class="container">

            <form action="../controlador/ControladorPrincipal.php">
           
                <div class="form-group">
                    <label for="formGroupExampleInput">Código Postal</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Código Postal" name="postal">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">País</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="País" name="pais">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Provincia</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Provincia" name="provincia">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Ciudad</label>
                    <input type="datetime" class="form-control" id="formGroupExampleInput2" placeholder="Ciudad" name="ciudad">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Calle 1</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Calle 1" name="calle1">
                </div> 


                <div class="form-group">
                    <label for="formGroupExampleInput">Calle 2</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Calle 2" name="calle2">
                </div>
                
                 <div class="form-group">
                    <label for="formGroupExampleInput">Referencia</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Referencia" name="referencia">
                </div>



                <input type="hidden" value="guardarUbicacion" name="opcion">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Registrar</button>

            </form>

        </div>
    </body>
</html>
