<!-- Content Header -->

<?php

$dni = $routesArray[4] ?? null;

$cliente = ClientesController::buscarClientePorDni($dni);

?>

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">

            </div>

            <div class="col-sm-6">
            </div>

        </div>

    </div>



<!-- Main content -->


    <div class="card">

        <div class="card-header">

            <h3 class="card-title">

                <i class="fas fa-edit mr-2"></i>
                Modificar Datos del Cliente

            </h3>

        </div>


        <form method="post">

            <div class="card-body">

                <div class="row">

                    <div class="col-md-4">

                        <div class="form-group">

                            <label>DNI</label>

                            
                        <?php

                            $datos = $cliente[0];

                        ?>

                            <input
                                type="text"
                                class="form-control"
                                name="dni"
                                value="<?php echo $datos["dni"]; ?>"
                                readonly>
                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">

                            <label>Nombres</label>

                            <input
                                type="text"
                                class="form-control"
                                name="nombres"
                                value="<?php echo $datos["nombres"]; ?>">

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">

                            <label>Apellidos</label>

                            <input
                                type="text"
                                class="form-control"
                                name="apellidos"
                                value="<?php echo $datos["apellidos"]; ?>">

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6">

                        <div class="form-group">

                            <label>Teléfono</label>

                            <input
                                type="text"
                                class="form-control"
                                name="telefono"
                                maxlength="9"
                                pattern="[0-9]{9}"
                                value="<?php echo $datos["telefono"]; ?>">

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">

                            <label>Email</label>

                            <input
                                type="email"
                                class="form-control"
                                name="email"
                                value="<?php echo $datos["email"]; ?>">

                        </div>

                    </div>

                </div>

            </div>

           <div class="card-footer text-right">

                <a href="lista-de-clientes" class="btn btn-secondary">

                 <i class="fas fa-arrow-left"></i>
                 Volver

                </a>

                <button
                type="submit"
                class="btn btn-success">

                <i class="fas fa-save"></i>
                Guardar Cambios

                </button>

            </div>

        </form>
       
        <!-- llamar a editar clientes-->
        <?php

            $editar = new ClientesController();
            $editar->editarClientes();

        ?>

    </div>

