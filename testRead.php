<?php
include 'modelo/Conexion.php';
include 'modelo/Persona.php';
include 'modeloDAO/PersonaDAO.php';

$dbConnection = new Conexion();

$personaDAO = new PersonaDAO($dbConnection);

$idPersona = 1;
$personaLeida = $personaDAO->leerPersona($idPersona);

if ($personaLeida) {
    echo "ID: " . $personaLeida->getIdPersona() . "\n";
    echo "Usuario: " . $personaLeida->getUsuario() . "\n";
    echo "Nombre Completo: " . $personaLeida->getPrimerNombre() . " " . $personaLeida->getSegundoNombre() . " " . $personaLeida->getPrimerApellido() . " " . $personaLeida->getSegundoApellido() . "\n";
    echo "DNI: " . $personaLeida->getDNI() . "\n";
} else {
    echo "Persona con ID $idPersona no encontrada.";
}

// Cerrar la conexión
$dbConnection->closeConnection();
