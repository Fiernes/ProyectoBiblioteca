<?php

class MultaDAO {
    private $conn;

    // Constructor para recibir la conexión a la base de datos
    public function __construct($dbConnection) {
        $this->conn = $dbConnection->getConnection(); // Obtenemos el objeto de conexión
    }

    // Método para crear una nueva multa
    public function crearMulta($multa) {
        $sql = "INSERT INTO multas (idMulta, monto, fechaMulta, resumen, pagada) 
                VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta con los datos del objeto multa
        $stmt->execute([
            $multa->getIdMulta(),
            $multa->getMonto(),
            $multa->getFechaMulta(),
            $multa->getResumen(),
            $multa->getPagada()
        ]);
    }

    // Método para leer una multa específica
    public function leerMulta($idMulta) {
        $sql = "SELECT * FROM multas WHERE idMulta = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $idMulta);
        $stmt->execute();

        // Obtener el resultado y asociar las variables
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            return new Multa(
                $row['idMulta'],
                $row['monto'],
                $row['fechaMulta'],
                $row['resumen'],
                $row['pagada']
            );
        }
        return null; // Retornar null si no se encuentra la multa
    }

    // Método para actualizar una multa existente
    public function actualizarMulta($multa) {
        $sql = "UPDATE multas SET monto = ?, fechaMulta = ?, resumen = ?, pagada = ?
                WHERE idMulta = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta con los datos del objeto multa
        $stmt->execute([
            $multa->getMonto(),
            $multa->getFechaMulta(),
            $multa->getResumen(),
            $multa->getPagada(),
            $multa->getIdMulta()
        ]);
    }

    // Método para eliminar una multa
    public function eliminarMulta($idMulta) {
        $sql = "DELETE FROM multas WHERE idMulta = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta para eliminar la multa
        $stmt->execute([$idMulta]);
        return true; // Retornar true al eliminar
    }

    // Método para listar todas las multas
    public function listarMultas() {
        $sql = "SELECT * FROM multas";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->get_result();
        $multas = [];

        while ($row = $result->fetch_assoc()) {
            $multas[] = new Multa(
                $row['idMulta'],
                $row['monto'],
                $row['fechaMulta'],
                $row['resumen'],
                $row['pagada']
            );
        }
        return $multas; // Retorna un array con todas las multas
    }
}
