<?php
require_once '../modeloDAO/PersonaDAO.php';
require_once '../modeloDAO/EstudianteDAO.php';
require_once '../modeloDAO/EmpleadoDAO.php';
require_once '../modeloDAO/EmpleadoRolDAO.php';
require_once '../modeloDAO/RolDAO.php';
require_once '../modelo/Conexion.php';

session_start();

// Verifica que se hayan enviado los datos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $password = md5($_POST['password']);

    // Crear instancia de la conexión a la base de datos
    $dbConnection = new Conexion();

    // Crear instancias de DAO con la conexión
    $personaDAO = new PersonaDAO($dbConnection);
    $estudianteDAO = new EstudianteDAO($dbConnection);
    $empleadoDAO = new EmpleadoDAO($dbConnection);
    $empleadoRolDAO = new EmpleadoRolDAO($dbConnection);
    $rolDAO = new RolDAO($dbConnection);

    // Intentar autenticación
    $persona = $personaDAO->login($usuario, $password);

    if ($persona) {
        // Si se autentica correctamente, verificar si es estudiante
        $estudiante = $estudianteDAO->leerEstudiante($persona->getIdPersona());

        if ($estudiante) {
            // Redirigir a la página de estudiante si existe
            $_SESSION['usuario'] = $estudiante;
            header("Location: ../menu.html");
            exit();
        }

        // Si no es estudiante, verificar si es empleado
        $empleado = $empleadoDAO->obtenerEmpleadoPorId($persona->getIdPersona());

        if ($empleado) {

            $rol = $empleadoRolDAO->obtenerRolDeEmpleado($empleado->getIdEmpleado());
            $nombreRol = $rolDAO->leerRol($rol->getIdRol());

            if ($nombreRol->getNombreRol() == "Administrador") {
                header("Location: ../Administrador.html");
                exit();
            }

            if ($nombreRol->getNombreRol() == "Empleado") {
                // Redirigir a la página de empleado si existe
                $_SESSION['usuario'] = $empleado;
                header("Location: ../Empleado.html");
                exit();
            }
        }

        // Si no es estudiante ni empleado, mostrar mensaje de error
        echo "<script>alert('Usuario no encontrado como estudiante ni empleado'); window.location.href='../Login.html';</script>";
    } else {
        // Si las credenciales son incorrectas, mostrar mensaje de error
        echo "<script>alert('Usuario o contraseña incorrectos'); window.location.href='../Login.html';</script>";
    }
} else {
    // Redirigir al login si se intenta acceder sin POST
    header("Location: ../Login.html");
    exit();
}
