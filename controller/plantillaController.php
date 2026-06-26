<?php

class PlantillaController
     {
        public function Index()
        {
            include"views/plantilla.php";
        }

        //agregar para un 4to eslash http://localhost/carwash/lista-de-clientes/editar
         static public function patch()
        {
            return "http://localhost/carwash/";
        }
        
     }
     
?>