<?php
class Cliente extends Model {
    
    public function obtenerTodos() {
        $stmt = $this->db->prepare("SELECT * FROM clientes WHERE borrado = 0");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id) {
        $id = (int) $id; // 👈 forzar a entero
        $sql = "SELECT * FROM clientes WHERE id_cliente = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
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

    public function filtrarClientes($nombre, $sexo, $estado, $pais) {
        $sql = "SELECT * FROM clientes WHERE borrado = 0";
        $params = [];
    
        if (!empty($nombre)) {
            $sql .= " AND nombre_cliente LIKE :nombre";
            $params[':nombre'] = "%$nombre%";
        }
    
        if (!empty($sexo)) {
            $sql .= " AND sexo = :sexo";
            $params[':sexo'] = $sexo;
        }
    
        if (!empty($estado)) {
            $sql .= " AND estado LIKE :estado";
            $params[':estado'] = "%$estado%";
        }
    
        if (!empty($pais)) {
            $sql .= " AND pais LIKE :pais";
            $params[':pais'] = "%$pais%";
        }
    
        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function obtenerPorUsuario($id_usuario) {
        $sql = "SELECT * FROM clientes WHERE creado_por = :id_usuario AND borrado = 0";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    
}
