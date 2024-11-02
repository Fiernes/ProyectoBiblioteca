<?php

class PersonaDAO {

    private $conn;

    // Constructor para recibir la conexión a la base de datos
    public function __construct($dbConnection) {
        $this->conn = $dbConnection->getConnection(); // Obtenemos el objeto de conexión
    }

    public function crearPersona($persona) {
        $sql = "INSERT INTO persona (idPersona, usuario, password, primerNombre, segundoNombre, primerApellido, segundoApellido, DNI) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            $persona->getIdPersona(),
            $persona->getUsuario(),
            $persona->getPassword(),
            md5($persona->getPrimerNombre()),
            $persona->getSegundoNombre(),
            $persona->getPrimerApellido(),
            $persona->getSegundoApellido(),
            $persona->getDNI()
        ]);
    }

    public function leerPersona($idPersona) {
        $sql = "SELECT * FROM persona WHERE idPersona = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $idPersona);
        $stmt->execute();

        // Obtener el resultado y asociar las variables
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            return new Persona(
                    $row['idPersona'],
                    $row['usuario'],
                    $row['password'],
                    $row['primerNombre'],
                    $row['segundoNombre'],
                    $row['primerApellido'],
                    $row['segundoApellido'],
                    $row['DNI']
            );
        }
        return null;
    }

    public function actualizarPersona($persona) {
        $sql = "UPDATE persona SET usuario = ?, password = ?, primerNombre = ?, segundoNombre = ?, primerApellido = ?, segundoApellido = ?, DNI = ?
                WHERE idPersona = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            $persona->getUsuario(),
            $persona->getPassword(),
            $persona->getPrimerNombre(),
            $persona->getSegundoNombre(),
            $persona->getPrimerApellido(),
            $persona->getSegundoApellido(),
            $persona->getDNI(),
            $persona->getIdPersona()
        ]);
    }

    public function eliminarPersona($idPersona) {
        $sql = "DELETE FROM persona WHERE idPersona = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$idPersona]);
        return true;
    }

}
