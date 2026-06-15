<?php
   
   require_once "models/serviciosmodel.php";

   class ServiciosController
    {
        static public function mostrarServicios()
        {
            $respuesta = ServiciosModel::mostrarServicios();

            return $respuesta;
        }

    }


?>