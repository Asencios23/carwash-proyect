<?php
    
    require_once "models/clientesmodel.php";

    class ClientesController
    {
         static public function crearClientes()
         {
               if(
            empty($_POST["dni"]) ||
            empty($_POST["nombres"]) ||
            empty($_POST["apellidos"]) ||
            empty($_POST["telefono"]) ||
            empty($_POST["email"])
        )
        {


            return;
        }
                        $datos = array
                        (
                          "dni" => $_POST["dni"],
                          "nombres" => $_POST["nombres"],
                          "apellidos" => $_POST["apellidos"],
                          "telefono" => $_POST["telefono"],
                          "email" => $_POST["email"],
                          "estado" => 1
                        );


                        $response = ClientesModel::crearClientes($datos);

                        if($response == "ok")
                        {
                                  echo '
                                  <div class="alert alert-success">

                                  Cliente registrado correctamente

                                  </div>';
                        } else {
                                 echo '
                                <div class="alert alert-danger">

                                Error al registrar cliente

                                </div>';
                                }

                }
         }
    

?>