<?php
require_once '../modelo/Conexion.php';
require_once '../modelo/Libro.php';
require_once '../modeloDAO/LibroDAO.php';
require_once '../modelo/ImagenLibros.php';
require_once '../modeloDAO/ImagenLibrosDAO.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $codigo = $_POST['codigo'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $fechaPublicacion = $_POST['fechaPublicacion'];
    $categoria = $_POST['miLista'];
    $cantidadDisponible = $_POST['cantidad'];
    $estado = $_POST['estado'];

    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
        echo"estoy dentro del if";
        $imagen = file_get_contents($_FILES['imagen']['tmp_name']);
        $nombreImagen = $_FILES['imagen']['name'];

        $tipoImagen = $_FILES['imagen']['type'];

        $dbConnection = new Conexion();

        $libroDAO = new LibroDAO($dbConnection);
        $imagenDAO = new ImagenLibrosDAO($dbConnection);

        $nuevoLibro = new Libro($codigo, $titulo, $autor, $fechaPublicacion, $categoria, $cantidadDisponible, $estado);
        $nuevaImagen = new ImagenLibros($codigo, $nombreImagen,$tipoImagen, $imagen);

        $registroExitoso = true;

        if (!$libroDAO->crearLibro($nuevoLibro)) {
            $registroExitoso = false;
            echo "<script>alert('Error al registrar los datos del libro.');</script>";
        }
        
        if (!$imagenDAO->crearImagenLibro($nuevaImagen)) {
            $registroExitoso = false;
            echo "<script>alert('Error al registrar la imagen del libro.');</script>";
        }
        

        if ($registroExitoso) {
            echo "<script>alert('Registro exitoso.'); window.location.href='../registroLibros.html';</script>";
            exit();
        } else {
            echo "<script>alert('Error al registrar el libro'); window.location.href='../registroLibros.html';</script>";
        }

    }
}