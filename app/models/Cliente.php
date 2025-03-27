<?php
class Cliente extends Model {
    
    public function obtenerTodos() {
        $stmt = $this->db->prepare("SELECT * FROM clientes WHERE borrado = 0");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id) {
        $stmt = $this->db->prepare("SELECT * FROM clientes WHERE id_cliente = :id AND borrado = 0");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insertar($data) {
        $stmt = $this->db->prepare("INSERT INTO clientes (
            nombre_cliente, fecha_nacimiento, sexo, telefono, correo, calle, colonia, ciudad,
            codigo_postal, estado, pais, creado_por, borrado
        ) VALUES (
            :nombre_cliente, :fecha_nacimiento, :sexo, :telefono, :correo, :calle, :colonia, :ciudad,
            :codigo_postal, :estado, :pais, :creado_por, 0
        )");
        return $stmt->execute($data);
    }

    public function actualizar($data) {
        $stmt = $this->db->prepare("UPDATE clientes SET nombre_cliente = :nombre_cliente, fecha_nacimiento = :fecha_nacimiento, sexo = :sexo, telefono = :telefono,
            correo = :correo, calle = :calle, colonia = :colonia, ciudad = :ciudad, codigo_postal = :codigo_postal, estado = :estado, pais = :pais
            WHERE id_cliente = :id_cliente");

        return $stmt->execute($data);
    }

    public function eliminar($id) {
        $stmt = $this->db->prepare("UPDATE clientes SET borrado = 1 WHERE id_cliente = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
    
}
