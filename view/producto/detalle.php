<!DOCTYPE html>
<?php
  include '../../controller/con_carrito.php';
  require_once '../../model/Mod_Producto.php';
  require_once '../../model/Mod_Categoria.php';

 ?>
<html lang="en" dir="ltr">
  <head>
    <?php include '../html/head.php'; ?>
        <link href="../css/detalle.css" rel="stylesheet">
  </head>
  <body>
    <?php
      if(!empty($_SESSION['session'])){
        include '../html/navbar-l.php';
      }else{
        include '../html/navbar.php';
      }
     ?>

     <div class="container">
       <?php
        if (isset($_SESSION['producto'])) {
         $producto = unserialize($_SESSION['producto']);
         ?>
       </br>
       <h6 class="text-uppercase font-weight-bold"><?php echo $producto->getNombre_pr();?></h6>
       <div class="row ">
         <div class="col-md-5 ">
           <div class="card text-center " >
             <img  class="card-img-top"  src="<?php echo $producto->getImagen_pr();?>" >
           </div>

          </div>
         <div class="col-7">

           <div class=" datos">
                <form action="" method="post">

               <h6 class="text font-weight-bold">Descripción</h6>
               <p><?php echo $producto->getDescripcion_pr();?></p>
               <h6 class="text font-weight-bold">Caracteristicas</h6>
               <p><?php echo $producto->getCaracteristicas_pr();?></p>
               <?php
               if($producto->getDescuento_pr()!=0){
               ?>
               <h6 class="text font-weight-bold">Precio normal</h6>
               <p><?php echo $producto->getValor_unitario_pr();?></p>
               <h6 class="text font-weight-bold">Descuento</h6>
               <p><?php echo $producto->getDescuento_pr()."%";?></p>
               <h6 class="text font-weight-bold">Precio de oferta</h6>
               <p><?php echo $producto->getValor_descuento_pr();?></p>
               <?php
             }else{
                ?>
                <h6 class="text font-weight-bold">Precio</h6>
                <p><?php echo $producto->getValor_unitario_pr();?></p>

              <?php } ?>



              <?php if($producto->getStock_pr()!=0){?>
               <h6 class="text font-weight-bold">Cantidad (1/<?php echo $producto->getStock_pr();?>)</h6>
               <input type="number" class="form-control" name="cantidad_pr" id="cantidad_pr" max="<?php echo $producto->getStock_pr();?>" min="1" required>
               </br>


                 <input type="hidden" name="id_pr" id="id_pr" value="<?php echo openssl_encrypt($producto->getId_pr(),cod,key);?>">
                 <input type="hidden" name="nombre_pr" id="nombre_pr" value="<?php echo openssl_encrypt($producto->getNombre_pr(),cod,key); ?>">
                 <input type="hidden" name="valor_pr" id="valor_pr"value="<?php echo openssl_encrypt($producto->getValor_unitario_pr(),cod,key);?>">
                 <input type="hidden" name="descuento_pr" id="descuento_pr" value="<?php echo openssl_encrypt($producto->getDescuento_pr(),cod,key); ?>">
                 <input type="hidden" name="valor_final_pr" id="valor_final_pr"value="<?php echo openssl_encrypt($producto->getValor_descuento_pr(),cod,key);?>">

                 <input type="hidden" name="opcion" value="agregar">
                 <button class="btn btn-secondary" type="submit">
                   Añadir al carrito
                 </button>
               <?php } else { ?>
                  <h5 class="text font-weight-bold text-danger">PRODUCTO AGOTADO</h5>
               <?php } ?>
               </form>
           </div>
         </div>
       </div>

    </div>
  </br>
       <?php
     }
     ?>
  </body>
    <?php include '../html/footer.php'; ?>
</html>
