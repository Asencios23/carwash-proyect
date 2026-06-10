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

        <form>

            <div class="card-body">

                <div class="row">

                    <div class="col-md-4">

                        <div class="form-group">

                            <label>ID Vehículo</label>

                            <input
                                type="text"
                                class="form-control"
                                placeholder="VH001">

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">

                            <label>Placa</label>

                            <input
                                type="text"
                                class="form-control"
                                placeholder="ABC123">

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">

                            <label>Color</label>

                            <input
                                type="text"
                                class="form-control"
                                placeholder="Negro">

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6">

                        <div class="form-group">

                            <label>Marca</label>

                            <input
                                type="text"
                                class="form-control"
                                placeholder="Toyota">

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">

                            <label>Modelo</label>

                            <input
                                type="text"
                                class="form-control"
                                placeholder="Corolla">

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12">

                        <div class="form-group">

                            <label>Cliente Propietario</label>

                            <select class="form-control">

                                <option selected disabled>
                                    Seleccione cliente
                                </option>

                                <option>
                                    12345678 - Carlos Ramirez Soto
                                </option>

                                <option>
                                    23456789 - Ana Lopez Huaman
                                </option>

                                <option>
                                    56789012 - Jorge Paredes Silva
                                </option>

                            </select>

                        </div>

                    </div>

                </div>

            </div>

            <div class="card-footer text-right">

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