<?php
include_once 'Database.php';
include_once 'Producto.php';

class Mod_Producto {


  public function getApiProductos(){
    $resultado =json_decode(file_get_contents("https://api-rest-tiendaonline.herokuapp.com/api/productos-categorias",true));
    $listado = array();
    foreach ($resultado as $dato) {
        $atributo = new Producto();
        //$atributo->setId_pr($dato['id']);
        //$atributo->setCodigo_pr($dato['id']);
        $atributo->setImagen_pr("https://www.familiasnumerosascv.org/wp-content/uploads/2015/05/icono-camara.png");
        $atributo->setNombre_pr($dato->pro_nombre);
        $atributo->setDetalle_pr($dato->pro_descripcion);
        //$atributo->setCaracteristicas_pr($dato['id']);
        $atributo->setValor_unitario_pr($dato->pro_precio);
        //$atributo->setStock_pr($dato['id']);

        array_push($listado, $atributo);
    }
      return $listado;
  }
  public function getProductos() {

        $pdo = Database::connect();
        $sql = "select * from tbl_productos";
        $resultado = $pdo->query($sql);
        $listado = array();
        foreach ($resultado as $dato) {
            $atributo = new Producto();
            //$atributo->setId_pr($dato['id']);
            //$atributo->setCodigo_pr($dato['id']);
            $atributo->setImagen_pr($dato['imagen']);
            $atributo->setNombre_pr($dato['nombre']);
            $atributo->setDetalle_pr($dato['descripcion']);
            //$atributo->setCaracteristicas_pr($dato['id']);
            $atributo->setValor_unitario_pr($dato['precio']);
            //$atributo->setStock_pr($dato['id']);

            array_push($listado, $atributo);
        }
        Database::disconnect();
        return $listado;
    }





}
?>
