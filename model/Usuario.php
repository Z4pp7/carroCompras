<?php

/**
 * @author zappy-zero
 */

class Usuario {

    public  $id_us;
    private $cedula_us;
    private $nombres_us;
    private $apellidos_us;
    private $fecha_nacimiento_us;
    private $telefono_us;
    private $correo_us;
    private $codigo_postal_cl;
    private $pais_cl;
    private $provincia_cl;
    private $ciudad_cl;
    private $calle_uno_cl;
    private $calle_dos_cl;
    private $referencia_cl;
    private $numero_casa_cl;
    private $usuario_cl;
    private $password_cl;

    function getId_us() {
        return $this->id_us;
    }

    function getCedula_us() {
        return $this->cedula_us;
    }

    function getNombres_us() {
        return $this->nombres_us;
    }

    function getApellidos_us() {
        return $this->apellidos_us;
    }

    function getFecha_nacimiento_us() {
        return $this->fecha_nacimiento_us;
    }

    function getTelefono_us() {
        return $this->telefono_us;
    }

    function getCorreo_us() {
        return $this->correo_us;
    }

    function getCodigo_postal_cl() {
        return $this->codigo_postal_cl;
    }

    function getPais_cl() {
        return $this->pais_cl;
    }

    function getProvincia_cl() {
        return $this->provincia_cl;
    }

    function getCiudad_cl() {
        return $this->ciudad_cl;
    }

    function getCalle_uno_cl() {
        return $this->calle_uno_cl;
    }

    function getCalle_dos_cl() {
        return $this->calle_dos_cl;
    }

    function getReferencia_cl() {
        return $this->referencia_cl;
    }

    function getNumero_casa_cl() {
        return $this->numero_casa_cl;
    }

    function getUsuario_cl() {
        return $this->usuario_cl;
    }

    function getPassword_cl() {
        return $this->password_cl;
    }

    function setId_us($id_us) {
        $this->id_us = $id_us;
    }

    function setCedula_us($cedula_us) {
        $this->cedula_us = $cedula_us;
    }

    function setNombres_us($nombres_us) {
        $this->nombres_us = $nombres_us;
    }

    function setApellidos_us($apellidos_us) {
        $this->apellidos_us = $apellidos_us;
    }

    function setFecha_nacimiento_us($fecha_nacimiento_us) {
        $this->fecha_nacimiento_us = $fecha_nacimiento_us;
    }

    function setTelefono_us($telefono_us) {
        $this->telefono_us = $telefono_us;
    }

    function setCorreo_us($correo_us) {
        $this->correo_us = $correo_us;
    }

    function setCodigo_postal_cl($codigo_postal_cl) {
        $this->codigo_postal_cl = $codigo_postal_cl;
    }

    function setPais_cl($pais_cl) {
        $this->pais_cl = $pais_cl;
    }

    function setProvincia_cl($provincia_cl) {
        $this->provincia_cl = $provincia_cl;
    }

    function setCiudad_cl($ciudad_cl) {
        $this->ciudad_cl = $ciudad_cl;
    }

    function setCalle_uno_cl($calle_uno_cl) {
        $this->calle_uno_cl = $calle_uno_cl;
    }

    function setCalle_dos_cl($calle_dos_cl) {
        $this->calle_dos_cl = $calle_dos_cl;
    }

    function setReferencia_cl($referencia_cl) {
        $this->referencia_cl = $referencia_cl;
    }

    function setNumero_casa_cl($numero_casa_cl) {
        $this->numero_casa_cl = $numero_casa_cl;
    }

    function setUsuario_cl($usuario_cl) {
        $this->usuario_cl = $usuario_cl;
    }

    function setPassword_cl($password_cl) {
        $this->password_cl = $password_cl;
    }



}
