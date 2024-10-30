<?php

class PersonaDAO {
    
   public function crearPersona($persona) {
        $sql = "INSERT INTO personas (idPersona, usuario, password, primerNombre, segundoNombre, primerApellido, segundoApellido, DNI) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            $persona->getIdPersona(),
            $persona->getUsuario(),
            $persona->getPassword(),
            $persona->getPrimerNombre(),
            $persona->getSegundoNombre(),
            $persona->getPrimerApellido(),
            $persona->getSegundoApellido(),
            $persona->getDNI()
        ]);
    }
}
