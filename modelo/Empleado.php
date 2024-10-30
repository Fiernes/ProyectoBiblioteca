<?php

class Empleado {
    private $idEmpleado;
    private $tipoEmpleado;
    private $puesto;
    private $departamento;
    private $horarioLaboral;
    private $idPersona;
    
    public function __construct() {
        
    }
    
    public function __constructFull($idEmpleado, $tipoEmpleado, $puesto, $departamento, $horarioLaboral, $idPersona){
        $this->idEmpleado = $idEmpleado;
        $this->tipoEmpleado = $tipoEmpleado;
        $this->puesto = $puesto;
        $this->departamento = $departamento;
        $this->horarioLaboral = $horarioLaboral;
        $this->idPersona = $idPersona;
    }
    public function getIdEmpleado() {
        return $this->idEmpleado;
    }

    public function getTipoEmpleado() {
        return $this->tipoEmpleado;
    }

    public function getPuesto() {
        return $this->puesto;
    }

    public function getDepartamento() {
        return $this->departamento;
    }

    public function getHorarioLaboral() {
        return $this->horarioLaboral;
    }

    public function getIdPersona() {
        return $this->idPersona;
    }

    public function setIdEmpleado($idEmpleado): void {
        $this->idEmpleado = $idEmpleado;
    }

    public function setTipoEmpleado($tipoEmpleado): void {
        $this->tipoEmpleado = $tipoEmpleado;
    }

    public function setPuesto($puesto): void {
        $this->puesto = $puesto;
    }

    public function setDepartamento($departamento): void {
        $this->departamento = $departamento;
    }

    public function setHorarioLaboral($horarioLaboral): void {
        $this->horarioLaboral = $horarioLaboral;
    }

    public function setIdPersona($idPersona): void {
        $this->idPersona = $idPersona;
    }
}
