<?php

class EmpleadoRolDAO {

    private $conn;

    // Constructor para recibir la conexión a la base de datos
    public function __construct($dbConnection) {
        $this->conn = $dbConnection->getConnection(); // Obtenemos el objeto de conexión
    }

    // Método para asignar un rol a un empleado
    public function asignarRolAEmpleado($empleadoRol) {
        $sql = "INSERT INTO empleado_rol (idEmpleado, idRol) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);

        // Ejecutar la consulta con los datos del objeto empleadoRol
        $stmt->execute([
            $empleadoRol->getIdEmpleado(),
            $empleadoRol->getIdRol()
        ]);
    }

    // Método para obtener el rol de un empleado específico
    public function obtenerRolDeEmpleado($idEmpleado) {
        $sql = "SELECT * FROM empleado_rol WHERE idEmpleado = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Vincular el parámetro ID del empleado y ejecutar la consulta
        $stmt->bind_param("i", $idEmpleado);
        $stmt->execute();

        // Obtener el resultado y construir un objeto EmpleadoRol
        $result = $stmt->get_result();
        $roles = [];
        while ($row = $result->fetch_assoc()) {
            $roles[] = new EmpleadoRol(
                $row['idEmpleado'],
                $row['idRol']
            );
        }
        return $roles;
    }

    // Método para actualizar el rol de un empleado
    public function actualizarRolDeEmpleado($empleadoRol) {
        $sql = "UPDATE empleado_rol SET idRol = ? WHERE idEmpleado = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta con el nuevo ID de rol
        $stmt->execute([
            $empleadoRol->getIdRol(),
            $empleadoRol->getIdEmpleado()
        ]);
    }

    // Método para eliminar el rol asignado a un empleado
    public function eliminarRolDeEmpleado($idEmpleado, $idRol) {
        $sql = "DELETE FROM empleado_rol WHERE idEmpleado = ? AND idRol = ?";
        $stmt = $this->conn->prepare($sql);

        // Ejecutar la consulta para eliminar la asignación de rol específica
        $stmt->execute([$idEmpleado, $idRol]);
        return true;
    }
}
