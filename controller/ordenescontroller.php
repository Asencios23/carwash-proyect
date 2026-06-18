<?php

require_once "models/ordenesmodel.php";

class OrdenesController
{
    static public function crearOrden()
    {
        if(isset($_POST["id_orden"]))
        {
            if(
                empty($_POST["id_orden"]) ||
                empty($_POST["dni_cliente"]) ||
                empty($_POST["id_vehiculo"]) ||
                empty($_POST["id_servicio"]) ||
                empty($_POST["hora_salida"]) ||
                empty($_POST["subtotal"])
            )
            {
                return;
            }

            date_default_timezone_set("America/Lima");

            $datos = array(
                "id_orden" => strtoupper($_POST["id_orden"]),
                "dni_cliente" => $_POST["dni_cliente"],
                "id_vehiculo" => $_POST["id_vehiculo"],
                "id_servicio" => $_POST["id_servicio"],
                "hora_salida" => $_POST["hora_salida"],
                "subtotal" => $_POST["subtotal"],
                "fecha" => date("Y-m-d"),
                "hora_entrada" => date("H:i:s"),
                

            );

            $response = OrdenesModel::crearOrden($datos);

            if($response == "ok")
                             {
                                echo '
                                    <script>
                                    window.location="control-de-ordenes";
                                    </script>';
                            }
                            elseif($response == "duplicado")
                            {
                                echo '
                                <div class="alert alert-warning">
                                El Orden del Cliente ya existe
                                </div>';
                            }
                            else
                            {
                                echo '
                                <div class="alert alert-danger">
                                Error al registrar Orden
                                </div>';
                            }
        }
    }

    // GET_control_ordenes

    static public function mostrarControlOrdenes()
    {

    return OrdenesModel::mostrarControlOrdenes();
    
    }
}