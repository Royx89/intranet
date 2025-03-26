<?php
class Usuario extends Model {
    public function obtenerPorUsuario($usuario) {
        $sql = "SELECT * FROM usuarios WHERE usuario = :usuario AND borrado = 0";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
