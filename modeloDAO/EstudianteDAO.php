<?php

require_once '../modelo/Estudiante.php';

class EstudianteDAO {

    private $conn;

    // Constructor para recibir la conexión a la base de datos
    public function __construct($dbConnection) {
        $this->conn = $dbConnection->getConnection(); // Obtenemos el objeto de conexión
    }

    // Método para crear un nuevo estudiante
    public function crearEstudiante($estudiante) {
        $sql = "INSERT INTO estudiante (idEstudiante, idPersona, carrera) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        
        // Verifica si la preparación fue exitosa
        if ($stmt === false) {
            die('Error al preparar la consulta: ' . $this->conn->error);
        }
    
        // Asocia los parámetros para la consulta (tipo 'i' para enteros y 's' para cadenas)
        $stmt->bind_param(
            'iis', 
            $estudiante->getIdEstudiante(),
            $estudiante->getIdPersona(),
            $estudiante->getCarrera()
        );
        
        // Ejecutar la consulta
        $stmt->execute();
    
        // Verifica si la ejecución fue exitosa
        if ($stmt->affected_rows === 0) {
            return false; // Indica que no se insertó ningún dato
        }
    
        return true;
    }
    

    // Método para leer un estudiante específico
    public function leerEstudiante($idPersona) {
        $sql = "SELECT * FROM estudiante WHERE idPersona = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $idPersona);
        $stmt->execute();
    
        // Obtener el resultado y asociar las variables
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
    
        if ($row) {
            return new Estudiante(
                $row['idEstudiante'],
                $row['idPersona'],
                $row['carrera']
            );
        }
        return null; // Retornar null si no se encuentra el estudiante
    }
    

    // Método para actualizar un estudiante
    public function actualizarEstudiante($estudiante) {
        $sql = "UPDATE estudiante SET idPersona = ?, carrera = ? WHERE idEstudiante = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta con los datos del objeto estudiante
        $stmt->execute([
            $estudiante->getIdPersona(),
            $estudiante->getCarrera(),
            $estudiante->getIdEstudiante()
        ]);
    }

    // Método para eliminar un estudiante
    public function eliminarEstudiante($idEstudiante) {
        $sql = "DELETE FROM estudiante WHERE idEstudiante = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta para eliminar el estudiante
        $stmt->execute([$idEstudiante]);
        return true; // Retornar true al eliminar
    }
}
