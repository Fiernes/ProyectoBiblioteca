<?php

class Multa {
    private $idMulta;
    private $monto;
    private $fechaMulta;
    private $resumen;
    private $pagada;
    
    public function __construct() {
        
    }

    public function __constructFull($idMulta, $monto, $fechaMulta, $resumen, $pagada) {
        $this->idMulta = $idMulta;
        $this->monto = $monto;
        $this->fechaMulta = $fechaMulta;
        $this->resumen = $resumen;
        $this->pagada = $pagada;
    }
    public function getIdMulta() {
        return $this->idMulta;
    }

    public function getMonto() {
        return $this->monto;
    }

    public function getFechaMulta() {
        return $this->fechaMulta;
    }

    public function getResumen() {
        return $this->resumen;
    }

    public function getPagada() {
        return $this->pagada;
    }

    public function setIdMulta($idMulta): void {
        $this->idMulta = $idMulta;
    }

    public function setMonto($monto): void {
        $this->monto = $monto;
    }

    public function setFechaMulta($fechaMulta): void {
        $this->fechaMulta = $fechaMulta;
    }

    public function setResumen($resumen): void {
        $this->resumen = $resumen;
    }

    public function setPagada($pagada): void {
        $this->pagada = $pagada;
    }
}
