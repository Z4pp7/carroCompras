<!DOCTYPE html>
<?php include '../../controller/con_session.php'; ?>
<html lang="en" dir="ltr">
  <head>
    <?php include '../html/head.php'; ?>
  </head>
<body>
  <?php
    if(!empty($_SESSION['session'])){
      include '../html/navbar-l.php';
    }else{
      include '../html/navbar.php';
    }
   ?>
    <div class="content">

    </div>
<center> <div class="col-md-8 col-12 mt-5">

             <label>Hola. ¿En qué podemos ayudarte?


             </label>
             <image src ="../img/Dovinet-ff356089-7d97-4442-b37f-feab79c6d0f6.png" />
             <li class="active">
                <button class="btn-sidebar btn-block" type="submit">
                  <i class="icon-s fas fa-tags"></i>	Devoluciones y reembolsos</button>
              </li>

              <li class="active">
                <button class="btn-sidebar btn-block" type="submit">
                  <i class="icon-s fas fa-tags"></i>	Soporte para dispositivos</button>
              </li>
              <li class="active">
                <button class="btn-sidebar btn-block" type="submit">
                  <i class="icon-s fas fa-tags"></i>		Tus pedidos</button>
              </li>
</div></center>

  </body>
    <?php include '../html/footer.php'; ?>
</html>
