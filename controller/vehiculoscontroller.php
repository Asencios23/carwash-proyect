<?php

 require_once "models/vehiculosmodel.php";

    class VehiculosController
    {
        static public function crearVehiculos()
        {
            if(isset($_POST["id_vehiculo"]))
            {
                //validar campos vacios
                if(
                 empty($_POST["id_vehiculo"]) ||
                 empty($_POST["placa"]) ||
                 empty($_POST["marca"]) ||
                 empty($_POST["modelo"]) ||
                 empty($_POST["color"]) ||
                 empty($_POST["dni_cliente"]) 
                )
                {

                return;

                }

                 // Crear array para enviar al modelo
                 $datos = array(
                    "id_vehiculo" => strtoupper($_POST["id_vehiculo"]), //convertir todo a mayuscula
                    "placa" => strtoupper($_POST["placa"]), //convertir todo a mayuscula
                    "marca" => $_POST["marca"],
                    "modelo" => $_POST["modelo"],
                    "color" => $_POST["color"],
                    "dni_cliente" => $_POST["dni_cliente"],
                    "estado" => 1
                 );

                  // Ejecutar modelo
                    $response = VehiculosModel::crearVehiculo($datos);

                   // Respuesta
                    if($response == "ok")
                      {

                      echo '
                     <div class="alert alert-success">

                        Vehículo registrado correctamente

                     </div>';

                     }
                     else
                     {

                      echo '
                      <div class="alert alert-danger">

                       Error al registrar vehículo

                    </div>';

                     }
            }
        }

        //GET_clientes

            static public function mostrarVehiculos()
            {
                 $stmt = Conexion::conectar()->prepare(
                 "SELECT * FROM vehiculos"
                    );

                $stmt->execute();

                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            
    


        //GET_hacer que cuando selecione un dni me muestre los vehiculos registrados a su nombre en el option

        static public function mostrarVehiculosPorCliente($dni)
        {
            $stmt = Conexion::conectar()->prepare(
            "SELECT * FROM vehiculos
            WHERE dni_cliente = :dni_cliente"
            );

            $stmt->bindParam(":dni_cliente",$dni,PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetchAll();
       }

    }
?>