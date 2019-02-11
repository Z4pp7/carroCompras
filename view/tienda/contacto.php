<!DOCTYPE html>
<?php include '../../controller/con_session.php'; ?>
<html lang="en" dir="ltr">
  <head>
    <?php include '../html/head.php'; ?>
          <link href="../css/contacto.css" rel="stylesheet">
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
          <p class="message-f">Para comunicarse cualquiera de los siguientes medios:</p>
           <p class="message-f"><i class="icon-s fas fa-mobile-alt"></i> Teléfonos: +59302 997800 Ext. 7161/ 7162 </p>
            <p class="message-f"><i class="icon-s fas fa-envelope"></i>E-mail de información: @utn.edu.ec</p>
             <label><i class="icon-s fas fa-map-marker-alt"></i>Ubicación:

Ciudadela Universitaria, Av. 17 de Julio 5-21 y General José María Cordova.

Sector del Olivo.

Ibarra, Ecuador, América del Sur.</label>
<!--             <p class="message-f">Ubicación:

Ciudadela Universitaria, Av. 17 de Julio 5-21 y General José María Cordova.

Sector del Olivo.

Ibarra, Ecuador, América del Sur. </p>-->
              <p class="message-f">Código Postal Institucional: 199

Código Postal Georeferencial: EC100150 </p>

     </div></center>

  </body>
    <?php include '../html/footer.php'; ?>
</html>
