<?php

class Direccion {

    private $idPersona;
    private $departamento;
    private $ciudad;
    private $colonia;
    private $numeroCasa;

    public function __construct($idPersona, $departamento, $ciudad, $colonia, $numeroCasa) {
        $this->idPersona = $idPersona;
        $this->departamento = $departamento;
        $this->ciudad = $ciudad;
        $this->colonia = $colonia;
        $this->numeroCasa = $numeroCasa;
    }

    public function getIdPersona() {
        return $this->idPersona;
    }

    public function getDepartamento() {
        return $this->departamento;
    }

    public function getCiudad() {
        return $this->ciudad;
    }

    public function getColonia() {
        return $this->colonia;
    }

    public function getNumeroCasa() {
        return $this->numeroCasa;
    }

    public function setIdPersona($idPersona): void {
        $this->idPersona = $idPersona;
    }

    public function setDepartamento($departamento): void {
        $this->departamento = $departamento;
    }

    public function setCiudad($ciudad): void {
        $this->ciudad = $ciudad;
    }

    public function setColonia($colonia): void {
        $this->colonia = $colonia;
    }

    public function setNumeroCasa($numeroCasa): void {
        $this->numeroCasa = $numeroCasa;
    }

}
