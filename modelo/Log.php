<?php


class Log {
    private $idLog;
    private $accion;
    private $fecha;
    private $idPersona;
    private $detalleAccion;
    
    public function __constructFull($idLog, $accion, $fecha, $idPersona, $detalleAccion) {
        $this->idLog = $idLog;
        $this->accion = $accion;
        $this->fecha = $fecha;
        $this->idPersona = $idPersona;
        $this->detalleAccion = $detalleAccion;
    }
    public function getIdLog() {
        return $this->idLog;
    }

    public function getAccion() {
        return $this->accion;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getIdPersona() {
        return $this->idPersona;
    }

    public function getDetalleAccion() {
        return $this->detalleAccion;
    }

    public function setIdLog($idLog): void {
        $this->idLog = $idLog;
    }

    public function setAccion($accion): void {
        $this->accion = $accion;
    }

    public function setFecha($fecha): void {
        $this->fecha = $fecha;
    }

    public function setIdPersona($idPersona): void {
        $this->idPersona = $idPersona;
    }

    public function setDetalleAccion($detalleAccion): void {
        $this->detalleAccion = $detalleAccion;
    }
}
