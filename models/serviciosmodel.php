<?php
    
    require_once "config/conexion.php";
       class ServiciosModel
       {
        static public function mostrarServicios()
        {
            $stmt = conexion::conectar()->prepare(
                "SELECT * FROM servicios"
            );

            $stmt->execute();
       
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
          
            $stmt = null;
        }

       }
?>