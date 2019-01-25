<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>AMAZON UTN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <body>






<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#"><i class="fas fa-ghost"></i></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="#">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Contactanos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Ayuda</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Categorias
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
    </div>
  </li>
</ul>
</div>
</nav>
    </br>
    </br>

    <div class="container">
    <div class="alert alert-success">
      <a href="#" class="badge badge-success">Ver carrito</a>
      <h6>CATEGORIAS</h6>
    </div>
    <div class="row">


      <?php
      require_once '../model/Mod_Producto.php';
      $producto= new Mod_Producto();
      $lista=$producto->getProductos();
      foreach ($lista as $dato) {
      ?>

      <div class="col-3">
          <div class="card" >

             <img
             class="card-img-top"
             title="<?php echo $dato->getDetalle_pr();  ?>"
             src=" <?php echo  $dato->getImagen_pr(); ?>"
             data-toggle="popover"
             data-trigger="hover"
             >

              <div class="card-body">
                <h5 class="card-title">  <?php echo  $dato->getNombre_pr();  ?></h5>
                <p class="card-text"><?php echo  $dato->getValor_unitario_pr();  ?></p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
              </div>
            </div>
          </br>

        </div>
      <?php } ?>


      </div>
    </div>



    <script>
    $(function () {
      $('[data-toggle="popover"]').popover()
    })
    </script>
  </body>

</html>
