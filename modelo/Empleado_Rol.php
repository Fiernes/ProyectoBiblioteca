<?php

class Empleado_Rol {
    private $idEmpleado;
    private $idRol;
    
    public function __constructFull($idEmpleado, $idRol) {
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
