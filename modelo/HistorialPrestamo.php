<?php

class HistorialPrestamo {
    private $idPrestamo;
    private $fechaPrestamo;
    private $fechaDevolucion;
    private $estado;
    private $idEstudiante;
    private $idLibro;
    private $idMulta;
    
    public function __construct($idPrestamo, $fechaPrestamo, $fechaDevolucion, $estado, $idEstudiante, $idLibro, $idMulta) {
        $this->idPrestamo = $idPrestamo;
        $this->fechaPrestamo = $fechaPrestamo;
        $this->fechaDevolucion = $fechaDevolucion;
        $this->estado = $estado;
        $this->idEstudiante = $idEstudiante;
        $this->idLibro = $idLibro;
        $this->idMulta = $idMulta;
    }
    public function getIdPrestamo() {
        return $this->idPrestamo;
    }

    public function getFechaPrestamo() {
        return $this->fechaPrestamo;
    }

    public function getFechaDevolucion() {
        return $this->fechaDevolucion;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getIdEstudiante() {
        return $this->idEstudiante;
    }

    public function getIdLibro() {
        return $this->idLibro;
    }

    public function getIdMulta() {
        return $this->idMulta;
    }

    public function setIdPrestamo($idPrestamo): void {
        $this->idPrestamo = $idPrestamo;
    }

    public function setFechaPrestamo($fechaPrestamo): void {
        $this->fechaPrestamo = $fechaPrestamo;
    }

    public function setFechaDevolucion($fechaDevolucion): void {
        $this->fechaDevolucion = $fechaDevolucion;
    }

    public function setEstado($estado): void {
        $this->estado = $estado;
    }

    public function setIdEstudiante($idEstudiante): void {
        $this->idEstudiante = $idEstudiante;
    }

    public function setIdLibro($idLibro): void {
        $this->idLibro = $idLibro;
    }

    public function setIdMulta($idMulta): void {
        $this->idMulta = $idMulta;
    }
}
