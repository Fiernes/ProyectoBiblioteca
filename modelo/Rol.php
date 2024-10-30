<?php

class Rol {
  private $idRol;
  private $nombreRolUno;
  private $nombreRolDos;
  
  public function __construct() {
      
  }

  public function __constructFull($idRol, $nombreRolUno, $nombreRolDos) {
      $this->idRol = $idRol;
      $this->nombreRolUno = $nombreRolUno;
      $this->nombreRolDos = $nombreRolDos;
  }
  public function getIdRol() {
      return $this->idRol;
  }

  public function getNombreRolUno() {
      return $this->nombreRolUno;
  }

  public function getNombreRolDos() {
      return $this->nombreRolDos;
  }

  public function setIdRol($idRol): void {
      $this->idRol = $idRol;
  }

  public function setNombreRolUno($nombreRolUno): void {
      $this->nombreRolUno = $nombreRolUno;
  }

  public function setNombreRolDos($nombreRolDos): void {
      $this->nombreRolDos = $nombreRolDos;
  }
}
