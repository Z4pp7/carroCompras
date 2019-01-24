<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author jorgi
 */
class Cliente {

    public $ID_CL;
    private $CEDULA_CL;
    private $NOMBRES_CL;
    private $APELLIDOS_CL;
    private $FECHA_NACIMIENTO_CL;
    private $TELEFONO_CL;
    private $CORREO_CL;

    function getID_CL() {
        return $this->ID_CL;
    }

    function getCEDULA_CL() {
        return $this->CEDULA_CL;
    }

    function getNOMBRES_CL() {
        return $this->NOMBRES_CL;
    }

    function getAPELLIDOS_CL() {
        return $this->APELLIDOS_CL;
    }

    function getFECHA_NACIMIENTO_CL() {
        return $this->FECHA_NACIMIENTO_CL;
    }

    function getTELEFONO_CL() {
        return $this->TELEFONO_CL;
    }

    function getCORREO_CL() {
        return $this->CORREO_CL;
    }

    function setID_CL($ID_CL) {
        $this->ID_CL = $ID_CL;
    }

    function setCEDULA_CL($CEDULA_CL) {
        $this->CEDULA_CL = $CEDULA_CL;
    }

    function setNOMBRES_CL($NOMBRES_CL) {
        $this->NOMBRES_CL = $NOMBRES_CL;
    }

    function setAPELLIDOS_CL($APELLIDOS_CL) {
        $this->APELLIDOS_CL = $APELLIDOS_CL;
    }

    function setFECHA_NACIMIENTO_CL($FECHA_NACIMIENTO_CL) {
        $this->FECHA_NACIMIENTO_CL = $FECHA_NACIMIENTO_CL;
    }

    function setTELEFONO_CL($TELEFONO_CL) {
        $this->TELEFONO_CL = $TELEFONO_CL;
    }

    function setCORREO_CL($CORREO_CL) {
        $this->CORREO_CL = $CORREO_CL;
    }

}
