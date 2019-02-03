<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <?php include '../html/head.php'; ?>

  </head>
  <body >

    <?php include '../html/navbar.php'; ?>

      <div class="container text-center">

      <form class="form-signin">
        <i class="icon-login fas fa-ghost"></i>
         <h1 class="h3 mb-3 font-weight-normal">Amazon UTN</h1>
         <input type="email" id="inputEmail" class="form-control" placeholder="Correo electrónico" required autofocus>
         <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
         <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
         <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
      </form>
    </div>
  </body>
    <?php include '../html/footer.php'; ?>
</html>
