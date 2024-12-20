<?php

class DireccionDAO {

    private $conn;

    // Constructor para recibir la conexión a la base de datos
    public function __construct($dbConnection) {
        $this->conn = $dbConnection->getConnection(); // Obtenemos el objeto de conexión
    }

    // Método para agregar una nueva dirección para una persona
    public function crearDireccion($direccion) {
        $sql = "INSERT INTO direccion (idPersona, departamento, ciudad, colonia, numeroCasa) 
                VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        
        // Verifica si la preparación fue exitosa
        if ($stmt === false) {
            die('Error al preparar la consulta: ' . $this->conn->error);
        }
    
        // Asocia los parámetros para la consulta (tipo 'i' para entero y 's' para cadena de texto)
        $stmt->bind_param(
            'issss', 
            $direccion->getIdPersona(),
            $direccion->getDepartamento(),
            $direccion->getCiudad(),
            $direccion->getColonia(),
            $direccion->getNumeroCasa()
        );
        
        // Ejecutar la consulta
        $stmt->execute();
    
        // Verifica si la ejecución fue exitosa
        if ($stmt->affected_rows === 0) {
            return false; // Indica que no se insertó ningún dato
        }
    
        return true;
    }
    

    // Método para obtener una dirección específica de una persona según su ID
    public function obtenerDireccionPorPersona($idPersona) {
        $sql = "SELECT * FROM direccion WHERE idPersona = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Vincular el parámetro ID de la persona y ejecutar la consulta
        $stmt->bind_param("i", $idPersona);
        $stmt->execute();

        // Obtener el resultado y construir un objeto Direccion
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            return new Direccion(
                $row['idPersona'],
                $row['departamento'],
                $row['ciudad'],
                $row['colonia'],
                $row['numeroCasa']
            );
        }
        return null;
    }

    // Método para actualizar la dirección de una persona
    public function actualizarDireccion($direccion) {
        $sql = "UPDATE direccion SET departamento = ?, ciudad = ?, colonia = ?, numeroCasa = ?
                WHERE idPersona = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta con los datos actualizados del objeto dirección
        $stmt->execute([
            $direccion->getDepartamento(),
            $direccion->getCiudad(),
            $direccion->getColonia(),
            $direccion->getNumeroCasa(),
            $direccion->getIdPersona()
        ]);
    }

    // Método para eliminar la dirección de una persona según su ID
    public function eliminarDireccion($idPersona) {
        $sql = "DELETE FROM direccion WHERE idPersona = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta para eliminar la dirección
        $stmt->execute([$idPersona]);
        return true;
    }

}
