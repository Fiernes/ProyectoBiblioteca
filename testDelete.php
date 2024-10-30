<?php
include 'modelo/Conexion.php';
include 'modelo/Persona.php';
include 'modeloDAO/PersonaDAO.php';

// Crear una conexión a la base de datos
$dbConnection = new Conexion();

// Crear el DAO usando la conexión
$personaDAO = new PersonaDAO($dbConnection);

// Eliminar la persona de la base de datos (por ejemplo, con id = 1)
$idPersona = 1;
$personaEliminada = $personaDAO->eliminarPersona($idPersona);

if ($personaEliminada) {
    echo "Persona eliminada exitosamente.";
} else {
    echo "Error al eliminar la persona con ID $idPersona.";
}

// Cerrar la conexión
$dbConnection->closeConnection();


