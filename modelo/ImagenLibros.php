<?php

class ImagenLibros {

    private $idLibro;
    private $nombre;
    private $tipo;
    private $imagen;

    public function __construct($idLibro, $nombre, $tipo, $imagen) {
        $this->idLibro = $idLibro;
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->imagen = $imagen;
    }

    public function getIdLibro() {
        return $this->idLibro;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getImagen() {
        return $this->imagen;
    }

    public function setIdLibro($idLibro): void {
        $this->idLibro = $idLibro;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    public function setImagen($imagen): void {
        $this->imagen = $imagen;
    }
}
