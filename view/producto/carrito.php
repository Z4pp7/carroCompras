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
              <th width="40%">Nombre</th>
              <th width="9%">Cantidad</th>
              <th width="9%">Precio Normal</th>
              <th width="9%">Descuento</th>
              <th width="9%">Precio Final</th>
              <th width="9%">Subtotal</th>
              <th width="10%">--</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $total=0;
              $row=0;
              $j=$_SESSION['detalle'];
              foreach ($_SESSION['detalle'] as $producto) {
              $row=$row+1;
            ?>
            <tr>
              <th scope="row"><?php echo $row; ?></th>
              <td><?php echo $producto['nombre'];?></td>
              <td><?php echo $producto['cantidad'];?></td>
              <td><?php echo "$".$producto['valor'];?></td>
              <td><?php echo $producto['descuento']."%";?></td>
              <td><?php echo "$".$producto['valor_final'];?></td>
              <td><?php echo number_format($producto['subtotal'],2);?></td>
              <td>
                <form action="" method="post">
                  <input type="hidden" name="id_pr"  value="<?php echo openssl_encrypt($producto['id'],cod,key); ?>">
                  <input type="hidden" name="opcion" value="eliminar">
                  <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Eliminar</button>
                </form>

              </td>
            </tr>
            <?php
                $total=$total+($producto['cantidad']*$producto['valor_final']);
              }

             ?>

            <tr>
              <td colspan="6" align="right"><h4>Total</h4></td>
              <td > <?php echo number_format($total,2); ?></td>
              <td>--</td>
            </tr>
          </tbody>
        </table>
          
         <?php
        if (isset($_SESSION['user_session'])) {
         $user = unserialize($_SESSION['user_session']);
         ?>

        <form action="" method="post">
          <div class="form-group">
           <label >Número de tarjeta de crédito</label>
           <input type="hidden" class="form-control"  placeholder="id" name="id" value="<?php echo $user->getId_us(); ?>" required/>
           <input type="hidden" class="form-control"  placeholder="total" name="total" value="<?php echo $total; ?>" />
           <input type="text" class="form-control"  placeholder="Número" name="targeta"  minlength="12" maxlength="12" required/>
      
           <label >Tipo de envío</label>
           <input type="text" class="form-control"  placeholder="tipo" name="envio" value="Sencillo" required/>
           <label >Valor de envío</label>
           <input type="text" class="form-control"  placeholder="Número" value="3" name="valor_envio"   readonly required/>
           <label >Regalo</label>
           <input type="text" class="form-control"  placeholder="Regalo" value="3" name="regalo"  readonly required/>

           <!--Utilizado en el controlador  -->
           <input type="hidden" name="opcion" value="comprar">
           <button class="btn btn-success" type="submit">
             Comprar
           </button>
          </div>

        </form>
        <?php } ?>







        <?php
      }else{  ?>
        </br>
        <div class="alert alert-primary text-center">
          Carrito vacio
        </div>

      <?php  }   ?>
      </div>

  </body>
    <?php include '../html/footer.php'; ?>
</html>
<?php
}else{
    header('Location: https://amazon-utn.herokuapp.com/view/tienda/');
}
?>
