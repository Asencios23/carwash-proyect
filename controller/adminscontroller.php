<?php

class AdminsController
     {
        public function Login()
        {
          //usar cunado se conecte a la base de datos y se valide el usuario y contraseña
            /*if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["login_usuario"]) &&
                   preg_match('/^[a-zA-Z0-9]+$/', $_POST["login_password"]))
                   {
                        echo '<div class="alert alert-warning">Respuesta de logueo</div>';
                   }else{
                        echo '<div class="alert alert-danger">Datos no permitidos</div>';
                   }*/


                         if(isset($_POST["login_usuario"]) && isset($_POST["login_password"]))
        {

            if(
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["login_usuario"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["login_password"])
            )
            {

                echo '<div class="alert alert-success mt-3">
                        Login de prueba correcto.
                      </div>';

            }
            else
            {

                echo '<div class="alert alert-danger mt-3">
                        Datos no permitidos.
                      </div>';

            }

        }
        }
     }
   ?>