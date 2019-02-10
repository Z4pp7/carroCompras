<?php
include 'config.php';
include 'con_session.php';
require_once '../../model/Mod_Producto.php';
require_once '../../model/Mod_Categoria.php';
$producto = new Mod_Producto();
$categoria = new Mod_Categoria();

  $mensaje="";
  $mensaje_cat="";
  $mensaje_ultimo_pro="";
  if(isset($_POST['opcion'])){


    switch ($_POST['opcion']) {



      case 'agregar':


      if(isset($_SESSION['session']))
      {


      if(is_string(openssl_decrypt($_POST['codigo_pr'],cod,key))){
        $id=openssl_decrypt($_POST['codigo_pr'],cod,key);
      }else {
        $mensaje="error";
      }
      if(is_string(openssl_decrypt($_POST['nombre_pr'],cod,key)) ){
        $nombre=openssl_decrypt($_POST['nombre_pr'],cod,key);
        $mensaje_ultimo_pro =" <div class=\"alert alert-success text-center\"> Último producto agregado ".$nombre."
        <span class=\"badge badge-success\">
        <a  href=\"carrito.php\">Ver carrito</a>
        </span>
        </div>";

      }else {
        $mensaje="error";
      }
      if(is_numeric(openssl_decrypt($_POST['valor_pr'],cod,key)) ){
        $valor=openssl_decrypt($_POST['valor_pr'],cod,key);

      }else {
        $mensaje="error";
      }
      if(is_numeric(openssl_decrypt($_POST['cantidad_pr'],cod,key)) ){
        $cantidad=openssl_decrypt($_POST['cantidad_pr'],cod,key);

      }else{
        $mensaje="error";
      }

      if(!isset($_SESSION['detalle']))
      {
        $producto = array(
          'codigo' => $id ,
          'nombre' => $nombre,
          'valor' => $valor ,
          'cantidad' => $cantidad
        );
        $_SESSION['detalle'][0]=$producto;

      }else{
        $index=count($_SESSION['detalle']);
        $producto = array(
          'codigo' => $id ,
          'nombre' => $nombre,
          'valor' => $valor ,
          'cantidad' => $cantidad
        );
        $_SESSION['detalle'][$index]=$producto;
      }

      $mensaje=print_r($_SESSION,true);

    }else{
        header('Location: http://localhost/tienda-online/view/tienda/ingresar.php');
    }




      break;



      case 'eliminar':

        if(is_string(openssl_decrypt($_POST['codigo_pr'],cod,key))){
          $id=openssl_decrypt($_POST['codigo_pr'],cod,key);
          foreach ($_SESSION['detalle'] as $index => $producto) {
            if($id==$producto['codigo'])
            {
              unset($_SESSION['detalle'][$index]);

            }
          }
        }


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
      header('Location: http://localhost/tienda-online/view/producto/filtrado.php');
      break;

      case 'todo':
      header('Location: http://localhost/tienda-online/view/producto/producto.php');
      break;

      default:
        // code...
      break;
    }



}
