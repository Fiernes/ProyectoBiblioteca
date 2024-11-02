<?php

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
        
        // Ejecutar la consulta con los datos del objeto estudiante
        $stmt->execute([
            $estudiante->getIdEstudiante(),
            $estudiante->getIdPersona(),
            $estudiante->getCarrera()
        ]);
    }

    // Método para leer un estudiante específico
    public function leerEstudiante($idEstudiante) {
        $sql = "SELECT * FROM estudiante WHERE idEstudiante = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $idEstudiante);
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
