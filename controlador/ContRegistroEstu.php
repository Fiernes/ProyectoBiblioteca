<?php
require_once '../modelo/Conexion.php';
require_once '../modelo/Persona.php';
require_once '../modeloDAO/PersonaDAO.php';
require_once '../modelo/Direccion.php';
require_once '../modeloDAO/DireccionDAO.php';
require_once '../modelo/InfoContacto.php';
require_once '../modeloDAO/InfoContactoDAO.php';
require_once '../modelo/Estudiante.php';
require_once '../modeloDAO/EstudianteDAO.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Tabla Persona
    $usuario = $_POST['usuario'];
    $password = md5($_POST['password']);
    $confirmPassword = md5($_POST['confirmPassword']);
    $primerNombre = $_POST['primerNombre'];
    $segundoNombre = $_POST['segundoNombre'];
    $primerApellido = $_POST['primerApellido'];
    $segundoApellido = $_POST['segundoApellido'];
    $dni = $_POST['dni'];

    // Tabla Estudiante
    $carrera = $_POST['carrera'];
    $numeroCuenta = $_POST['numerocuenta'];

    // Verificar si las contraseñas coinciden
    if ($password === $confirmPassword) {
        $dbConnection = new Conexion();

        // Obtener el nuevo ID de persona
        $personaDAO = new PersonaDAO($dbConnection);
        $idPersona = $personaDAO->obtenerIdMax();
        $idPersona++; // Incrementar el ID de persona

        // Crear las instancias para las tablas correspondientes
        $nuevaPersona = new Persona($idPersona, $usuario, $password, $primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $dni);
        $nuevoEstudiante = new Estudiante($numeroCuenta, $idPersona, $carrera);

        // Intentar registrar en todas las tablas y verificar el éxito de cada operación
        $registroExitoso = true;

        if (!$personaDAO->crearPersona($nuevaPersona)) {
            $registroExitoso = false;
        }

        $estudianteDAO = new EstudianteDAO($dbConnection);
        if (!$estudianteDAO->crearEstudiante($nuevoEstudiante)) {
            $registroExitoso = false;
        }

        // Verificar si el registro fue exitoso
        if ($registroExitoso) {
            echo "<script>alert('Registro exitoso.'); window.location.href='../Login.html';</script>";
            exit();
        } else {
            echo "<script>alert('Error al registrar el usuario'); window.location.href='../Registro.html';</script>";
        }
    } else {
        echo "<script>alert('Las contraseñas no coinciden'); window.location.href='../Registro.html';</script>";
    }
} else {
    header("Location: ../Registro.html");
    exit();
}
