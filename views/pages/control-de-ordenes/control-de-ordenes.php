<!-- Content Header -->
<section class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">

                <h1>
                    <i class="fas fa-clipboard-check mr-2"></i>
                    Control de Órdenes
                </h1>

            </div>

        </div>

    </div>

</section>

<!-- Main content -->
<section class="content">

<?php

$ordenes = OrdenesController::mostrarControlOrdenes();

?>

    <div class="card">

        <div class="card-header">

            <h3 class="card-title">

                Estado Actual de Vehículos

            </h3>

        </div>

        <div class="card-body table-responsive p-0">

            <table class="table table-hover text-nowrap">

                <thead>

                    <tr>

                        <th>Estado</th>
                        <th>Cliente</th>
                        <th>Vehículo</th>
                        <th>Placa</th>
                        <th>Servicio</th>
                        <th>Entrada</th>
                        <th>Salida</th>
                        <th>Acciones</th>

                    </tr>

                </thead>

                <tbody>
                    <?php foreach($ordenes as $orden): ?>

                    <tr>

                    <td>

                        <?php if($orden["estado"] == "LIMPIO"): ?>

                            <span class="badge badge-success">

                                LIMPIO

                            </span>

                        <?php else: ?>

                            <span class="badge badge-warning">

                                EN PROCESO

                            </span>

                        <?php endif; ?>

                    </td>

                    <td><?php echo $orden["cliente"]; ?></td>

                    <td><?php echo $orden["marca"]; ?></td>

                    <td><?php echo $orden["placa"]; ?></td>

                    <td><?php echo $orden["servicio"]; ?></td>

                    <td><?php echo $orden["hora_entrada"]; ?></td>

                    <td><?php echo $orden["hora_salida"]; ?></td>

                    <td>
                            <button class="btn btn-primary btn-sm">
                                

                                <i class="fab fa-whatsapp"></i>

                            </button>
                    </td>

                </tr>

                <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>

</section>