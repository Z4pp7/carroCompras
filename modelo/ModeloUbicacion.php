<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModeloUbicacion
 *
 * @author jorgi
 */
include_once 'Database.php';
include_once 'Ubicacion.php';

class ModeloUbicacion {

    public function crearUbicacion($ID_CL, $CODIGO_POSTAL_UB, $PAIS_UB, $PROVINCIA_UB, $CIUDAD_UB, $CALLE_UNO_UB, $CALLE_DOS_UB, $REFERENCIA_UB, $NUMERO_CASA_UB) {

        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "insert into TB_UBICACION (ID_CL,CODIGO_POSTAL_UB,PAIS_UB,PROVINCIA_UB,CIUDAD_UB,CALLE_UNO,CALLE_DOS,REFERENCIA,NUMERO_CASA) values(?,?,?,?,?,?,?,?,?)";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($ID_CL, $CODIGO_POSTAL_UB, $PAIS_UB, $PROVINCIA_UB, $CIUDAD_UB, $CALLE_UNO_UB, $CALLE_DOS_UB, $REFERENCIA_UB, $NUMERO_CASA_UB
            ));
        } catch (PDOException $e) {

            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

}
