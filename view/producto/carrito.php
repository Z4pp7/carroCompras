<!DOCTYPE html>
<?php

  include '../../controller/con_carrito.php';
  if(!empty($_SESSION['session'])){
 ?>
<html lang="en" dir="ltr">
  <head>
      <?php include '../html/head.php'; ?>
      <link href="../css/carrito.css" rel="stylesheet">
  </head>
  <body>
      <?php include '../html/navbar-l.php'; ?>
      <div class="container">
        <nav class="navbar navbar-light bg-light">
          <span class="navbar-text">

          </span>
        </nav>

        <?php
        if(!empty($_SESSION['detalle'])){
         ?>
        <table class="table table-hover table-bordered text-center">
          <thead>
            <tr>
              <th width="5%">#</th>
              <th width="15%">Código</th>
              <th width="40%">Nombre</th>
              <th width="10%">Precio</th>
              <th width="10%">Cantidad</th>
              <th width="10%">Subtotal</th>
              <th width="10%">--</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $total=0;
              foreach ($_SESSION['detalle'] as $index => $producto) {
            ?>
            <tr>
              <th scope="row"><?php echo $index+1; ?></th>
              <td><?php echo $producto['id'];?></td>
              <td><?php echo $producto['nombre'];?></td>
              <td><?php echo $producto['valor'];?></td>
              <td><?php echo $producto['cantidad'];?></td>
              <td><?php echo number_format($producto['cantidad']*$producto['valor'],2);?></td>
              <td>
                <form action="" method="post">
                  <input type="hidden" name="id_pr" id="id_pr" value="<?php echo openssl_encrypt($producto['id'],cod,key); ?>">
                  <input type="hidden" name="opcion" value="eliminar">
                  <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Eliminar</button>
                </form>

              </td>
            </tr>
            <?php
                $total=$total+($producto['cantidad']*$producto['valor']);
              }

             ?>

            <tr>
              <td colspan="5" align="right"><h4>Total</h4></td>
              <td > <?php echo number_format($total,2); ?></td>
              <td><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Comprar</button></td>
            </tr>
          </tbody>
        </table>
        <?php
      }else{  ?>
        </br>
        <div class="alert alert-success text-center">
          Carrito vacio
        </div>

      <?php  }   ?>
      </div>

  </body>
    <?php include '../html/footer.php'; ?>
</html>
<?php
}else{
    header('Location: http://localhost/tienda-online/view/tienda/index.php');
}
?>
