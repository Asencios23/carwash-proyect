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

                    try {

                        if($stmt->execute())
                        {

                        return "ok";

                        }

                    } catch(PDOException $e) 
                    {

                        if($e->getCode() == 23000)
                        {

                            return "duplicado";

                        }

                         return "error";

                    }

                $stmt = null;

        }
    
        //GET_clientes
        static public function mostrarClientes()
        {
               $response = ClientesModel::mostrarClientes();

                 return $response;
        }



         //buscador de listadeclientes 
         static public function buscarClientePorDni($dni)
            {
            $stmt = Conexion::conectar()->prepare(
                "SELECT *
                FROM clientes
                WHERE dni LIKE :dni
                AND estado = 1"
            );

            $buscar = "%".$dni."%";

            $stmt->bindParam(":dni", $buscar, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }



    }

?>