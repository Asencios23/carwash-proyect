<?php

session_start();

//login
require_once "controller/plantillaController.php";
require_once "controller/adminscontroller.php";
require_once "models/adminmodel.php";

//GET_servios
require_once "controller/servicioscontroller.php";
require_once "models/serviciosmodel.php";

//POST_crearclientes y GET 
require_once "controller/clientescontroller.php";
require_once "models/clientesmodel.php";

//POST_crearvehiculos y GET
require_once "controller/vehiculoscontroller.php";
require_once "models/vehiculosmodel.php";

//POST_crearordenes
require_once "controller/ordenescontroller.php";
require_once "models/ordenesmodel.php";

$plantilla = new PlantillaController();
$plantilla->Index();

?>
