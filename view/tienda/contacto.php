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


  </body>
    <?php include '../html/footer.php'; ?>
</html>
