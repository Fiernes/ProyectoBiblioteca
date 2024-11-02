<?php

class LogDAO {
    private $conn;

    // Constructor para recibir la conexión a la base de datos
    public function __construct($dbConnection) {
        $this->conn = $dbConnection->getConnection(); // Obtenemos el objeto de conexión
    }

    // Método para crear un nuevo registro de log
    public function crearLog($log) {
        $sql = "INSERT INTO logs (idLog, accion, fecha, idPersona, detalleAccion) 
                VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta con los datos del objeto log
        $stmt->execute([
            $log->getIdLog(),
            $log->getAccion(),
            $log->getFecha(),
            $log->getIdPersona(),
            $log->getDetalleAccion()
        ]);
    }

    // Método para leer un registro de log específico
    public function leerLog($idLog) {
        $sql = "SELECT * FROM logs WHERE idLog = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $idLog);
        $stmt->execute();

        // Obtener el resultado y asociar las variables
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            return new Log(
                $row['idLog'],
                $row['accion'],
                $row['fecha'],
                $row['idPersona'],
                $row['detalleAccion']
            );
        }
        return null; // Retornar null si no se encuentra el log
    }

    // Método para actualizar un registro de log existente
    public function actualizarLog($log) {
        $sql = "UPDATE logs SET accion = ?, fecha = ?, idPersona = ?, detalleAccion = ?
                WHERE idLog = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta con los datos del objeto log
        $stmt->execute([
            $log->getAccion(),
            $log->getFecha(),
            $log->getIdPersona(),
            $log->getDetalleAccion(),
            $log->getIdLog()
        ]);
    }

    // Método para eliminar un registro de log
    public function eliminarLog($idLog) {
        $sql = "DELETE FROM logs WHERE idLog = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta para eliminar el log
        $stmt->execute([$idLog]);
        return true; // Retornar true al eliminar
    }

    // Método para listar todos los registros de log
    public function listarLogs() {
        $sql = "SELECT * FROM logs";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->get_result();
        $logs = [];

        while ($row = $result->fetch_assoc()) {
            $logs[] = new Log(
                $row['idLog'],
                $row['accion'],
                $row['fecha'],
                $row['idPersona'],
                $row['detalleAccion']
            );
        }
        return $logs; // Retorna un array con todos los logs
    }
}
