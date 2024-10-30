<?php

class Persona {
    private $idPersona;
    private $usuario;
    private $password;
    private $primerNombre;
    private $segundoNombre;
    private $primerApellido;
    private $segundoApellido;
    private $DNI;
    
    public function __construct() {
        
    }
    
    public function __constructFull($idPersona, $usuario, $password, $primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $DNI) {
        $this->idPersona = $idPersona;
        $this->usuario = $usuario;
        $this->password = $password;
        $this->primerNombre = $primerNombre;
        $this->segundoNombre = $segundoNombre;
        $this->primerApellido = $primerApellido;
        $this->segundoApellido = $segundoApellido;
        $this->DNI = $DNI;
    }
    
    public function getIdPersona() {
        return $this->idPersona;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getPrimerNombre() {
        return $this->primerNombre;
    }

    public function getSegundoNombre() {
        return $this->segundoNombre;
    }

    public function getPrimerApellido() {
        return $this->primerApellido;
    }

    public function getSegundoApellido() {
        return $this->segundoApellido;
    }

    public function getDNI() {
        return $this->DNI;
    }

    public function setIdPersona($idPersona): void {
        $this->idPersona = $idPersona;
    }

    public function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }

    public function setPrimerNombre($primerNombre): void {
        $this->primerNombre = $primerNombre;
    }

    public function setSegundoNombre($segundoNombre): void {
        $this->segundoNombre = $segundoNombre;
    }

    public function setPrimerApellido($primerApellido): void {
        $this->primerApellido = $primerApellido;
    }

    public function setSegundoApellido($segundoApellido): void {
        $this->segundoApellido = $segundoApellido;
    }

    public function setDNI($DNI): void {
        $this->DNI = $DNI;
    }
}
