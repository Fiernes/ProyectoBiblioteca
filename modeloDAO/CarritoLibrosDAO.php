<?php

class CarritoLibrosDAO {

    private $conn;

    // Constructor para recibir la conexión a la base de datos
    public function __construct($dbConnection) {
        $this->conn = $dbConnection->getConnection(); // Obtenemos el objeto de conexión
    }

    // Método para agregar un libro a un carrito
    public function agregarLibroACarrito($carritoLibros) {
        $sql = "INSERT INTO carrito_libros (idCarrito, idLibro) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);

        // Ejecutar la consulta con los datos del objeto carrito_libros
        $stmt->execute([
            $carritoLibros->getIdCarrito(),
            $carritoLibros->getIdLibro()
        ]);
    }

    // Método para obtener todos los libros de un carrito específico
    public function obtenerLibrosDeCarrito($idCarrito) {
        $sql = "SELECT * FROM carrito_libros WHERE idCarrito = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Vincular el parámetro ID del carrito y ejecutar la consulta
        $stmt->bind_param("i", $idCarrito);
        $stmt->execute();
        
        // Obtener el resultado y construir una lista de objetos Carrito_Libros
        $result = $stmt->get_result();
        $librosEnCarrito = [];
        
        while ($row = $result->fetch_assoc()) {
            $librosEnCarrito[] = new Carrito_Libros($row['idCarrito'], $row['idLibro']);
        }
        
        return $librosEnCarrito;
    }

    // Método para eliminar un libro específico de un carrito
    public function eliminarLibroDeCarrito($idCarrito, $idLibro) {
        $sql = "DELETE FROM carrito_libros WHERE idCarrito = ? AND idLibro = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta con los IDs del carrito y del libro
        $stmt->execute([$idCarrito, $idLibro]);
        return true;
    }

    // Método para eliminar todos los libros de un carrito
    public function vaciarCarrito($idCarrito) {
        $sql = "DELETE FROM carrito_libros WHERE idCarrito = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta para eliminar todos los registros asociados al idCarrito
        $stmt->execute([$idCarrito]);
        return true;
    }
}
