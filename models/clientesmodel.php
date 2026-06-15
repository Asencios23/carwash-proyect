<?php
require_once "config/conexion.php";

    class ClientesModel
    {
        static public function crearClientes($datos)
        {
            $stmt = conexion::conectar()->prepare(
                "INSERT INTO clientes (
                dni,
                nombres, 
                apellidos,
                telefono,
                email,
                estado
                ) VALUES (
                :dni,
                :nombres,
                :apellidos,
                :telefono,
                :email,
                :estado
                )"
            );

            $stmt->bindParam(":dni", $datos["dni"], PDO::PARAM_STR);
            $stmt->bindParam(":nombres", $datos["nombres"], PDO::PARAM_STR);
            $stmt->bindParam(":apellidos", $datos["apellidos"], PDO::PARAM_STR);
            $stmt->bindparam(":telefono", $datos["telefono"], PDO::PARAM_STR);
            $stmt->bindparam(":email", $datos["email"], PDO::PARAM_STR);
            $stmt->bindparam(":estado", $datos["estado"], PDO::PARAM_STR);

            if($stmt->execute()){

                return "ok";

            }else{

                return "error";

            }

            $stmt = null;

        }
    }

?>