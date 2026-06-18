<!-- Content Header (Page header) -->
<section class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">

                <h1>
                    <i class="fas fa-car-side mr-2"></i>
                    Vehículos
                </h1>

            </div>

            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item">
                        <a href="inicio">Inicio</a>
                    </li>

                    <li class="breadcrumb-item active">
                        Vehículos
                    </li>

                </ol>

            </div>

        </div>

    </div>

</section>

<!-- Main content -->
<section class="content">

    <div class="card">

        <div class="card-header">

            <h3 class="card-title">

                <i class="fas fa-plus-circle mr-2"></i>
                Registro de Vehículos

            </h3>

        </div>
        
        <!-- POST_clientes -->

        <form method="post">

            <div class="card-body">

                <div class="row">

                    <div class="col-md-4">

                        <div class="form-group">

                            <label>ID Vehículo</label>

                            <input
                                name="id_vehiculo"
                                type="text"
                                class="form-control"
                                placeholder="VH001"
                                maxlength="6"
                                pattern="[A-Z0-9]{6}"
                                style="text-transform: uppercase;"
                                oninput="this.value = this.value.toUpperCase()" 
                                required>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">

                            <label>Placa</label>

                            <input
                                name="placa"
                                type="text"
                                class="form-control"
                                placeholder="ABC123"
                                maxlength="6"
                                pattern="[A-Z0-9]{6}"
                                style="text-transform: uppercase;"
                                oninput="this.value = this.value.toUpperCase()"
                                required>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">

                            <label>Color</label>

                            <input
                                name="color"
                                type="text"
                                class="form-control"
                                placeholder="Negro"
                                required>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6">

                        <div class="form-group">

                            <label>Marca</label>

                            <input
                                name="marca"
                                type="text"
                                class="form-control"
                                style="text-transform: uppercase;"
                                oninput="this.value = this.value.toUpperCase()" 
                                placeholder="Toyota"
                                required>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">

                            <label>Modelo</label>

                            <input
                                name="modelo"
                                type="text"
                                class="form-control"
                                style="text-transform: uppercase;"
                                oninput="this.value = this.value.toUpperCase()" 
                                placeholder="Corolla"
                                required>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12">

                        <div class="form-group">

                            <label>Cliente Propietario</label>


                            
                           <!-- GET_Clientes extraer Clientes -->
                        <?php

                            $clientes = ClientesController::mostrarClientes();

                        ?>

                        <input
                        type="text"
                        class="form-control"
                        name="dni_cliente"
                        list="listaClientes"
                        placeholder="Ingrese DNI del cliente"
                        required>

                        <datalist id="listaClientes">

                            <?php foreach($clientes as $cliente): ?>

                            <option
                            value="<?php echo $cliente["dni"]; ?>">
                            
                            <?php echo $cliente["nombres"]; ?>
                            <?php echo $cliente["apellidos"]; ?>

                            </option>

                            <?php endforeach; ?>

                        </datalist>

                        </div>

                    </div>

                </div>

            </div>

             
            <div class="card-footer text-right">
               
                <?php

                VehiculosController::crearVehiculos();

                ?>

                <button
                    type="submit"
                    class="btn btn-success">

                    <i class="fas fa-save mr-1"></i>
                    Guardar

                </button>

                <button
                    type="reset"
                    class="btn btn-secondary">

                    <i class="fas fa-broom mr-1"></i>
                    Limpiar

                </button>

            </div>

        </form>

    </div>

</section>