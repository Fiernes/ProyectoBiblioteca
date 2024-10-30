<?php

class Estudiante {
    private $idEstudiante;
    private $idPersona;
    private $carrera;
    
    public function __constructFull($idEstudiante, $idPersona, $carrera){
        $this->idEstudiante = $idEstudiante;
        $this->idPersona = $idPersona;
        $this->carrera = $carrera;
    }
    public function getIdEstudiante() {
        return $this->idEstudiante;
    }

    public function getIdPersona() {
        return $this->idPersona;
    }

    public function getCarrera() {
        return $this->carrera;
    }

    public function setIdEstudiante($idEstudiante): void {
        $this->idEstudiante = $idEstudiante;
    }

    public function setIdPersona($idPersona): void {
        $this->idPersona = $idPersona;
    }

    public function setCarrera($carrera): void {
        $this->carrera = $carrera;
    }
}
