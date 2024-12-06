<?php

require_once '../modelo/Categorias.php';

class CategoriasDAO{

    private $conn;

    // Constructor para recibir la conexión a la base de datos
    public function __construct($dbConnection){
        $this->conn = $dbConnection->getConnection();
    }

    // Método para crear una nueva categoría
    public function crearCategoria($categoria){
        $sql = "INSERT INTO categorias (nombre) VALUES (?)";
        $stmt = $this->conn->prepare($sql);

        if ($stmt === false){
            die('Error al preparar la consulta: ' . $this->conn->error);
        }

        $nombre = $categoria->getNombre(); // Almacena el valor en una variable
        $stmt->bind_param('s', $nombre);   // Pasa la variable como referencia
        

        $stmt->execute();

        // Verifica si la ejecución fue exitosa
        if ($stmt->affected_rows === 0) {
            return false; // Indica que no se insertó ningún dato
        }
    
        return true;
    }

    // Método para leer una categoría por ID
    public function leerCategoria($idCategoria)
    {
        $sql = "SELECT * FROM categorias WHERE idCategoria = ?";
        $stmt = $this->conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("i", $idCategoria);
            $stmt->execute();
            $resultado = $stmt->get_result();

            $categoria = null;
            if ($fila = $resultado->fetch_assoc()) {
                $categoria = new categorias(
                    $fila['idCategoria'],
                    $fila['nombre']
                );
            }

            $stmt->close();
            return $categoria;
        } else {
            return null;
        }
    }

    // Método para actualizar una categoría
    public function actualizarCategoria($categoria)
    {
        $sql = "UPDATE categorias SET nombre = ? WHERE idCategoria = ?";
        $stmt = $this->conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("si", $categoria->getNombre(), $categoria->getIdCategoria());
            $stmt->execute();
            $stmt->close();
            return true;
        } else {
            return false;
        }
    }

    // Método para eliminar una categoría por ID
    public function eliminarCategoria($idCategoria)
    {
        $sql = "DELETE FROM categorias WHERE idCategoria = ?";
        $stmt = $this->conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("i", $idCategoria);
            $stmt->execute();
            $stmt->close();
            return true;
        } else {
            return false;
        }
    }

    // Método para listar todas las categorías
    public function listarCategorias()
    {
        $sql = "SELECT * FROM categorias";
        $resultado = $this->conn->query($sql);

        $categorias = [];
        while ($fila = $resultado->fetch_assoc()) {
            $categorias[] = new categorias($fila['idCategoria'], $fila['nombre']);
        }

        return $categorias;
    }
}
