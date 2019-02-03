<!DOCTYPE html>
<?php
  include '../../controller/con_carrito.php';
  require_once '../../model/Mod_Producto.php';
 ?>

<html lang="en" dir="ltr">
  <head>
    <?php include '../html/head.php'; ?>
    <link href="../css/sidebar-p.css" rel="stylesheet">
    <link href="../css/producto.css" rel="stylesheet">
    <link href="../css/card.css" rel="stylesheet">
  <body>
    <?php include '../html/navbar-l.php'; ?>
    <div class="container">
      <nav class="navbar navbar-light bg-light">
        <span class="navbar-text">
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar . . ." aria-label="Search">
            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </span>
      </nav>
      <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <ul class="list-unstyled components">
              <li class="Active">
                  <a href="#"><i class="icon-s fas fa-tags"></i>Ver todo</a>
              </li>
              <li >
                  <a href="#"><i class="icon-s fas fa-tag"></i>Categoria 1</a>
              </li>
              <li class="#">
                  <a href="#"><i class="icon-s fas fa-tag"></i></i>Categoria 2</a>
              </li>
              <li class="#">
                  <a href="#"><i class="icon-s fas fa-tag"></i></i>Categoria 3</a>
              </li>
              <li class="#">
                  <a href="#"><i class="icon-s fas fa-tag"></i></i>Categoria 4</a>
              </li>
            </ul>
          </nav>
        <!-- Page Content -->
        <div id="content">
          <div class="row">
            
            <?php
            $producto= new Mod_Producto();
            $lista=$producto->getProductos();
            foreach ($lista as $dato) {
            ?>

            <div class="col-4">
                <div class="card text-center" >
                   <img
                   class="card-img-top"
                   title="<?php echo $dato->getNombre_pr(); ?>"
                   src=" <?php echo  $dato->getImagen_pr(); ?>"
                   data-toggle="popover"
                   data-trigger="hover"
                   data-content="<?php echo $dato->getDetalle_pr(); ?>"
                   >
                    <div class="card-body">
                      <h5 class="card-title">  <?php echo  $dato->getNombre_pr();  ?></h5>
                      <p class="card-text"><?php echo  $dato->getValor_unitario_pr();  ?></p>

                      <form action="" method="post">
                        <input type="hidden" name="nombre_pr" id="nombre_pr" value="<?php echo $dato->getNombre_pr(); ?>">
                        <input type="hidden" name="valor_pr" value="<?php echo $dato->getNombre_pr(); ?>">
                        <button class="btn btn-secondary" type="submit" name"btn_agregar" value="agregar">
                          Añadir al carrito
                        </button>
                      </form>

                    </div>
                  </div>
                </br>

              </div>
          <?php } ?>
          </div>

      </div>
      </div>
    </div>
    <script>
    $(function () {
      $('[data-toggle="popover"]').popover()
    })
    </script>
  </body>
  <?php include '../html/footer.php'; ?>
    </html>
