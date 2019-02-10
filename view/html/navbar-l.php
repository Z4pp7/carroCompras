<nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" href="../tienda/index.php"><i class="icon fas fa-ghost"></i></a>
  <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="../tienda/index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../producto/producto.php">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../tienda/contacto.php">Contáctanos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../tienda/ayuda.php">Ayuda</a>
      </li>
      </ul>

      <ul class="nav">
          <li class="nav-item">
          <a class="nav-link" href="../producto/carrito.php">
            <i class="icon-ca fas fa-shopping-cart"></i> <?php echo(empty($_SESSION['detalle']))?0:count($_SESSION['detalle']);?>
          </a>
         </li>

      <li class="nav-item dropleft">
          <a class="nav-link " data-toggle="dropdown" role="button" href="#" aria-haspopup="true" aria-expanded="false" >
              <i class="icon-us fas fa-user-circle"></i>
          </a>
          <div class="dropdown-menu" role="menu">
            <a class="dropdown-item" href="../usuario/datos.php">Mi cuenta</a>
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
