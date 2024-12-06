<?php

class Rol {
  private $idRol;
  private $nombreRol;
  
  public function __construct($idRol, $nombreRol) {
      $this->idRol = $idRol;
      $this->nombreRol = $nombreRol;
  }
  public function getIdRol() {
      return $this->idRol;
  }

  public function getNombreRol() {
      return $this->nombreRol;
  }

  public function setIdRol($idRol): void {
      $this->idRol = $idRol;
  }

  public function setNombreRol($nombreRol): void {
      $this->nombreRol = $nombreRol;
  }
}
