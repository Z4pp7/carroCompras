<?php

require_once '../modelo/ModeloCliente.php';
require_once '../modelo/ModeloUbicacion.php';

session_start();

$cliente = new ModeloCliente();
$ubicacion = new ModeloUbicacion();

$opcion = $_REQUEST['opcion'];

switch ($opcion) {



    case 'guardarCliente':
        $CEDULA_CL = $_REQUEST['cedula'];
        $NOMBRES_CL = $_REQUEST['nombres'];
        $APELLIDOS_CL = $_REQUEST['apellidos'];
        $FECHA_NACIMIENTO_CL = $_REQUEST['fecha'];
        $TELEFONO_CL = $_REQUEST['telefono'];
        $CORREO_CL = $_REQUEST['correo'];
        $cliente->crearCliente($CEDULA_CL, $NOMBRES_CL, $APELLIDOS_CL, $FECHA_NACIMIENTO_CL, $TELEFONO_CL, $CORREO_CL);
        header('Location: ../vista/registroUbicacion.php');
        break;


    case 'guardarUbicacion':
    //    $ID_CLI=$cliente->getID_CL();
        $CEDULA_CL = $_REQUEST['cedula'];
        $CODIGO_POSTAL_UB = $_REQUEST['nombres'];
        $PAIS_UB = $_REQUEST['apellidos'];
        $PROVINCIA_UB = $_REQUEST['fecha'];
        $CIUDAD_UB = $_REQUEST['telefono'];
        $CALLE_UNO_UB= $_REQUEST['correo'];
        $CALLE_DOS_UB = $_REQUEST['fecha'];
        $REFERENCIA_UB= $_REQUEST['telefono'];
        $NUMERO_CASA_IB = $_REQUEST['correo'];
       // $ubicacion->crearUbicacion($ID_CL, $CODIGO_POSTAL_UB, $PAIS_UB, $PROVINCIA_UB, $CIUDAD_UB, $CALLE_UNO_UB, $CALLE_DOS_UB, $REFERENCIA_UB, $NUMERO_CASA_UB);
        header('Location: ../index.php');
        break;
}
        