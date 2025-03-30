<?php
class Usuario extends Model {
    public function obtenerPorUsuario($usuario) {
        $query = "SELECT * FROM usuarios WHERE usuario = :usuario AND borrado = 0 LIMIT 1";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function registrar($data) {
        $sql = "INSERT INTO usuarios (nombre_usuario, usuario, contrasena, borrado, fecha_creacion, fecha_modificacion)
                VALUES (:nombre_usuario, :usuario, :contrasena, 0, NOW(), NOW())";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute($data);
    }
    
    public function obtenerTodos() {
        $sql = "SELECT * FROM usuarios WHERE borrado = 0 ORDER BY id_usuario DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function actualizar($data) {
        if ($data['contrasena']) {
            $sql = "UPDATE usuarios SET nombre_usuario = :nombre_usuario, usuario = :usuario, contrasena = :contrasena, fecha_modificacion = NOW()
                    WHERE id_usuario = :id_usuario";
        } else {
            $sql = "UPDATE usuarios SET nombre_usuario = :nombre_usuario, usuario = :usuario, fecha_modificacion = NOW()
                    WHERE id_usuario = :id_usuario";
        }
    
        $stmt = $this->db->prepare($sql);
    
        $stmt->bindParam(':nombre_usuario', $data['nombre_usuario']);
        $stmt->bindParam(':usuario', $data['usuario']);
        $stmt->bindParam(':id_usuario', $data['id_usuario']);
    
        if ($data['contrasena']) {
            $stmt->bindParam(':contrasena', $data['contrasena']);
        }

        
    
        return $stmt->execute();
    }

    

    public function obtenerPorId($id) {
    $sql = "SELECT * FROM usuarios WHERE id_usuario = :id AND borrado = 0 LIMIT 1";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

public function eliminar($id) {
    $stmt = $this->db->prepare("UPDATE usuarios SET borrado = 1 WHERE id_usuario = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    return $stmt->execute();
}


    
}
