<?php

require_once("models/adminModel.php");

class AdminsController
{
    public function Login()
    {
        if(isset($_POST["usuario"]) &&
           isset($_POST["password_hash"]))
        {

            if(
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuario"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["password_hash"])
            )
            {

                $datos = array(
                    "usuario" => $_POST["usuario"]
                );

                $response = AdminModel::login($datos);

                if($response)
                {
                    $hashIngresado =
                        hash('sha256', $_POST["password_hash"]);

                    if(
                        $response["usuario"] == $_POST["usuario"]
                        &&
                        $response["password_hash"] == $hashIngresado
                    )
                    {

                        $_SESSION["login"] = "ok";

                        echo '
                        <script>
                            window.location = "inicio";
                        </script>
                        ';

                    }
                    else
                    {

                        echo '
                        <div class="alert alert-danger">
                            Usuario o contraseña incorrectos
                        </div>
                        ';

                    }

                }
                else
                {

                    echo '
                    <div class="alert alert-danger">
                        Usuario no encontrado
                    </div>
                    ';

                }

            }
            else
            {

                echo '
                <div class="alert alert-danger">
                    Datos no permitidos
                </div>
                ';

            }

        }
    }
}