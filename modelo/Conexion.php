<?php

class Conexion {
    private $conn;

    // Constructor para la conexión a la base de datos usando mysqli
    public function __construct() {
        $host = "localhost"; // Servidor de la base de datos
        $db = "mi_base_datos"; // Nombre de la base de datos
        $user = "root"; // Usuario de la base de datos
        $pass = ""; // Contraseña de la base de datos

        // Intento de conexión a la base de datos
        $this->conn = new mysqli($host, $user, $pass, $db);

        // Verificar si hay errores de conexión
        if ($this->conn->connect_error) {
            die("Error de conexión: " . $this->conn->connect_error);
        }
    }

    // Método para obtener la conexión
    public function getConnection() {
        return $this->conn;
    }

    // Método para cerrar la conexión
    public function closeConnection() {
        $this->conn->close();
    }
}




