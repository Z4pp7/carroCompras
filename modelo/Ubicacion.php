<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ubicacion
 *
 * @author jorgi
 */
class Ubicacion {

    private $ID_UB;
    private $ID_CL;
    private $CODIGO_POSTAL_UB;
    private $PAIS_UB;
    private $PROVINCIA_UB;
    private $CIUDAD_UB;
    private $CALLE_UNO_UB;
    private $CALLE_DOS_UB;
    private $REFERENCIA_UB;
    private $NUMERO_CASA_UB;
  
    

    function getID_UB() {
        return $this->ID_UB;
    }

    function getID_CL() {
        return $this->ID_CL;
    }

    function getCODIGO_POSTAL_UB() {
        return $this->CODIGO_POSTAL_UB;
    }

    function getPAIS_UB() {
        return $this->PAIS_UB;
    }

    function getPROVINCIA_UB() {
        return $this->PROVINCIA_UB;
    }

    function getCIUDAD_UB() {
        return $this->CIUDAD_UB;
    }

    function getCALLE_UNO_UB() {
        return $this->CALLE_UNO_UB;
    }

    function getCALLE_DOS_UB() {
        return $this->CALLE_DOS_UB;
    }

    function getREFERENCIA_UB() {
        return $this->REFERENCIA_UB;
    }

    function getNUMERO_CASA_UB() {
        return $this->NUMERO_CASA_UB;
    }

    function setID_UB($ID_UB) {
        $this->ID_UB = $ID_UB;
    }

    function setID_CL($ID_CL) {
        $this->ID_CL = $ID_CL;
    }

    function setCODIGO_POSTAL_UB($CODIGO_POSTAL_UB) {
        $this->CODIGO_POSTAL_UB = $CODIGO_POSTAL_UB;
    }

    function setPAIS_UB($PAIS_UB) {
        $this->PAIS_UB = $PAIS_UB;
    }

    function setPROVINCIA_UB($PROVINCIA_UB) {
        $this->PROVINCIA_UB = $PROVINCIA_UB;
    }

    function setCIUDAD_UB($CIUDAD_UB) {
        $this->CIUDAD_UB = $CIUDAD_UB;
    }

    function setCALLE_UNO_UB($CALLE_UNO_UB) {
        $this->CALLE_UNO_UB = $CALLE_UNO_UB;
    }

    function setCALLE_DOS_UB($CALLE_DOS_UB) {
        $this->CALLE_DOS_UB = $CALLE_DOS_UB;
    }

    function setREFERENCIA_UB($REFERENCIA_UB) {
        $this->REFERENCIA_UB = $REFERENCIA_UB;
    }

    function setNUMERO_CASA_UB($NUMERO_CASA_UB) {
        $this->NUMERO_CASA_UB = $NUMERO_CASA_UB;
    }



}
