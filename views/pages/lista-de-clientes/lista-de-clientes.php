<?php
 //ELIMINAR CLIENTES
if (isset($routesArray[3]) && $routesArray[3] == "eliminar") {

    $dni = $routesArray[4];

    ClientesController::eliminarCliente($dni);

    echo '
    <script>
        window.location = "lista-de-clientes";
    </script>';
}

?>

<!-- Content Header -->
<section class="content-header">

<div class="container-fluid">

    <div class="row mb-2">

        <div class="col-sm-6">

            <h1>
                <i class="fas fa-users mr-2"></i>
                Lista de Clientes
            </h1>

        </div>

        <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

                <li class="breadcrumb-item">
                    <a href="inicio">Inicio</a>
                </li>

                <li class="breadcrumb-item active">
                         Lista de Clientes
                    </li>
            </ol>

        </div>

    </div>

</div>


</section>


<!-- Main content -->

<section class="content">

     <?php
        if (isset($routesArray[3]) && $routesArray[3] == "editar") {
     ?>

<section class="content">

    <?php include __DIR__ . "/editar.php"; ?>

</section>

    <?php
        return;
    }
    ?>


<div class="card">

    <div class="card-header">

        <h3 class="card-title">

            <i class="fas fa-address-book mr-2"></i>
            Gestión de Clientes

        </h3>

    </div>

    <div class="card-body">

        <!-- Buscador -->
     <form method="post">

        <div class="row mb-4">

            <div class="col-md-4">

                <label>Buscar Cliente por DNI</label>

                <input
                    type="text"
                    name="buscar_dni"
                    id="buscar_dni"
                    maxlength="8"
                    pattern="[0-9]{8}"
                    class="form-control"
                    placeholder="Ingrese DNI"
                    value="<?php echo $_POST['buscar_dni'] ?? ''; ?>">

            </div>
            
            
            <div class="col-md-2 align-self-end">

                <button class="btn btn-primary btn-block">

                    <i class="fas fa-search"></i>
                    Buscar

                </button>

            </div>

            <div class="col-md-2 align-self-end">

                

            </div>

        </div>
    </form>

        <!-- Tabla -->

                    <?php

                        if(!empty($_POST["buscar_dni"]))
                        {
                            $clientes = ClientesController::buscarClientePorDni(
                            $_POST["buscar_dni"]
                            );
                        }
                        else
                        {
                            $clientes = ClientesController::mostrarClientes();
                        }

                    ?>

        <div class="table-responsive">

            <table class="table table-bordered table-hover">

                <thead class="thead-light">

                    <tr>

                        <th>DNI</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th width="100">Acciones</th>

                    </tr>

                </thead>

                <tbody>

                <?php foreach($clientes as $cliente): ?>

                    <tr>

                        <td><?php echo $cliente["dni"]; ?></td>
                        <td><?php echo $cliente["nombres"]; ?></td>
                        <td><?php echo $cliente["apellidos"]; ?></td>
                        <td><?php echo $cliente["telefono"]; ?></td>
                        <td><?php echo $cliente["email"]; ?></td>


                        <td>
                            <!-- EDITAR O MODIFICAR -->
                            <a href="lista-de-clientes/editar/<?php echo $cliente['dni']; ?>"
                                class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            
                            <!-- ELIMINAR CLIENTES -->
                            <a href="javascript:void(0);"
                                class="btn btn-danger btn-sm"
                                onclick="confirmarEliminar('<?php echo $cliente['dni']; ?>')">

                                <i class="fas fa-trash"></i>

                            </a>

                        </td>

                    </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>

    <div class="card-footer text-right">

        <button class="btn btn-success"
        onclick="window.location.href='clientes'">
            


            <i class="fas fa-user-plus"></i>
            Nuevo Cliente

        </button>

    </div>

</div>


</section>


<!-- se agrego para que la tabla funcione mediante vas ingresando
 el dni y te va mostrando la informacion del cliente-->


<script>

function confirmarEliminar(dni){

    fncSweetAlert(
        "confirm",
        "¿Desea eliminar este cliente?"
    ).then(function(confirmar){

        if(confirmar){

            window.location = "lista-de-clientes/eliminar/" + dni;

        }

    });

}

</script>
