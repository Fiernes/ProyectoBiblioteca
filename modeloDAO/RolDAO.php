<?php

class RolDAO {
    private $conn;

    // Constructor para recibir la conexión a la base de datos
    public function __construct($dbConnection) {
        $this->conn = $dbConnection->getConnection(); // Obtenemos el objeto de conexión
    }

    // Método para crear un nuevo rol
    public function crearRol($rol) {
        $sql = "INSERT INTO roles (idRol, nombreRolUno, nombreRolDos) 
                VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta con los datos del objeto rol
        $stmt->execute([
            $rol->getIdRol(),
            $rol->getNombreRolUno(),
            $rol->getNombreRolDos()
        ]);
    }

    // Método para leer un rol específico
    public function leerRol($idRol) {
        $sql = "SELECT * FROM roles WHERE idRol = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $idRol);
        $stmt->execute();

        // Obtener el resultado y asociar las variables
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            return new Rol(
                $row['idRol'],
                $row['nombreRolUno'],
                $row['nombreRolDos']
            );
        }
        return null; // Retornar null si no se encuentra el rol
    }

    // Método para actualizar un rol existente
    public function actualizarRol($rol) {
        $sql = "UPDATE roles SET nombreRolUno = ?, nombreRolDos = ?
                WHERE idRol = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta con los datos del objeto rol
        $stmt->execute([
            $rol->getNombreRolUno(),
            $rol->getNombreRolDos(),
            $rol->getIdRol()
        ]);
    }

    // Método para eliminar un rol
    public function eliminarRol($idRol) {
        $sql = "DELETE FROM roles WHERE idRol = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta para eliminar el rol
        $stmt->execute([$idRol]);
        return true; // Retornar true al eliminar
    }

    // Método para listar todos los roles
    public function listarRoles() {
        $sql = "SELECT * FROM roles";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->get_result();
        $roles = [];

        while ($row = $result->fetch_assoc()) {
            $roles[] = new Rol(
                $row['idRol'],
                $row['nombreRolUno'],
                $row['nombreRolDos']
            );
        }
        return $roles; // Retorna un array con todos los roles
    }
}
