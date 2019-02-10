<!DOCTYPE html>
<?php include '../../controller/con_session.php';

if(!empty($_SESSION['session'])){
    header('Location: http://localhost/tienda-online/view/tienda/index.php');
}  else{
?>
<html lang="en" dir="ltr">
  <head>
      <?php include '../html/head.php'; ?>
      <link href="../css/signin.css" rel="stylesheet">
  </head>
  <body >

    <?php include '../html/navbar.php'; ?>
      <div class="container text-center">
        <form class="form-signin" method="post">
          <i class="icon-login fas fa-ghost"></i>
           <h1 class="h3 mb-3 font-weight-normal">Amazon UTN</h1>
           <input type="text" name="user"class="form-control" placeholder="Correo electrónico" required autofocus>
           <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
           <input type="hidden" value="signin" name="opcion">
           <button class="btn btn-lg btn-secondary btn-block" type="submit">Ingresar</button>
         </form>
    </div>
  </body>
    <?php include '../html/footer.php'; ?>
</html>
<?php
}
?>
