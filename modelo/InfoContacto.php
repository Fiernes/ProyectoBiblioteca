<?php

class InfoContacto {
    private $idPersona;
    private $correoElectronico;
    private $telefonoCasa;
    private $telefonoPersonal;
    private $telefonoPersonalDos;
    
    public function __construct(){
        
    }
    public function __constructFull($idPersona, $correoElectronico, $telefonoCasa, $telefonoPersonal, $telefonoPersonalDos) {
        $this->idPersona = $idPersona;
        $this->correoElectronico = $correoElectronico;
        $this->telefonoCasa = $telefonoCasa;
        $this->telefonoPersonal = $telefonoPersonal;
        $this->telefonoPersonalDos = $telefonoPersonalDos;
    }
    public function getIdPersona() {
        return $this->idPersona;
    }

    public function getCorreoElectronico() {
        return $this->correoElectronico;
    }

    public function getTelefonoCasa() {
        return $this->telefonoCasa;
    }

    public function getTelefonoPersonal() {
        return $this->telefonoPersonal;
    }

    public function getTelefonoPersonalDos() {
        return $this->telefonoPersonalDos;
    }

    public function setIdPersona($idPersona): void {
        $this->idPersona = $idPersona;
    }

    public function setCorreoElectronico($correoElectronico): void {
        $this->correoElectronico = $correoElectronico;
    }

    public function setTelefonoCasa($telefonoCasa): void {
        $this->telefonoCasa = $telefonoCasa;
    }

    public function setTelefonoPersonal($telefonoPersonal): void {
        $this->telefonoPersonal = $telefonoPersonal;
    }

    public function setTelefonoPersonalDos($telefonoPersonalDos): void {
        $this->telefonoPersonalDos = $telefonoPersonalDos;
    }
}
