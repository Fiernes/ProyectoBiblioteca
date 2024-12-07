<?php
require_once '../modelo/Conexion.php';
require_once '../modelo/Categorias.php';
require_once '../modeloDAO/CategoriasDAO.php';

$dbConnection = new Conexion();

// Crear instancia de la clase y obtener las categorías
$categoriasDAO = new CategoriasDAO($dbConnection);
$categorias = $categoriasDAO->listarCategorias();

// Generar las opciones dinámicamente
foreach ($categorias as $categoria) {
    echo '<option>' . htmlspecialchars($categoria->getNombre()) . '</option>';
}
