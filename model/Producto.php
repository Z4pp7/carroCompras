<?php
/**
 * @author zappy-zero
 */
class Producto {

    private $id_pr;
    private $codigo_pr;
    private $categoria_pr;
    private $imagen_pr;
    private $nombre_pr;
    private $descripcion_pr;
    private $caracteristicas_pr;
    private $valor_unitario_pr;
    private $stock_pr;
    private $descuento_pr;
    private $valor_descuento_pr;

    function getId_pr() {
        return $this->id_pr;
    }

    function getCodigo_pr() {
        return $this->codigo_pr;
    }

    function getCategoria_pr() {
        return $this->categoria_pr;
    }

    function getImagen_pr() {
        return $this->imagen_pr;
    }

    function getNombre_pr() {
        return $this->nombre_pr;
    }

    function getDescripcion_pr() {
        return $this->descripcion_pr;
    }

    function getCaracteristicas_pr() {
        return $this->caracteristicas_pr;
    }

    function getValor_unitario_pr() {
        return $this->valor_unitario_pr;
    }

    function getStock_pr() {
        return $this->stock_pr;
    }

    function getDescuento_pr() {
        return $this->descuento_pr;
    }
    function getValor_descuento_pr() {
        return $this->valor_descuento_pr;
    }


    function setId_pr($id_pr) {
        $this->id_pr = $id_pr;
    }

    function setCodigo_pr($codigo_pr) {
        $this->codigo_pr = $codigo_pr;
    }

    function setCategoria_pr($categoria_pr) {
        $this->categoria_pr = $categoria_pr;
    }

    function setImagen_pr($imagen_pr) {
        $this->imagen_pr = $imagen_pr;
    }

    function setNombre_pr($nombre_pr) {
        $this->nombre_pr = $nombre_pr;
    }

    function setDescripcion_pr($descripcion_pr) {
        $this->descripcion_pr = $descripcion_pr;
    }

    function setCaracteristicas_pr($caracteristicas_pr) {
        $this->caracteristicas_pr = $caracteristicas_pr;
    }

    function setValor_unitario_pr($valor_unitario_pr) {
        $this->valor_unitario_pr = $valor_unitario_pr;
    }

    function setStock_pr($stock_pr) {
        $this->stock_pr = $stock_pr;
    }
    function setDescuento_pr($descuento_pr) {
        $this->descuento_pr = $descuento_pr;
    }
    function setValor_descuento_pr($valor_descuento_pr) {
        $this->valor_descuento_pr = $valor_descuento_pr;
    }













}
