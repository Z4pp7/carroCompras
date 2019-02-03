<!DOCTYPE html>
<?php
  include '../../controller/con_carrito.php';
  if(!empty($_SESSION['session'])){
 ?>
<html lang="en" dir="ltr">
  <head>
    <?php include '../html/head.php'; ?>
    <link href="../css/sidebar.css" rel="stylesheet">
  </head>
  <body>
    <?php include '../html/navbar-l.php'; ?>
    <div class="wrapper">
      <!-- Sidebar -->
      <nav id="sidebar">
          <ul class="list-unstyled components">
            <li >
                <a href="datos.php"><i class="icon-s fas fa-user-cog"></i>Mis datos</a>
            </li>
            <li class="active">
                <a href="compras.php"><i class="icon-s fas fa-shopping-bag"></i>Compras</a>
            </li>
          </ul>
        </nav>
      <!-- Page Content -->
      <div id="content">
      </div>
    </div>
  </body>
  <?php include '../html/footer.php'; ?>
</html>
<?php
}else{
    header('Location: http://localhost/tienda-online/view/tienda/index.php');
}
?>
