<?php

class HistorialPrestamoDAO {

    private $conn;

    // Constructor para recibir la conexión a la base de datos
    public function __construct($dbConnection) {
        $this->conn = $dbConnection->getConnection(); // Obtenemos el objeto de conexión
    }

    // Método para crear un nuevo historial de préstamo
    public function crearHistorialPrestamo($historialPrestamo) {
        $sql = "INSERT INTO historial_prestamo (idPrestamo, fechaPrestamo, fechaDevolucion, estado, idEstudiante, idLibro, idMulta) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta con los datos del objeto historialPrestamo
        $stmt->execute([
            $historialPrestamo->getIdPrestamo(),
            $historialPrestamo->getFechaPrestamo(),
            $historialPrestamo->getFechaDevolucion(),
            $historialPrestamo->getEstado(),
            $historialPrestamo->getIdEstudiante(),
            $historialPrestamo->getIdLibro(),
            $historialPrestamo->getIdMulta()
        ]);
    }

    // Método para leer un historial de préstamo específico
    public function leerHistorialPrestamo($idPrestamo) {
        $sql = "SELECT * FROM historial_prestamo WHERE idPrestamo = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $idPrestamo);
        $stmt->execute();

        // Obtener el resultado y asociar las variables
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            return new HistorialPrestamo(
                $row['idPrestamo'],
                $row['fechaPrestamo'],
                $row['fechaDevolucion'],
                $row['estado'],
                $row['idEstudiante'],
                $row['idLibro'],
                $row['idMulta']
            );
        }
        return null; // Retornar null si no se encuentra el historial
    }

    // Método para actualizar un historial de préstamo
    public function actualizarHistorialPrestamo($historialPrestamo) {
        $sql = "UPDATE historial_prestamo SET fechaPrestamo = ?, fechaDevolucion = ?, estado = ?, idEstudiante = ?, idLibro = ?, idMulta = ?
                WHERE idPrestamo = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta con los datos del objeto historialPrestamo
        $stmt->execute([
            $historialPrestamo->getFechaPrestamo(),
            $historialPrestamo->getFechaDevolucion(),
            $historialPrestamo->getEstado(),
            $historialPrestamo->getIdEstudiante(),
            $historialPrestamo->getIdLibro(),
            $historialPrestamo->getIdMulta(),
            $historialPrestamo->getIdPrestamo()
        ]);
    }

    // Método para eliminar un historial de préstamo
    public function eliminarHistorialPrestamo($idPrestamo) {
        $sql = "DELETE FROM historial_prestamo WHERE idPrestamo = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta para eliminar el historial
        $stmt->execute([$idPrestamo]);
        return true; // Retornar true al eliminar
    }
}
