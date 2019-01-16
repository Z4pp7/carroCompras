<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModeloCliente
 *
 * @author jorgi
 */

include_once 'Database.php';
include_once 'Cliente.php';

class ModeloCliente {
    
  
      public function crearCliente($CEDULA_CL, $NOMBRES_CL, $APELLIDOS_CL, $FECHA_NACIMIENTO_CL, $TELEFONO_CL, $CORREO_CL) {

        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "insert into TB_CLIENTE (CEDULA_CL,NOMBRES_CL,APELLIDOS_CL,FECHA_NACIMIENTO_CL,TELEFONO_CL,CORREO_CL) values(?,?,?,?,?,?)";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($CEDULA_CL, $NOMBRES_CL, $APELLIDOS_CL, $FECHA_NACIMIENTO_CL, $TELEFONO_CL, $CORREO_CL));
        } catch (PDOException $e) {
            
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }
    
  
  
}
