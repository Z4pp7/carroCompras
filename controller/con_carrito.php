<?php
$mensaje="";

if(isset($_POST['btnagregar'])){
  switch ($_POST['btnagregar']) {
    case 'agregar':
    if(is_numeric(openssl_decrypt($_POST['id_pr'],cod,key))){
      $id=openssl_decrypt($_POST['id_pr'],cod,key);
      $mensaje="ok";
    }else{
      $mensaje="error";
    }

      break;

    default:
      // code...
      break;
  }

}
