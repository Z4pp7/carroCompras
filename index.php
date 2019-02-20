<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include './controller/con_session.php'; ?>
<html>
    <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Amazon UTN</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="shortcut icon" href="../img/ghost-solid.svg">
<link href="../css/carousel.css" rel="stylesheet">
<link href="../css/footer.css" rel="stylesheet">
<link href="../css/navbar.css" rel="stylesheet">
  </head>
  <body>
    <?php
      if(!empty($_SESSION['session'])){
        include '../view/html/navbar-l.php';
      }else{
        ?>
      <nav class="navbar navbar-expand-lg " style="background-image:url(https://consumer-img.huawei.com/content/dam/huawei-cbg-site/common/mkt/pdp/phones/p9-lite/assets/matebook/images/index-img/sec11/bg2.jpg)" >
    <a class="navbar-brand" href="../../index.php"><img src="https://www.utn.edu.ec/transparencia/wp-content/uploads/2018/01/Logo-UTN-2018.gif" alt="Smiley face" height="200%" width="50%"></a>
  <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="../../index.php" style = "color:  #b30404;">Inicio <span class="sr-only">(current)</span></a>
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
          <a class="nav-link" href="../tienda/registro.php" style = "color:  #b30404;">Registrarse</a>
        </li
        <li class="nav-item">
        <a class="nav-link" href="../tienda/ingresar.php" id="myBtn" style = "color:  #b30404;">Ingresar</a>
        </li>
      </ul>

  </div>
</nav>
      <?php
      }
     ?>


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class=""></li>
      <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active carousel-item-left">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><img src="http://www.fondox.net/wallpapers/chica-muy-bonita-3166.jpg" alt="Smiley face" height="100%" width="100%"></svg>
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>Ofertas en Ropa</h1>
            <p>No te pierdas las mejores ofertas para este fin de semestre.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item carousel-item-next carousel-item-left">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><img src="https://assets.razerzone.com/eeimages/products/25919/deathadder-elite-ups-1.jpg" alt="Smiley face" height="100%" width="100%"></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>AMAZON UTN</h1>
            <p>Tienda OnLine</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><img src="https://www.telemundo.com/sites/nbcutelemundo/files/images/article/cover/2017/04/04/persona-usando-computadora-sobre-mesa.jpg" alt="Smiley face" height="100%" width="100%"></svg>
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>La mejor forma de compra</h1>
            <p>La mejor opción para tus compras, recuerda que todos tus compras son seguras aqui en amazon UTN.</p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="0" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><img src="https://historyapp.pixl.org.uk/appleicon.png" alt="Smiley face" height="140px" width="140px"><text fill="#777" dy=".3em" x="50%" y="50%" ></text></svg>
        <h2>Tecnología</h2>
        <p>Encuentra una gran gama de productos en lo que es tecnología, laptops, celulares, etc.</p>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="0" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><img src="http://estrenon.com/wp-content/uploads/icono1-1-140x140.png" alt="Smiley face" height="140px" width="140px"><text fill="#777" dy=".3em" x="50%" y="50%"></text></svg>
        <h2>Ropa</h2>
        <p>Descubre las mejores ofertas en lo que es ropa para damas, caballeros y niños solo aqui en Amazon UTN</p>
        <p><a class="btn btn-secondary" href="#" role="button">Detalles</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="0" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsTk8swU8-Noren9FXeg0VKh3GEtE-s1ZROlH9l0cQxD7sUQpSMg" alt="Smiley face" height="140px" width="140px"><text fill="#777" dy=".3em" x="50%" y="50%"></text></svg>
        <h2>Descuentos</h2>
        <p>Opten los mejores descuentos, presenta tu carnet de la universidad para optener un descueto de hasta en un 10% en marcas seleccionadas</p>
        <p><a class="btn btn-secondary" href="#" role="button">Detalles</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">

        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect fill="#eee" width="100%" height="100%"></rect><text fill="#aaa" dy=".3em" x="50%" y="50%">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect fill="#eee" width="100%" height="100%"></rect><text fill="#aaa" dy=".3em" x="50%" y="50%">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect fill="#eee" width="100%" height="100%"></rect><text fill="#aaa" dy=".3em" x="50%" y="50%">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div>
</body>

  <?php include './view/html/footer.php'; ?>

</html>
