<?php

class CarritoPrestamoDAO {

    private $conn;

    // Constructor para recibir la conexión a la base de datos
    public function __construct($dbConnection) {
        $this->conn = $dbConnection->getConnection(); // Obtenemos el objeto de conexión
    }

    // Método para crear un nuevo registro de carrito de préstamo
    public function crearCarrito($carrito) {
        $sql = "INSERT INTO carrito_prestamo (idCarrito, cantidadLibros, idEstudiante) 
                VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta con los datos del objeto carrito
        $stmt->execute([
            $carrito->getIdCarrito(),
            $carrito->getCantidadLibros(),
            $carrito->getIdEstudiante()
        ]);
    }

    // Método para leer un carrito de préstamo específico según su ID
    public function leerCarrito($idCarrito) {
        $sql = "SELECT * FROM carrito_prestamo WHERE idCarrito = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Vincular el parámetro ID y ejecutar la consulta
        $stmt->bind_param("i", $idCarrito);
        $stmt->execute();

        // Obtener el resultado y convertirlo en un objeto CarritoPrestamo
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            return new CarritoPrestamo(
                $row['idCarrito'],
                $row['cantidadLibros'],
                $row['idEstudiante']
            );
        }
        return null;
    }

    // Método para actualizar un carrito de préstamo existente
    public function actualizarCarrito($carrito) {
        $sql = "UPDATE carrito_prestamo SET cantidadLibros = ?, idEstudiante = ?
                WHERE idCarrito = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta con los datos actualizados del objeto carrito
        $stmt->execute([
            $carrito->getCantidadLibros(),
            $carrito->getIdEstudiante(),
            $carrito->getIdCarrito()
        ]);
    }

    // Método para eliminar un carrito de préstamo según su ID
    public function eliminarCarrito($idCarrito) {
        $sql = "DELETE FROM carrito_prestamo WHERE idCarrito = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta para eliminar el carrito
        $stmt->execute([$idCarrito]);
        return true;
    }

}
