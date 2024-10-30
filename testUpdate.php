<?php
include 'modelo/Conexion.php';
include 'modelo/Persona.php';
include 'modeloDAO/PersonaDAO.php';

// Crear una conexión a la base de datos
$dbConnection = new Conexion();

// Crear el DAO usando la conexión
$personaDAO = new PersonaDAO($dbConnection);

// Buscar la persona que se quiere actualizar (por ejemplo, con id = 1)
$idPersona = 1;
$personaExistente = $personaDAO->leerPersona($idPersona);

if ($personaExistente) {
    // Modificar los datos de la persona
    $personaExistente->setUsuario("fidel_modificado");
    $personaExistente->setPassword("4321");
    $personaExistente->setPrimerNombre("FidelModificado");

    // Actualizar la persona en la base de datos
    $personaDAO->actualizarPersona($personaExistente);

    echo "Persona actualizada exitosamente.";
} else {
    echo "Persona con ID $idPersona no encontrada.";
}

// Cerrar la conexión
$dbConnection->closeConnection();
