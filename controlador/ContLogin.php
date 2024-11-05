<?php
require_once '../modeloDAO/PersonaDAO.php';
require_once '../modelo/Conexion.php';

session_start();

echo "esta aqui";
// Verifica que se hayan enviado los datos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Crear instancia de la conexión a la base de datos
    $dbConnection = new Conexion();
    // Crear instancia de PersonaDAO con la conexión
    $personaDAO = new PersonaDAO($dbConnection);

    // Intentar autenticación
    $persona = $personaDAO->login($usuario, $password);

    if ($persona) {
        // Si se autentica correctamente, guarda al usuario en la sesión
        $_SESSION['usuario'] = $persona;
        header("Location: ../menu.html"); // Redirige al dashboard o página principal
        exit();
    } else {
        // Si falla, muestra un mensaje de error
        echo "<script>alert('Usuario o contraseña incorrectos'); window.location.href='../Login.html';</script>";
    }
} else {
    // Redirigir al login si se intenta acceder sin POST
    header("Location: ../Login.html");
    exit();
}

