<?php

 session_start();
      if(isset($_POST['opcion'])){
        switch ($_POST['opcion']) {
          case "signin":
            $user = $_POST['user'];
            $contrasena = $_POST['password'];
            //$sesion = $login->verificacionUsuario($user, $contrasena);
            if("zappy"=== $user && "zero" === $contrasena){
                  $_SESSION["session"] = "session";
                  header('Location: http://localhost/tienda-online/view/tienda/index.php');
            }else
            {
                    header('Location: http://localhost/tienda-online/view/tienda/ingresar.php');
            }
          break;
          case "signout":

            session_destroy();
            header('Location: http://localhost/tienda-online/view/tienda/index.php');

          break;
        }
      }



?>
