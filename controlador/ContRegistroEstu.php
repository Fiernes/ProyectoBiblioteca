<?php
require_once '../modelo/Conexion.php';
require_once '../modelo/Persona.php';
require_once '../modeloDAO/PersonaDAO.php';
require_once '../modelo/Direccion.php';
require_once '../modeloDAO/DireccionDAO.php';
require_once '../modelo/InfoContacto.php';
require_once '../modeloDAO/infoContactoDAO.php';
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

    // Tabla Dirección
    $departamento = $_POST['departamento'];
    $ciudad = $_POST['ciudad'];
    $colonia = $_POST['colonia'];
    $numeroCasa = $_POST['numeroCasa'];

    // Tabla info Contacto
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $telefonoPersonal = $_POST['telefonoPersonal'];
    $telefonoRespaldo = $_POST['telefonoRespaldo'];

    // Tabla Estudiante
    $carrera = $_POST['carrera'];
    $numeroCuenta = $_POST['numerocuenta'];

    // Verificar si las contraseñas coinciden
    if ($password === $confirmPassword) {
        $dbConnection = new Conexion();
        $personaDAO = new PersonaDAO($dbConnection);
        $direccionDAO = new DireccionDAO($dbConnection);
        $infoContactoDAO = new InfoContactoDAO($dbConnection);
        $estudianteDAO = new EstudianteDAO($dbConnection);

        $nuevaPersona = new Persona($idPersona, $usuario, $password, $primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $dni);
        // Obtener el nuevo ID de persona
        $idPersona = $personaDAO->obtenerIdMax();
        echo $idPersona;

        // Si $idPersona es null, asigna el valor 1
        $idPersona = ($idPersona == null) ? 1 : $idPersona;

        // Crear instancias de los objetos        
        echo $idPersona;
        $nuevaDireccion = new Direccion($idPersona, $departamento, $ciudad, $colonia, $numeroCasa);
        echo $idPersona;
        $nuevoContacto = new InfoContacto($idPersona, $correo, $telefono, $telefonoPersonal, $telefonoRespaldo);
        echo $idPersona;
        $nuevoEstudiante = new Estudiante($numeroCuenta, $idPersona, $carrera);
        echo $idPersona;

        // Guardar datos y verificar éxito
        $personaDAO->crearPersona($nuevaPersona);
                           $direccionDAO->crearDireccion($nuevaDireccion);
                           $infoContactoDAO->crearInfoContacto($nuevoContacto);
                           $estudianteDAO->crearEstudiante($nuevoEstudiante);

        if ($registroExitoso) {
            header("Location: ../Login.html");
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
?>
