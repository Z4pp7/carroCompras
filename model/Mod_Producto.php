<?php

/**
 * @author zappy-zero
 */

include_once 'Database.php';
include_once 'Producto.php';
include_once 'Categoria.php';

class Mod_Producto {


  public function getApiProductos(){
    $resultado =json_decode(file_get_contents("https://api-rest-tiendaonline.herokuapp.com/api/productos-categorias",true));
    $listado = array();
    foreach ($resultado as $dato) {
        $atributo = new Producto();
        //$atributo->setId_pr($dato->pro_nombre);
        $atributo->setCodigo_pr($dato->pro_codigo);
        //$atributo->setCategoria_pr($dato->cat_nombre);
        $atributo->setImagen_pr("https://www.familiasnumerosascv.org/wp-content/uploads/2015/05/icono-camara.png");
        $atributo->setNombre_pr($dato->pro_nombre);
        $atributo->setDescripcion_pr($dato->pro_descripcion);
        $atributo->setCaracteristicas_pr($dato->pro_caracteristicas);
        $atributo->setValor_unitario_pr($dato->pro_precio);
        $atributo->setStock_pr($dato->pro_stock);

        array_push($listado, $atributo);
    }
      return $listado;
  }
  public function getProductos() {

        $pdo = Database::connect();
        $sql = "select * from productos";
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

      public function getApiCategorias(){
        $resultado =json_decode(file_get_contents("https://api-rest-tiendaonline.herokuapp.com/api/productos-categorias",true));
        $listado = array();
        foreach ($resultado as $dato) {
            $atributo = new Categoria();
            $atributo->setNombre_ca($dato->cat_nombre);
            array_push($listado, $atributo);
        }
          return $listado;
      }





}
?>
