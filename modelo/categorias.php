<?php

class Categorias {

    private $idCategoria;
    private $nombre;

    public function __construct($idCategoria, $nombre) {
        $this->idCategoria = $idCategoria;
        $this->nombre = $nombre;
    }

    public function getIdCategoria() {
        return $this->idCategoria;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setIdCategoria($idCategoria): void {
        $this->idCategoria = $idCategoria;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

}
