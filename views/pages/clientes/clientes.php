<!-- Content Header (Page header) -->
<section class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">

                <h1>
                    <i class="fas fa-users mr-2"></i>
                    Clientes
                </h1>

            </div>

            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item">
                        <a href="inicio">Inicio</a>
                    </li>

                    <li class="breadcrumb-item active">
                        Clientes
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

                <i class="fas fa-user-plus mr-2"></i>
                Registro de Clientes

            </h3>

            <div class="card-tools">

                <button
                    type="button"
                    class="btn btn-tool"
                    data-card-widget="collapse">

                    <i class="fas fa-minus"></i>

                </button>

            </div>

        </div>
  
        <!-- POST_clientes -->
        <form method="post">

            <div class="card-body">

                <div class="row">

                    <div class="col-md-4">

                        <div class="form-group">

                            <label>DNI</label>

                            <input
                                type="text"
                                class="form-control"
                                maxlength="8"
                                name = "dni"
                                placeholder="Ingrese DNI"
                                maxlength="8"
                                pattern="[0-9]{8}"
                                required>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">

                            <label>Teléfono</label>

                            <input
                                type="text"
                                class="form-control"
                                maxlength="9"
                                pattern="[0-9]{9}"
                                name = "telefono"
                                placeholder="Ingrese teléfono"
                                required>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">

                            <label>Correo Electrónico</label>

                            <input
                                type="email"
                                class="form-control"
                                name = "email"
                                placeholder="correo@gmail.com"
                                required>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6">

                        <div class="form-group">

                            <label>Nombres</label>

                            <input
                                type="text"
                                class="form-control"
                                name = "nombres"
                                placeholder="Ingrese nombres"
                                required>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">

                            <label>Apellidos</label>

                            <input
                                type="text"
                                class="form-control"
                                name = "apellidos"
                                placeholder="Ingrese apellidos"
                                required>

                        </div>

                    </div>

                </div>

            </div>

            <div class="card-footer text-right">
                <?php
                ClientesController::crearClientes();
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