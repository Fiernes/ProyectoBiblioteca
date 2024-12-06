<?php

class EmpleadoRol {
    private $idEmpleado;
    private $idRol;
    
    public function __construct($idEmpleado, $idRol) {
        $this->idEmpleado = $idEmpleado;
        $this->idRol = $idRol;
    }
    public function getIdEmpleado() {
        return $this->idEmpleado;
    }

    public function getIdRol() {
        return $this->idRol;
    }

    public function setIdEmpleado($idEmpleado): void {
        $this->idEmpleado = $idEmpleado;
    }

    public function setIdRol($idRol): void {
        $this->idRol = $idRol;
    }
}
