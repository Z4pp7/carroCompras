<?php

/**
 * @author zappy-zero
 */

class Categoria {

  private $id_ca;
  private $nombre_ca;
  
  function getId_ca() {
      return $this->id_ca;
  }

  function getNombre_ca() {
      return $this->nombre_ca;
  }

  function setId_ca($id_ca) {
      $this->id_ca = $id_ca;
  }

  function setNombre_ca($nombre_ca) {
      $this->nombre_ca = $nombre_ca;
  }



  

}
