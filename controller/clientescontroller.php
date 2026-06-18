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
                 $stmt = Conexion::conectar()->prepare(
                 "SELECT * FROM clientes"
                    );

                $stmt->execute();

                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }

            //es buscador de clientes

            static public function buscarClientePorDni($dni)
            {
                return ClientesModel::buscarClientePorDni($dni);
            }

    }
?>