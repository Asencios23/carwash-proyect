<?php
    
    require_once "models/clientesmodel.php";

    class ClientesController
    {
         static public function crearClientes()
         {
             if(isset($_POST["dni"]))
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
                                    <script>
                                    window.location="vehiculos";
                                    </script>';
                            }
                            elseif($response == "duplicado")
                            {
                                echo '
                                <div class="alert alert-warning">
                                El DNI del Cliente ya existe
                                </div>';
                            }
                            else
                            {
                                echo '
                                <div class="alert alert-danger">
                                Error al registrar Cliente
                                </div>';
                            }

            }

        }


         //GET_clientes
        static public function mostrarClientes()
        {
               $response = ClientesModel::mostrarClientes();

                 return $response;
        }
         

            //es buscador de clientes

            static public function buscarClientePorDni($dni)
            {
                return ClientesModel::buscarClientePorDni($dni);
            }


            //editar clientes
            
            static public function editarClientes()
        {
            if (isset($_POST["dni"])) 
                {

            if (
                empty($_POST["dni"]) ||
                empty($_POST["nombres"]) ||
                empty($_POST["apellidos"]) ||
                empty($_POST["telefono"]) ||
                empty($_POST["email"])
                ) {
                    return;
                  }

                $datos = array(
                "dni" => $_POST["dni"],
                "nombres" => $_POST["nombres"],
                "apellidos" => $_POST["apellidos"],
                "telefono" => $_POST["telefono"],
                "email" => $_POST["email"]
                );

            $response = ClientesModel::editarClientes($datos);

                if ($response == "ok") 
                    {

                    echo '
                    <script>
                        window.location = "lista-de-clientes";
                    </script>';

                    } else {

                    echo '
                    <div class="alert alert-danger">
                        Error al actualizar el cliente.
                    </div>';

                    }
                }
        }


        //ELIMINACION DE CLIENTES SOLO EN SISTEMA VISUAL NO EL BASE DE DATOS
            static public function eliminarCliente($dni)
                {
                    if (!empty($dni)) {

                    $response = ClientesModel::eliminarCliente($dni);

                        return $response;

                    }

                        return "error";
                }

    }
?>