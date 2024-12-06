<?php

require_once '../modelo/Empleado.php';

class EmpleadoDAO {

    private $conn;

    // Constructor para recibir la conexión a la base de datos
    public function __construct($dbConnection) {
        $this->conn = $dbConnection->getConnection(); // Obtenemos el objeto de conexión
    }

    // Método para agregar un nuevo empleado
    public function agregarEmpleado($empleado) {
        $sql = "INSERT INTO empleado (idEmpleado, tipoEmpleado, puesto, departamento, horarioLaboral, idPersona) 
                VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);

        // Ejecutar la consulta con los datos del objeto empleado
        $stmt->execute([
            $empleado->getIdEmpleado(),
            $empleado->getTipoEmpleado(),
            $empleado->getPuesto(),
            $empleado->getDepartamento(),
            $empleado->getHorarioLaboral(),
            $empleado->getIdPersona()
        ]);
    }

    // Método para obtener los detalles de un empleado específico
    public function obtenerEmpleadoPorId($idPersona) {
        $sql = "SELECT * FROM empleado WHERE idPersona = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Vincular el parámetro ID del empleado y ejecutar la consulta
        $stmt->bind_param("i", $idPersona);
        $stmt->execute();

        // Obtener el resultado y construir un objeto Empleado
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            return new Empleado(
                $row['idEmpleado'],
                $row['tipoEmpleado'],
                $row['puesto'],
                $row['departamento'],
                $row['horarioLaboral'],
                $row['idPersona']
            );
        }
        return null;
    }

    // Método para actualizar la información de un empleado
    public function actualizarEmpleado($empleado) {
        $sql = "UPDATE empleado SET tipoEmpleado = ?, puesto = ?, departamento = ?, horarioLaboral = ?, idPersona = ? 
                WHERE idEmpleado = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta con los datos actualizados del objeto empleado
        $stmt->execute([
            $empleado->getTipoEmpleado(),
            $empleado->getPuesto(),
            $empleado->getDepartamento(),
            $empleado->getHorarioLaboral(),
            $empleado->getIdPersona(),
            $empleado->getIdEmpleado()
        ]);
    }

    // Método para eliminar un empleado según su ID
    public function eliminarEmpleado($idEmpleado) {
        $sql = "DELETE FROM empleado WHERE idEmpleado = ?";
        $stmt = $this->conn->prepare($sql);

        // Ejecutar la consulta para eliminar el empleado
        $stmt->execute([$idEmpleado]);
        return true;
    }
}
