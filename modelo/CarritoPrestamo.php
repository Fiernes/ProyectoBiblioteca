<?php
class CarritoPrestamo {
    private $idCarrito;
    private $cantidadLibros;
    private $idEstudiante;
    public function __construct($idCarrito, $cantidadLibros, $idEstudiante) {
        $this->idCarrito = $idCarrito;
        $this->cantidadLibros = $cantidadLibros;
        $this->idEstudiante = $idEstudiante;
    }

    public function getIdCarrito() {
        return $this->idCarrito;
    }

    public function getCantidadLibros() {
        return $this->cantidadLibros;
    }

    public function getIdEstudiante() {
        return $this->idEstudiante;
    }

    public function setIdCarrito($idCarrito): void {
        $this->idCarrito = $idCarrito;
    }

    public function setCantidadLibros($cantidadLibros): void {
        $this->cantidadLibros = $cantidadLibros;
    }

    public function setIdEstudiante($idEstudiante): void {
        $this->idEstudiante = $idEstudiante;
    }

      
}
