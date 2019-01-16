<?php

require_once '../modelo/ModeloCliente.php';
session_start();

$cliente = new ModeloCliente();
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
        header('Location: ../index.php');
        break;
}
        