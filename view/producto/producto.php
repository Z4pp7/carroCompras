<!DOCTYPE html>
<?php
  include '../../controller/con_carrito.php';
  require_once '../../model/Mod_Producto.php';
  require_once '../../model/Mod_Categoria.php';

 ?>

<html lang="en" dir="ltr">
  <head>
    <?php include '../html/head.php'; ?>
    <link href="../css/sidebar-p.css" rel="stylesheet">
    <link href="../css/producto.css" rel="stylesheet">
    <link href="../css/card.css" rel="stylesheet">
  <body>

    <?php
      if(!empty($_SESSION['session'])){
        include '../html/navbar-l.php';
      }else{
        include '../html/navbar.php';
      }
     ?>
    <div class="container">
    </br>
      <nav class="navbar navbar-light bg-light">
        <span class="navbar-text">
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar . . ." aria-label="Search">
            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>
          </form>
          <div>
          </div>
        </span>
      </nav>

<?php
$producto= new Mod_Producto();
$categoria= new Mod_Categoria();
//Descomentar y comentar dependiendo del caso
//Usando bdd local:
//$lista=$producto->getProductos();
//$categorias=$categoria->getCategorias();
//Usando API local:
$lista=$producto->getApiProductos();
$categorias=$categoria->getApiCategorias();
 ?>
      <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <ul class="list-unstyled components">
              <li class="active">
                <button class="btn-sidebar btn-block" type="submit">
                  <i class="icon-s fas fa-tags"></i>Ver todo</button>
              </li>

              <?php
              foreach ($categorias as $cat) {
               ?>
               <li >
                 <form method="post">
                    <input type="hidden" name="categoria" value="<?php echo $cat->getNombre_ca(); ?>"/>
                   <input type="hidden" name="opcion" value="filtrar"/>
                  <button class="btn-sidebar btn-block" type="submit">
                    <i class="icon-s fas fa-tag"></i><?php echo $cat->getNombre_ca(); ?>
                  </button>
                </form>
              </li>
              <?php
              }
               ?>

            </ul>
          </nav>
        <!-- Page Content -->
        <div id="content">


          <?php
          if(!empty($_SESSION['prod_add'])){
           echo $_SESSION['prod_add'];
         }
           ?>


          <div class="row">

            <?php

            foreach ($lista as $dato) {
            ?>


            <div class="col-4">
                <form action="" method="post">
                  <input type="hidden" name="id_pr" id="id_pr" value="<?php echo $dato->getId_pr();?>">
                  <input type="hidden" name="opcion" value="detalle">
                    <div class="card text-center swing" >
                      <button class="btn-detalle" type="submit">
                       <img
                       class="card-img-top"
                       title="<?php echo $dato->getNombre_pr(); ?>"
                       src=" <?php echo  $dato->getImagen_pr(); ?>"
                       data-toggle="popover"
                       data-trigger="hover"
                       data-content="<?php echo $dato->getDescripcion_pr(); ?>"
                       >
                     </button>
                    <div class="card-body">
                      <h6 class="card-title">  <?php echo  $dato->getNombre_pr();  ?></h6>
                      <?php if($dato->getDescuento_pr()!=0){?>
                        <h6 class="card-subtitle mb-2 descuento"><?php echo "- ".  $dato->getDescuento_pr()." %"?></h6>
                        <p class="card-text tachar"><?php echo  "$ ".$dato->getValor_unitario_pr();  ?></p>
                        <p class="card-text nuevo_valor"  ><?php echo "$ ". $dato->getValor_descuento_pr();  ?></p>
                      <?php }else{?>
                          <p class="card-text"><?php echo  "$ ".$dato->getValor_unitario_pr();  ?></p>
                        <?php }?>
                    </div>
                  </div>
                </form>
                </br>


              </div>




          <?php } ?>
          </div>

      </div>
      </div>
    </div>

    <script>


    </script>

    <script>
    $(function () {
      $('[data-toggle="popover"]').popover()
    })
    </script>
  </body>
  <?php include '../html/footer.php'; ?>
    </html>
