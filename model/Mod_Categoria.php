<?php

/**
 * @author zappy-zero
 */


include_once 'Categoria.php';
include_once 'Producto.php';

class Mod_Categoria {

  public function getApiCategorias(){

    $inventario_URL = "https://api-rest-tiendaonline.herokuapp.com/api/productos-categorias";
    $inventario_json = file_get_contents($inventario_URL);
    $inventario_array = json_decode($inventario_json, true);
    $listado = array();
    foreach ($inventario_array as $dato) {
        $atributo = new Categoria();
        $atributo->setNombre_ca($dato["categoria"]["cat_nombre"]);
        array_push($listado, $atributo);
    }
    return $listado;
  }

  public function getApiProductosCategorizados($categoria){

    $inventario_URL = "https://api-rest-tiendaonline.herokuapp.com/api/productos-categorias";
    $inventario_json = file_get_contents($inventario_URL);
    $inventario_array = json_decode($inventario_json, true);
    $listado = array();
    foreach ($inventario_array as $dato) {
          $atributo = new Producto();
        if($dato["categoria"]["cat_nombre"]===$categoria){

          $atributo->setCodigo_pr($dato['pro_codigo']);
          $atributo->setCategoria_pr($dato["categoria"]["cat_nombre"]);
          $atributo->setImagen_pr($dato['pro_foto']);
          $atributo->setNombre_pr($dato['pro_nombre']);
          $atributo->setDescripcion_pr($dato['pro_descripcion']);
          $atributo->setCaracteristicas_pr($dato['pro_caracteristicas']);
          $atributo->setValor_unitario_pr($dato['pro_precio']);
          $atributo->setStock_pr($dato['pro_stock']);
            array_push($listado, $atributo);
        }

    }
    return $listado;
  }



  // funciones para probrar localmente

  public function getProductosCategorizados($categoria) {

        $pdo = Database::connect();
        $sql = "select * from productos where categoria_pr='".$categoria."'";
        $resultado = $pdo->query($sql);
        $listado = array();
        foreach ($resultado as $dato) {
            $atributo = new Producto();
            $atributo->setId_pr($dato['id_pr']);
            $atributo->setCodigo_pr($dato['codigo_pr']);
            $atributo->setCategoria_pr($dato['categoria_pr']);
            $atributo->setImagen_pr($dato['imagen_pr']);
            $atributo->setNombre_pr($dato['nombre_pr']);
            $atributo->setDescripcion_pr($dato['descripcion_pr']);
            $atributo->setCaracteristicas_pr($dato['caracteristicas_pr']);
            $atributo->setValor_unitario_pr($dato['valor_unitario_pr']);
            $atributo->setStock_pr($dato['stock_pr']);

            array_push($listado, $atributo);
        }
        Database::disconnect();
        return $listado;
    }

    public function getCategorias() {

          $pdo = Database::connect();
          $sql = "select distinct categoria_pr from productos";
          $resultado = $pdo->query($sql);
          $listado = array();
          foreach ($resultado as $dato) {
              $atributo = new Categoria();
              $atributo->setNombre_ca($dato['categoria_pr']);
              array_push($listado, $atributo);
          }
          Database::disconnect();
          return $listado;
      }
}
