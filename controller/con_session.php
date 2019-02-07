<?php


 session_start();
 require_once '../../model/Mod_Usuario.php';
 $usuario = new Mod_Usuario();
$mensaje_login="";

      if(isset($_POST['opcion'])){
        switch ($_POST['opcion']) {
          case "signin":
            $user = $_POST['user'];
            $contrasena = $_POST['password'];
            $sesion = $usuario->signin($user, $contrasena);
            if($sesion->getMessage_us()==="Login satisfactorio"){

                $_SESSION['user_session'] = serialize($sesion);
                $_SESSION["session"] = "session";
                header('Location: http://localhost/tienda-online/view/tienda/index.php');

            }else{
                $mensaje_login=" <div class=\"alert alert-success text-center\"> Usuario o contraseña incorrectos
                <span class=\"badge badge-success\"></div>";
            }
            // PARA PROBAR SIN CONEXION
          //if("zappy"=== $user && "zero" === $contrasena){
                //
                  // header('Location: http://localhost/tienda-online/view/tienda/index.php');
            //}else
          //  {
            //    header('Location: http://localhost/tienda-online/view/tienda/ingresar.php');
            //}


          break;

          case "signup":
            $usuario_us = $_POST['usuario'];
            $cedula_us = $_POST['cedula'];
            $nombres_us = $_POST['nombres'];
            $apellidos_us = $_POST['apellidos'];
            $fecha_nacimiento_us = $_POST['fecha'];
            $telefono_us=$_POST['telefono'];
            $correo_us = $_POST['email'];
            $codigo_postal_us = $_POST['codigo'];
            $pais_us = $_POST['pais'];
            $provincia_us = $_POST['provincia'];
            $ciudad_us = $_POST['ciudad'];
            $calle_uno_us = $_POST['uno'];
            $calle_dos_us = $_POST['dos'];
            $referencia_us = $_POST['referencia'];
            $numero_casa_us = $_POST['numero'];
            $password_us = $_POST['password'];

            $sesion = $usuario->signup($usuario_us,$cedula_us,$nombres_us,$apellidos_us,$fecha_nacimiento_us,$telefono_us,
                                    $correo_us,$codigo_postal_us,$pais_us,$provincia_us,$ciudad_us,$calle_uno_us,
                                    $calle_dos_us,$referencia_us, $numero_casa_us,$password_us);
            if($sesion->getMessage_us()==="Usuario creado satisfactoriamente"){

                header('Location: http://localhost/tienda-online/view/tienda/ingresar.php');
                $mensaje_login=" <div class=\"alert alert-success text-center\"> Registro exitoso
                <span class=\"badge badge-success\"></div>";
            }else{
                $mensaje_login=" <div class=\"alert alert-success text-center\"> Usuario o contraseña incorrectos
                <span class=\"badge badge-success\"></div>";
            }
            break;

          case "signout":

            session_destroy();
            header('Location: http://localhost/tienda-online/view/tienda/index.php');

          break;
        }
      }



?>
