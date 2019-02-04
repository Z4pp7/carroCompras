<?php
include 'config.php';
include 'con_session.php';
require_once '../../model/Mod_Producto.php';
$producto = new Mod_Producto();

  $mensaje="";
  if(isset($_POST['opcion'])){
    switch ($_POST['opcion']) {
      case 'agregar':

      if(is_string(openssl_decrypt($_POST['codigo_pr'],cod,key))){
        $id=openssl_decrypt($_POST['codigo_pr'],cod,key);
        $mensaje.="ADD: ".$id."</br>";
      }else {
        $mensaje="error";
      }
      if(is_string(openssl_decrypt($_POST['nombre_pr'],cod,key)) ){
        $nombre=openssl_decrypt($_POST['nombre_pr'],cod,key);
        $mensaje.="ADD: ".$nombre."</br>";
      }else {
        $mensaje="error";
      }
      if(is_numeric(openssl_decrypt($_POST['valor_pr'],cod,key)) ){
        $valor=openssl_decrypt($_POST['valor_pr'],cod,key);
        $mensaje.="ADD: ".$valor."</br>";
      }else {
        $mensaje="error";
      }
      if(is_numeric(openssl_decrypt($_POST['cantidad_pr'],cod,key)) ){
        $cantidad=openssl_decrypt($_POST['cantidad_pr'],cod,key);
        $mensaje.="ADD: ".$cantidad."</br>";
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
      $categoria=$_POST['categoria'];
      $lista=$producto->getProductosCategorizados($categoria);
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
