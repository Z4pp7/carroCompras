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
 <div class="col-md-8 col-12 mt-5">
          <p class="message-f">Para comunicarse cualquiera de los siguientes medios:</p>
           <p class="message-f">Teléfonos: +59302 997800 Ext. 7161/ 7162 </p>
            <p class="message-f">E-mail de información: @utn.edu.ec</p>
             <p class="message-f">Ubicación: 

Ciudadela Universitaria, Av. 17 de Julio 5-21 y General José María Cordova.

Sector del Olivo.

Ibarra, Ecuador, América del Sur. </p>
              <p class="message-f">Código Postal Institucional: 199

Código Postal Georeferencial: EC100150 </p>
              
        </div>

  </body>
    <?php include '../html/footer.php'; ?>
</html>
