<!-- Content Header -->
<section class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">

                <h1>
                    <i class="fas fa-clipboard-list mr-2"></i>
                    Órdenes
                </h1>

            </div>

            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item">
                        <a href="inicio">Inicio</a>
                    </li>

                    <li class="breadcrumb-item active">
                        Órdenes
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
                Registrar Orden

            </h3>

        </div>

        <form method="post">

            <div class="card-body">

                <!-- Primera fila -->
                <div class="row">

                    <div class="col-md-4">

                        <div class="form-group">

                            <label>ID Orden</label>

                            <input
                                type="text"
                                name="id_orden"
                                class="form-control"
                                maxlength="5"
                                pattern="[A-Z0-9]{5}"
                                style="text-transform: uppercase;"
                                oninput="this.value = this.value.toUpperCase()"
                                placeholder="OR001"
                                value="<?php echo strtoupper($_POST['id_orden'] ?? ''); ?>"
                                required>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">

                            <label>Fecha</label>

                            <!--poner fecha actual y hora actual-->

                            <?php

                                date_default_timezone_set("America/Lima");

                                $fechaActual = date("Y-m-d");

                                $horaActual = date("H:i");

                            ?>

                            <input
                                type="date"
                                name="fecha"
                                class="form-control"
                                value="<?php echo $fechaActual; ?>"
                                readonly
                                required>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">

                            <label>Cliente</label>

                              <!-- GET_Clientes extraer Clientes -->
                        <?php

                            $clientes = ClientesController::mostrarClientes();

                        ?>

                        <input
                        type="text"
                        class="form-control"
                        name="dni_cliente"
                         value="<?php echo isset($_POST['dni_cliente']) ? $_POST['dni_cliente'] : ''; ?>"
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

                        <button type="submit" class="btn btn-primary btn-sm mt-2">
                            Buscar Vehículos
                        </button>

                        </div>

                    </div>

                </div>

                 
                <div class="row">

                    <div class="col-md-4">

                        <div class="form-group">

                        <!--  GET_jalamos datos directo de la casilla clientes -->

                            <label>Vehículo</label>

                             <?php
                                    if(isset($_POST["dni_cliente"]))
                                {
                                    $vehiculos = VehiculosController::mostrarVehiculosPorCliente(
                                    $_POST["dni_cliente"]
                                    );
                                }
                             ?>

                            <select class="form-control" name="id_vehiculo">

                                <option selected disabled>
                                    Seleccione Vehículo
                                </option>

                                 <?php foreach($vehiculos as $vehiculo): ?>

                                <option value="<?php echo $vehiculo["id_vehiculo"]; ?>">

                                     <?php echo $vehiculo["placa"]; ?> -
                                     <?php echo $vehiculo["marca"]; ?>
                                     <?php echo $vehiculo["modelo"]; ?>
                                </option>

                                  <?php endforeach; ?>

                            </select>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">
                            
                        <!-- GET_servicios -->
                            <label>Servicio</label>

                           
                            <?php
                            $servicios = ServiciosController::mostrarServicios();
                            ?>

                            <select class="form-control" id="servicio" name="id_servicio" placeholder="Seleccione Servicio">

                                <option selected disabled value="">
                                    <?php foreach($servicios as $servicio): ?>
                                        Seleccione Servicio
                                        
                                </option>

                                <option value="<?php echo $servicio["id_servicio"]; ?>"
                                  data-precio="<?php echo $servicio["precio"]; ?>">
                                               <?php echo $servicio["descripcion"]; ?>
                                </option>

                                <?php endforeach; ?>

                            </select>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">

                            <label>Subtotal (S/)</label>

                            <input
                                type="number"
                                id="subtotal"
                                name="subtotal"
                                class="form-control"
                                placeholder="0.00"
                                readonly>
                               

                        </div>

                    </div>

                </div>

                <!-- Tercera fila -->
                <div class="row">

                    <div class="col-md-6">

                        <div class="form-group">

                            <label>Hora Entrada</label>

                            <input
                                type="time"
                                class="form-control"
                                name="hora_entrada"
                                value="<?php echo $horaActual; ?>"
                                readonly>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">

                            <label>Hora Salida</label>

                            <input
                                name="hora_salida"
                                type="time"
                                class="form-control"
                                value="<?php echo $_POST['hora_salida'] ?? ''; ?>">

                        </div>

                    </div>

                </div>

            </div>

            <div class="card-footer text-right">
                 <?php

                OrdenesController::crearOrden();

                ?>

                <button
                    type="submit"
                    class="btn btn-success">

                    <i class="fas fa-save mr-1"></i>
                    Registrar Orden

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
 
<script>
//GET_servicios, esto hace que a la hora de seleccionar un servicio, se muestre su precio en el campo subtotal
   
document.getElementById('servicio').addEventListener ('change', function() {

        let precio = this.options[this.selectedIndex].dataset.precio;

        document.getElementById('subtotal').value = precio;
    });
</script>
    
