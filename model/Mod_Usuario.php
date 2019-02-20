<?php
/**
 * @author zappy-zero
 */

include_once 'Usuario.php';
class Mod_Usuario {

  public function signin($user,$password){

    $url = "https://tienda-online-utn.herokuapp.com/api/login";
    $jsonData = array('email' => $user,
                      'password' => $password);
    $response = $this->jsonResponse($url,$jsonData);
    $atributo = new Usuario();
    if($response["message"]==="Login satisfactorio"){

      $atributo->setMessage_us($response["message"]);
      $atributo->setId_us($response["user"]["id"]);
      $atributo->setUsuario_us($response["user"]["name"]);
      $atributo->setCedula_us($response["user"]["cedula_us"]);
      $atributo->setNombres_us($response["user"]["nombres_us"]);
      $atributo->setApellidos_us($response["user"]["apellidos_us"]);
      $atributo->setFecha_nacimiento_us($response["user"]["fecha_nacimiento_us"]);
      $atributo->setTelefono_us($response["user"]["telefono_us"]);
      $atributo->setCorreo_us($response["user"]["email"]);
      $atributo->setCodigo_postal_us($response["user"]["codigo_postal_us"]);
      $atributo->setPais_us($response["user"]["pais_us"]);
      $atributo->setProvincia_us($response["user"]["provincia_us"]);
      $atributo->setCiudad_us($response["user"]["ciudad_us"]);
      $atributo->setCalle_uno_us($response["user"]["calle_uno_us"]);
      $atributo->setCalle_dos_us($response["user"]["calle_dos_us"]);
      $atributo->setReferencia_us($response["user"]["referencia_us"]);
      $atributo->setNumero_casa_us($response["user"]["numero_casa_us"]);
    }else{
      $atributo->setMessage_us($response["message"]);
    }
  return $atributo;
  }

  public function signup($usuario_us, $cedula_us,$nombres_us,$apellidos_us,$fecha_nacimiento_us,$telefono_us,
                          $correo_us,$codigo_postal_us,$pais_us,$provincia_us,$ciudad_us,$calle_uno_us,
                          $calle_dos_us,$referencia_us, $numero_casa_us,$password_us){
    $url = "https://tienda-online-utn.herokuapp.com/api/signup";
    $jsonData = array( 'name' => $usuario_us,
                      'cedula_us' => $cedula_us,
                      'nombres_us' => $nombres_us,
                      'apellidos_us' => $apellidos_us,
                      'fecha_nacimiento_us' => $fecha_nacimiento_us,
                      'telefono_us' => $telefono_us,
                      'email' => $correo_us,
                      'codigo_postal_us' => $codigo_postal_us,
                      'pais_us' => $pais_us,
                      'provincia_us' => $provincia_us,
                      'ciudad_us' => $ciudad_us,
                      'calle_uno_us' => $calle_uno_us,
                      'calle_dos_us' => $calle_dos_us,
                      'referencia_us' => $referencia_us,
                      'numero_casa_us' => $numero_casa_us,
                      'password' => $password_us,
                      'password_confirmation' => $password_us

                    );
    $response = $this->jsonResponse($url,$jsonData);
    $error="";
    $atributo = new Usuario();
    if(isset($response["message"])){
        $atributo->setMessage_us($response["message"]);
    }
    else {

      if(isset($response["errors"]["name"][0]))
      {
        $error="El nombre de usuario ya ha sido registrado. ";
      }else if(isset($response["errors"]["cedula_us"][0]))
      {
        $error="El número decédula ya ha sido registrado. ";
      }else if(isset($response["errors"]["email"][0])){
        $error="El número decédula ya ha sido registrado. ";
      }

      $atributo->setMessage_us($error);
    }
    return $atributo;
  }

  private function jsonResponse($url,$jsonData)
  {

    $options = array(
        'http' => array(
        'method'  => 'POST',
        'content' => json_encode( $jsonData ),
        'header'=>  "Content-Type: application/json\r\n" ,
                    "Accept: application/json\r\n",
                    'ignore_errors' => true
        )
    );
    $context  = stream_context_create( $options );
    $result = file_get_contents( $url, false, $context );
    $response = json_decode( $result ,true);

    return $response;

  }






}

?>
