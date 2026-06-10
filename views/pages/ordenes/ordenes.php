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

        <form>

            <div class="card-body">

                <!-- Primera fila -->
                <div class="row">

                    <div class="col-md-4">

                        <div class="form-group">

                            <label>ID Orden</label>

                            <input
                                type="text"
                                class="form-control"
                                placeholder="OR001">

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">

                            <label>Fecha</label>

                            <input
                                type="date"
                                class="form-control">

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">

                            <label>Cliente</label>

                            <select class="form-control">

                                <option selected disabled>
                                    Seleccione Cliente
                                </option>

                                <option>
                                    12345678 - Carlos Ramirez Soto
                                </option>

                            </select>

                        </div>

                    </div>

                </div>

                <!-- Segunda fila -->
                <div class="row">

                    <div class="col-md-4">

                        <div class="form-group">

                            <label>Vehículo</label>

                            <select class="form-control">

                                <option selected disabled>
                                    Seleccione Vehículo
                                </option>

                                <option>
                                    BCD234 - Hyundai Accent
                                </option>

                            </select>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">

                            <label>Servicio</label>

                            <select class="form-control">

                                <option selected disabled>
                                    Seleccione Servicio
                                </option>

                                <option>
                                    Lavado Básico
                                </option>

                                <option>
                                    Lavado Completo
                                </option>

                                <option>
                                    Encerado
                                </option>

                            </select>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">

                            <label>Subtotal (S/)</label>

                            <input
                                type="number"
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
                                class="form-control">

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">

                            <label>Hora Salida</label>

                            <input
                                type="time"
                                class="form-control">

                        </div>

                    </div>

                </div>

            </div>

            <div class="card-footer text-right">

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