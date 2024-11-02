<?php

class LibroDAO {

    private $conn;

    // Constructor para recibir la conexión a la base de datos
    public function __construct($dbConnection) {
        $this->conn = $dbConnection->getConnection(); // Obtenemos el objeto de conexión
    }

    // Método para crear un nuevo libro
    public function crearLibro($libro) {
        $sql = "INSERT INTO libros (idLibro, titulo, autor, yearPublicacion, categoria, cantidadDisponible, estado) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta con los datos del objeto libro
        $stmt->execute([
            $libro->getIdLibro(),
            $libro->getTitulo(),
            $libro->getAutor(),
            $libro->getYearPublicacion(),
            $libro->getCategoria(),
            $libro->getCantidadDisponible(),
            $libro->getEstado()
        ]);
    }

    // Método para leer un libro específico
    public function leerLibro($idLibro) {
        $sql = "SELECT * FROM libros WHERE idLibro = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $idLibro);
        $stmt->execute();

        // Obtener el resultado y asociar las variables
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            return new Libro(
                $row['idLibro'],
                $row['titulo'],
                $row['autor'],
                $row['yearPublicacion'],
                $row['categoria'],
                $row['cantidadDisponible'],
                $row['estado']
            );
        }
        return null; // Retornar null si no se encuentra el libro
    }

    // Método para actualizar un libro existente
    public function actualizarLibro($libro) {
        $sql = "UPDATE libros SET titulo = ?, autor = ?, yearPublicacion = ?, categoria = ?, cantidadDisponible = ?, estado = ?
                WHERE idLibro = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta con los datos del objeto libro
        $stmt->execute([
            $libro->getTitulo(),
            $libro->getAutor(),
            $libro->getYearPublicacion(),
            $libro->getCategoria(),
            $libro->getCantidadDisponible(),
            $libro->getEstado(),
            $libro->getIdLibro()
        ]);
    }

    // Método para eliminar un libro
    public function eliminarLibro($idLibro) {
        $sql = "DELETE FROM libros WHERE idLibro = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Ejecutar la consulta para eliminar el libro
        $stmt->execute([$idLibro]);
        return true; // Retornar true al eliminar
    }

    // Método para listar todos los libros
    public function listarLibros() {
        $sql = "SELECT * FROM libros";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->get_result();
        $libros = [];

        while ($row = $result->fetch_assoc()) {
            $libros[] = new Libro(
                $row['idLibro'],
                $row['titulo'],
                $row['autor'],
                $row['yearPublicacion'],
                $row['categoria'],
                $row['cantidadDisponible'],
                $row['estado']
            );
        }
        return $libros; // Retorna un array con todos los libros
    }
}
