<?php

/**
 * @author zappy-zero
 */

class Mod_Compra {


  public function order ($total,$numero_targeta,$usuario,$precio_envio,$tipo_envio,$regalo,$detalle){

    $jsonData = new stdClass();
    $jsonData->invoice_header = array('total' => $total,
                                    'payment_account' => $numero_targeta,
                                    'client_id'	=> $usuario ,
                                    'sub_total' => $total ,
                                    'shipping_cost' => $precio_envio,
                                    'shipping_kind' => $tipo_envio,
                                    'gift' => $regalo);
    $jsonData->inovice_details = $detalle; //donde detalle es el arreglo con informacion de cada producto
    $url = "http://facturacion-utn-amazon.herokuapp.com/api/new-e-commerce-invoice";
    $response = $this->jsonResponse($url,$jsonData);
    return $response;

  }




  private function jsonResponse($url,$jsonData)
  {

    $options = array(
        'http' => array(
        'method'  => 'POST',
        'content' => json_encode( $jsonData ),
        'header'=>  "Content-Type: application/json\r\n",
                    "Accept: application/json\r\n",
                    'ignore_errors' => false
        )
    );
    $context  = stream_context_create( $options );
    $result = file_get_contents( $url, false, $context );
    $response = json_decode( $result ,true);

    return $response;

  }


}
