<nav class="navbar navbar-expand-lg " style="background-image:url(https://consumer-img.huawei.com/content/dam/huawei-cbg-site/common/mkt/pdp/phones/p9-lite/assets/matebook/images/index-img/sec11/bg2.jpg)">
  <a class="navbar-brand" href="../tienda/index.php"><img src="https://www.utn.edu.ec/transparencia/wp-content/uploads/2018/01/Logo-UTN-2018.gif" alt="Smiley face" height="200%" width="50%"></a>
  <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="../tienda/index.php" style = "color:  #b30404;">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../producto/producto.php" style = "color:  #b30404;">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../tienda/contacto.php" style = "color:  #b30404;">Contáctanos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../tienda/ayuda.php" style = "color:  #b30404;">Ayuda</a>
      </li>
      </ul>

      <ul class="nav">
          <li class="nav-item">
          <a class="nav-link" href="../producto/carrito.php">
            <i class="icon-ca fas fa-shopping-cart" style = "color:  #b30404;"></i> <?php echo(empty($_SESSION['detalle']))?0:count($_SESSION['detalle']);?>
          </a>
         </li>

      <li class="nav-item dropleft">
          <a class="nav-link " data-toggle="dropdown" role="button" href="#" aria-haspopup="true" aria-expanded="false" >
              <i class="icon-us fas fa-user-circle" style = "color:  #b30404;"></i>
          </a>
          <div class="dropdown-menu" role="menu">
            <a class="dropdown-item" href="../usuario/datos.php" style = "color:  #b30404;">Mi cuenta</a>
            <div role="separator" class="dropdown-divider"></div>
            <a class="dropdown-item" href="">
              <form method="post">
                <input type="hidden" value="signout" name="opcion" />
                <button class="btn btn-outline-secondary btn-block" type="submit">
                 Salir
               </button></a>
              </form>

          </div>
      </li>
  </ul>

  </div>
</nav>
