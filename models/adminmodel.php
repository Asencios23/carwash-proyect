<?php
require_once "config/conexion.php";

class AdminModel
{
    static public function login($datos)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM administrador WHERE usuario = :usuario");
        $stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->close();
        $stmt = null;
    }
}


?>
