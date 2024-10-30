<?php

class Libro {
   private $idLibro;
   private $titulo;
   private $autor;
   private $yearPublicacion;
   private $categoria;
   private $cantidadDisponible;
   private $estado;
   
   public function __construct(){
       
   }
   public function __constructFull($idLibro, $titulo, $autor, $yearPublicacion, $categoria, $cantidadDisponible, $estado) {
       $this->idLibro = $idLibro;
       $this->titulo = $titulo;
       $this->autor = $autor;
       $this->yearPublicacion = $yearPublicacion;
       $this->categoria = $categoria;
       $this->cantidadDisponible = $cantidadDisponible;
       $this->estado = $estado;
   }
   public function getIdLibro() {
       return $this->idLibro;
   }

   public function getTitulo() {
       return $this->titulo;
   }

   public function getAutor() {
       return $this->autor;
   }

   public function getYearPublicacion() {
       return $this->yearPublicacion;
   }

   public function getCategoria() {
       return $this->categoria;
   }

   public function getCantidadDisponible() {
       return $this->cantidadDisponible;
   }

   public function getEstado() {
       return $this->estado;
   }

   public function setIdLibro($idLibro): void {
       $this->idLibro = $idLibro;
   }

   public function setTitulo($titulo): void {
       $this->titulo = $titulo;
   }

   public function setAutor($autor): void {
       $this->autor = $autor;
   }

   public function setYearPublicacion($yearPublicacion): void {
       $this->yearPublicacion = $yearPublicacion;
   }

   public function setCategoria($categoria): void {
       $this->categoria = $categoria;
   }

   public function setCantidadDisponible($cantidadDisponible): void {
       $this->cantidadDisponible = $cantidadDisponible;
   }

   public function setEstado($estado): void {
       $this->estado = $estado;
   }
}
