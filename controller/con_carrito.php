<?php
$mensaje="";
if(isset($_POST['btn_agregar'])){
  switch ($_POST['btn_agregar']) {
    case 'agregar':
        $mensaje="Articulo agregado correctamente";
      
      break;

    default:
      // code...
      break;
  }

}else{
  $mensaje="noff isetr";

}
?>
