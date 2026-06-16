<?php

require_once "config/conexion.php";

class VehiculosModel
{
    static public function crearVehiculo($datos)
    {
        $stmt = Conexion::conectar()->prepare(
            "INSERT INTO vehiculos(
                id_vehiculo,
                placa,
                dni_cliente,
                marca,
                modelo,
                color,
                estado
            ) VALUES (
                :id_vehiculo,
                :placa,
                :dni_cliente,
                :marca,
                :modelo,
                :color,
                :estado
            )"
        );

        $stmt->bindParam(":id_vehiculo",$datos["id_vehiculo"],PDO::PARAM_STR);
        $stmt->bindParam(":placa",$datos["placa"],PDO::PARAM_STR);
        $stmt->bindParam(":dni_cliente",$datos["dni_cliente"],PDO::PARAM_STR);
        $stmt->bindParam(":marca",$datos["marca"],PDO::PARAM_STR);
        $stmt->bindParam(":modelo",$datos["modelo"],PDO::PARAM_STR);
        $stmt->bindParam(":color",$datos["color"],PDO::PARAM_STR);
        $stmt->bindParam(":estado",$datos["estado"],PDO::PARAM_INT);

        if($stmt->execute())
        {

            return "ok";

        }else{   

    return "error";

        }

        $stmt = null;
    }


    //GET_clientes
        static public function mostrarVehiculos()
        {
               $response = VehiculosModel::mostrarVehiculos();

                 return $response;
        }


}

?>