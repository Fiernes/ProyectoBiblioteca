<?php

class Carrito_Libros {
    private $idCarrito;
    private $idLibro;
    
    public function __construct() {
        
    }
    
    public function __constructFull($idCarrito, $idLibro) {
        $this->idCarrito = $idCarrito;
        $this->idLibro = $idLibro;
    }
    
    public function getIdCarrito() {
        return $this->idCarrito;
    }

    public function getIdLibro() {
        return $this->idLibro;
    }

    public function setIdCarrito($idCarrito): void {
        $this->idCarrito = $idCarrito;
    }

    public function setIdLibro($idLibro): void {
        $this->idLibro = $idLibro;
    }


}
