<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include '../../controller/con_session.php'; ?>
<html>
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


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class=""></li>
      <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    </ol>
        
          <div class="container text-center">

        <form class="" method="post">
          <i class="icon-login fas fa-ghost"></i>
           <h1 class="h3 mb-3 font-weight-normal">Amazon UTN</h1>
           <h2>Felicidades !!!</h2>
           <button class="btn btn-lg btn-secondary btn-block" type="submit">Verificar Factura</button>
          
         </form>
    </div>
  </body>
    <?php include '../html/footer.php'; ?>
</html>

