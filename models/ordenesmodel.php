<?php

require_once "config/conexion.php";

class OrdenesModel
{
    static public function crearOrden($datos)
    {
        $stmt = Conexion::conectar()->prepare(
           "INSERT INTO ordenes(
            id_orden,
            fecha,
            hora_entrada,
            hora_salida,
            dni_cliente,
            id_vehiculo,
            id_servicio,
            subtotal
        ) VALUES (
            :id_orden,
            :fecha,
            :hora_entrada,
            :hora_salida,
            :dni_cliente,
            :id_vehiculo,
            :id_servicio,
            :subtotal
    )"
        );

        $stmt->bindParam(":id_orden",$datos["id_orden"],PDO::PARAM_STR);
        $stmt->bindParam(":fecha",$datos["fecha"],PDO::PARAM_STR);
        $stmt->bindParam(":hora_entrada",$datos["hora_entrada"],PDO::PARAM_STR);
        $stmt->bindParam(":hora_salida",$datos["hora_salida"],PDO::PARAM_STR);
        $stmt->bindParam(":dni_cliente",$datos["dni_cliente"],PDO::PARAM_STR);
        $stmt->bindParam(":id_vehiculo",$datos["id_vehiculo"],PDO::PARAM_STR);
        $stmt->bindParam(":id_servicio",$datos["id_servicio"],PDO::PARAM_STR);
        $stmt->bindParam(":subtotal",$datos["subtotal"]);


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


    // GET_control_ordenes

static public function mostrarControlOrdenes()
{
    $stmt = Conexion::conectar()->prepare(
    "SELECT
        o.id_orden,
        o.fecha,
        o.hora_entrada,
        o.hora_salida,
        o.subtotal,

        v.placa,
        v.marca,
        v.modelo,

        CONCAT(c.nombres,' ',c.apellidos) AS cliente,
        c.dni,
        c.telefono,

        s.descripcion AS servicio,

        CASE
            WHEN o.hora_salida <= CURTIME()
                 AND o.fecha = CURDATE()
            THEN 'LIMPIO'

            WHEN o.fecha < CURDATE()
            THEN 'LIMPIO'

            ELSE 'EN PROCESO'
        END AS estado

    FROM ordenes o

    INNER JOIN clientes c
        ON o.dni_cliente = c.dni

    INNER JOIN vehiculos v
        ON o.id_vehiculo = v.id_vehiculo

    INNER JOIN servicios s
        ON o.id_servicio = s.id_servicio
    
    WHERE o.fecha = CURDATE()

    ORDER BY o.fecha DESC"

    
    
    );

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
}