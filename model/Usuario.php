<?php

/**
 * @author zappy-zero
 */

class Usuario {

    public  $ID_US;
    private $CEDULA_US;
    private $NOMBRES_US;
    private $APELLIDOS_US;
    private $FECHA_NACIMIENTO_US;
    private $TELEFONO_US;
    private $CORREO_US;
    private $CODIGO_POSTAL_CL;
    private $PAIS_CL;
    private $PROVINCIA_CL;
    private $CIUDAD_CL;
    private $CALLE_UNO_CL;
    private $CALLE_DOS_CL;
    private $REFERENCIA_CL;
    private $NUMERO_CASA_CL;

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

    function getCODIGO_POSTAL_CL() {
        return $this->CODIGO_POSTAL_CL;
    }

    function getPAIS_CL() {
        return $this->PAIS_CL;
    }

    function getPROVINCIA_CL() {
        return $this->PROVINCIA_CL;
    }

    function getCIUDAD_CL() {
        return $this->CIUDAD_CL;
    }

    function getCALLE_UNO_CL() {
        return $this->CALLE_UNO_CL;
    }

    function getCALLE_DOS_CL() {
        return $this->CALLE_DOS_CL;
    }

    function getREFERENCIA_CL() {
        return $this->REFERENCIA_CL;
    }

    function getNUMERO_CASA_CL() {
        return $this->NUMERO_CASA_CL;
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

    function setCODIGO_POSTAL_CL($CODIGO_POSTAL_CL) {
        $this->CODIGO_POSTAL_CL = $CODIGO_POSTAL_CL;
    }

    function setPAIS_CL($PAIS_CL) {
        $this->PAIS_CL = $PAIS_CL;
    }

    function setPROVINCIA_CL($PROVINCIA_CL) {
        $this->PROVINCIA_CL = $PROVINCIA_CL;
    }

    function setCIUDAD_CL($CIUDAD_CL) {
        $this->CIUDAD_CL = $CIUDAD_CL;
    }

    function setCALLE_UNO_CL($CALLE_UNO_CL) {
        $this->CALLE_UNO_CL = $CALLE_UNO_CL;
    }

    function setCALLE_DOS_CL($CALLE_DOS_CL) {
        $this->CALLE_DOS_CL = $CALLE_DOS_CL;
    }

    function setREFERENCIA_CL($REFERENCIA_CL) {
        $this->REFERENCIA_CL = $REFERENCIA_CL;
    }

    function setNUMERO_CASA_CL($NUMERO_CASA_CL) {
        $this->NUMERO_CASA_CL = $NUMERO_CASA_CL;
    }

}
