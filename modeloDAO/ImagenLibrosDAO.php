<?php

class ImagenLibrosDAO {

    private $conn;

    // Constructor para recibir la conexión a la base de datos
    public function __construct($dbConnection) {
        $this->conn = $dbConnection->getConnection(); // Obtenemos el objeto de conexión
    }

    // Método para crear un nuevo registro en la tabla imagen_libros
    public function crearImagenLibro($imagenLibro) {
        $sql = "INSERT INTO imagen_libros (idLibro, nombre, tipo, imagen) 
                VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);

        if ($stmt === false) {
            die('Error al preparar la consulta: ' . $this->conn->error);
        }

        // Asocia los parámetros para la consulta
        $stmt->bind_param(
            'isss', 
            $imagenLibro->getIdLibro(),
            $imagenLibro->getNombre(),
            $imagenLibro->getTipo(),
            $imagenLibro->getImagen()
        );

        $stmt->execute();

        if ($stmt->affected_rows === 0) {
            return false; // Indica que no se insertó ningún dato
        }

        return true;
    }

    // Método para leer un registro específico por idLibro
    public function leerImagenLibro($idLibro) {
        $sql = "SELECT * FROM imagen_libros WHERE idLibro = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $idLibro);
        $stmt->execute();

        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            return new ImagenLibros(
                $row['idLibro'],
                $row['nombre'],
                $row['tipo'],
                $row['imagen']
            );
        }
        return null; // Retornar null si no se encuentra la información
    }

    // Método para actualizar un registro en la tabla imagen_libros
    public function actualizarImagenLibro($imagenLibro) {
        $sql = "UPDATE imagen_libros 
                SET nombre = ?, tipo = ?, imagen = ? 
                WHERE idLibro = ?";
        $stmt = $this->conn->prepare($sql);

        if ($stmt === false) {
            die('Error al preparar la consulta: ' . $this->conn->error);
        }

        $stmt->bind_param(
            'sssi',
            $imagenLibro->getNombre(),
            $imagenLibro->getTipo(),
            $imagenLibro->getImagen(),
            $imagenLibro->getIdLibro()
        );

        $stmt->execute();

        if ($stmt->affected_rows === 0) {
            return false; // No se actualizó ningún registro
        }

        return true;
    }

    // Método para eliminar un registro por idLibro
    public function eliminarImagenLibro($idLibro) {
        $sql = "DELETE FROM imagen_libros WHERE idLibro = ?";
        $stmt = $this->conn->prepare($sql);

        if ($stmt === false) {
            die('Error al preparar la consulta: ' . $this->conn->error);
        }

        $stmt->bind_param("i", $idLibro);
        $stmt->execute();

        if ($stmt->affected_rows === 0) {
            return false; // No se eliminó ningún registro
        }

        return true;
    }
}
?>
