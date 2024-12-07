<?php
require_once '../modelo/Conexion.php';
require_once '../modelo/Categorias.php';
require_once '../modeloDAO/CategoriasDAO.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombreCategoria = $_POST['nombreCategoria'];

    $dbConnection = new Conexion();
    $categoriasDAO = new CategoriasDAO($dbConnection);

    $nuevaCategoria = new Categorias(0, $nombreCategoria);

    $registroExitoso = true;

    if (!$categoriasDAO->crearCategoria($nuevaCategoria)) {
        $registroExitoso = false;
    }

    if ($registroExitoso) {
        echo "<script>alert('Registro exitoso.'); window.location.href='../registroLibros.html';</script>";
        exit();
    }else{
        echo "<script>alert('Error al registrar la categoria'); window.location.href='../registroLibros.html';</script>";
    }
}
