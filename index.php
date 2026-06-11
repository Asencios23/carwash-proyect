<?php

session_start();

require_once "controller/plantillaController.php";
require_once "controller/adminscontroller.php";
require_once "models/adminmodel.php";

$plantilla = new PlantillaController();
$plantilla->Index();

?>
