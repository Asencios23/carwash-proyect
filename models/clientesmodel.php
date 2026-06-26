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
                 $stmt = Conexion::conectar()->prepare(
                    "SELECT *
                    FROM clientes
                    WHERE estado = 1"
                    );

                $stmt->execute();

                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }


         //buscador de listadeclientes 
         static public function buscarClientePorDni($dni)
            {
            $stmt = Conexion::conectar()->prepare(
                "SELECT *
                FROM clientes
                WHERE dni = :dni
                AND estado = 1"
                );

            $stmt->bindParam(":dni", $dni, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            }

          //editar cliente
          static public function editarClientes($datos)
            {
                $stmt = Conexion::conectar()->prepare(
                "UPDATE clientes
                SET
                nombres = :nombres,
                apellidos = :apellidos,
                telefono = :telefono,
                email = :email
                WHERE dni = :dni"
                );

            $stmt->bindParam(":dni", $datos["dni"], PDO::PARAM_STR);
            $stmt->bindParam(":nombres", $datos["nombres"], PDO::PARAM_STR);
            $stmt->bindParam(":apellidos", $datos["apellidos"], PDO::PARAM_STR);
            $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
            $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);

            if ($stmt->execute()) 
                {

                    return "ok";

                } else {

                    return "error";
                }

                $stmt = null;
            }
    
            //ELIMINACION DE CLIENTES SOLO EN SISTEMA VISUAL NO EL BASE DE DATOS
            static public function eliminarCliente($dni)
                {
                    $stmt = Conexion::conectar()->prepare(
                    "UPDATE clientes
                    SET estado = 0
                    WHERE dni = :dni"
                    );

                    $stmt->bindParam(":dni", $dni, PDO::PARAM_STR);

                    if ($stmt->execute()) 
                        {

                            return "ok";

                        } else {

                            return "error";

                        }

                    $stmt = null;
                }

    }


?>