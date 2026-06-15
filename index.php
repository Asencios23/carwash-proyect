<?php

session_start();

//login
require_once "controller/plantillaController.php";
require_once "controller/adminscontroller.php";
require_once "models/adminmodel.php";

//GET_servios
require_once "controller/servicioscontroller.php";
require_once "models/serviciosmodel.php";

//POST_crear clientes 
require_once "controller/clientescontroller.php";
require_once "models/clientesmodel.php";

$plantilla = new PlantillaController();
$plantilla->Index();

?>
