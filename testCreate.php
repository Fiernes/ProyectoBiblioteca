<?php
include './modelo/Conexion.php';
include './modelo/Persona.php';
include './modeloDAO/PersonaDAO.php';

// Crear una conexión a la base de datos
$dbConnection = new Conexion();

// Crear el DAO usando la conexión
$personaDAO = new PersonaDAO($dbConnection);

// Crear una nueva Persona utilizando el constructor con parámetros
$idPersona = 1;
$usuario = "fidel";
$password = "1234";
$primerNombre = "Fidel";
$segundoNombre = "Ernesto";
$primerApellido = "Gutiérrez";
$segundoApellido = "Membreno";
$DNI = "987654321";

$nuevaPersona = new Persona($idPersona, $usuario, $password, $primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $DNI);

// Insertar la persona en la base de datos
$personaDAO->crearPersona($nuevaPersona);

echo "Persona creada exitosamente.";

// Cerrar la conexión
$dbConnection->closeConnection();



