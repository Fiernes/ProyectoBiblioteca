<?php

class InfoContactoDAO {

    private $conn;

    // Constructor para recibir la conexión a la base de datos
    public function __construct($dbConnection) {
        $this->conn = $dbConnection->getConnection(); // Obtenemos el objeto de conexión
    }

    // Método para crear un nuevo registro de información de contacto
    public function crearInfoContacto($infoContacto) {
        $sql = "INSERT INTO info_contacto (idPersona, correoElectronico, telefonoCasa, telefonoPersonal, telefonoPersonalDos) 
                VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta con los datos del objeto infoContacto
        $stmt->execute([
            $infoContacto->getIdPersona(),
            $infoContacto->getCorreoElectronico(),
            $infoContacto->getTelefonoCasa(),
            $infoContacto->getTelefonoPersonal(),
            $infoContacto->getTelefonoPersonalDos()
        ]);
    }

    // Método para leer la información de contacto de una persona específica
    public function leerInfoContacto($idPersona) {
        $sql = "SELECT * FROM info_contacto WHERE idPersona = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $idPersona);
        $stmt->execute();

        // Obtener el resultado y asociar las variables
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            return new InfoContacto(
                $row['idPersona'],
                $row['correoElectronico'],
                $row['telefonoCasa'],
                $row['telefonoPersonal'],
                $row['telefonoPersonalDos']
            );
        }
        return null; // Retornar null si no se encuentra la información
    }

    // Método para actualizar un registro de información de contacto
    public function actualizarInfoContacto($infoContacto) {
        $sql = "UPDATE info_contacto SET correoElectronico = ?, telefonoCasa = ?, telefonoPersonal = ?, telefonoPersonalDos = ?
                WHERE idPersona = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta con los datos del objeto infoContacto
        $stmt->execute([
            $infoContacto->getCorreoElectronico(),
            $infoContacto->getTelefonoCasa(),
            $infoContacto->getTelefonoPersonal(),
            $infoContacto->getTelefonoPersonalDos(),
            $infoContacto->getIdPersona()
        ]);
    }

    // Método para eliminar un registro de información de contacto
    public function eliminarInfoContacto($idPersona) {
        $sql = "DELETE FROM info_contacto WHERE idPersona = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta para eliminar la información de contacto
        $stmt->execute([$idPersona]);
        return true; // Retornar true al eliminar
    }
}
