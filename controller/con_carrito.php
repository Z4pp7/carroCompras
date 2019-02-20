<?php
include 'config.php';
include 'con_session.php';
require_once '../../model/Mod_Producto.php';
require_once '../../model/Mod_Categoria.php';
require_once '../../model/Mod_Compra.php';
$producto = new Mod_Producto();
$categoria = new Mod_Categoria();
$compra = new Mod_Compra();

  $mensaje="";
  $mensaje_cat="";
  $mensaje_ultimo_pro="";
  if(isset($_POST['opcion'])){


    switch ($_POST['opcion']) {



      case 'agregar':

      if(isset($_SESSION['session']))
      {
        //Obtener valores desde vista producto
        $id=$producto->desencriptarProductoSeleccionado("int",$_POST['id_pr']);
        $cantidad=$_POST['cantidad_pr'];
        $descuento=$producto->desencriptarProductoSeleccionado("int",$_POST['descuento_pr']);
        $valor=$producto->desencriptarProductoSeleccionado("int",$_POST['valor_pr']);
        if($descuento!=0){
          $valorfinal=$producto->desencriptarProductoSeleccionado("int",$_POST['valor_final_pr']);
        }else{
          $valorfinal=$valor;
        }
        $nombre=$producto->desencriptarProductoSeleccionado("str",$_POST['nombre_pr']);
        if($nombre!=null){
          $mensaje_ultimo_pro =" <div class=\"alert alert-success text-center\">Producto agregado ".$nombre."
          <span class=\"badge badge-success\">
          <a  href=\"carrito.php\"> Ver carrito</a>
          </span>
          </div>";
          $_SESSION['prod_add']=$mensaje_ultimo_pro;

        }



        if(!isset($_SESSION['detalle']))
        {
          //Creando array utilizado para llenar tabla de carrito
          $producto = array(
            'id' => $id ,
            'nombre' => $nombre,
            'valor' => $valor ,
            'cantidad' => $cantidad,
            'descuento' => $descuento,
            'valor_final' => $valorfinal,
            'subtotal' => $valorfinal*$cantidad

          );

          //Creando array utilizado para enviar a API-FACTURACION
          $inovice_details=array(
            'product_id' => $id ,
            'quantity' => $cantidad,
            'price' => $valor ,
            'subtotal' => $valorfinal*$cantidad
          );
          $_SESSION['detalle'][0]=$producto;
          $_SESSION['inovice_details'][0]=$inovice_details;

        }else{
          $index=count($_SESSION['detalle']);
          $producto = array(
            'id' => $id ,
            'nombre' => $nombre,
            'valor' => $valor ,
            'cantidad' => $cantidad,
            'descuento' => $descuento,
            'valor_final' => $valorfinal,
            'subtotal' => $valorfinal*$cantidad
          );
          $inovice_details=array(
            'product_id' => $id ,
            'subtotal' => $valorfinal*$cantidad,
            'quantity' => $cantidad,
            'price' => $valor
          );

        $_SESSION['detalle'][$index]=$producto;
        $_SESSION['inovice_details'][$index]=$inovice_details;
      }

      $mensaje=print_r($_SESSION,true);
      header('Location: https://amazon-utn.herokuapp.com/view/producto/producto.php');

    }else{
        header('Location: https://amazon-utn.herokuapp.com/view/tienda/ingresar.php');
    }




      break;



      case 'eliminar':

        if(is_numeric(openssl_decrypt($_POST['id_pr'],cod,key))){
          $id=openssl_decrypt($_POST['id_pr'],cod,key);
          foreach ($_SESSION['detalle'] as $index => $producto) {
            if($id==$producto['id'])
            {
              unset($_SESSION['detalle'][$index]);
              unset($_SESSION['inovice_details'][$index]);

            }
          }
        }


      break;

      case 'detalle':

          $id_pr=$_POST['id_pr'];
          $pro=$producto->getProducto($id_pr);
          $_SESSION['producto'] = serialize($pro);
          $mensa=$pro->getValor_unitario_pr();
          header('Location: https://amazon-utn.herokuapp.com/view/producto/detalle.php');


      break;

      case 'filtrar':

      $cat=$_POST['categoria'];
      //Descomentar y comentar dependiendo del caso
      //Usando bdd local:
      //$lista=$categoria->getProductosCategorizados($cat);
      //Usando API:

      $lista=$categoria->getApiProductosCategorizados($cat);
      $_SESSION['mensaje']=serialize($cat);
      $_SESSION['listafiltrada'] = serialize($lista);
      header('Location: https://amazon-utn.herokuapp.com/view/producto/filtrado.php');
      break;

      case 'todo':
      header('Location: https://amazon-utn.herokuapp.com/view/producto/producto.php');
      break;
  
      
  
      case 'comprar':
      $total=$_POST['total'];
      $numero_targeta=$_POST['targeta'];
      $usuario=$_POST['id'];
      $precio_envio=$_POST['valor_envio'];
      $tipo_envio=$_POST['envio'];
      $regalo=$_POST['regalo'];
      $detalle=  $_SESSION['inovice_details'];
      $response=$compra->order($total,$numero_targeta,$usuario,$precio_envio,$tipo_envio,$regalo,$detalle);
       unset($_SESSION['detalle']);
       unset($_SESSION['inovice_details']);
       header('Location: https://amazon-utn.herokuapp.com/view/tienda/comprarealizada.php');
      break;



      default:
        // code...
      break;
    }



}
