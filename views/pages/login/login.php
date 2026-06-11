<div class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Iniciar Sesión</p>

        <!-- extraido tambien de https://www.w3schools.com/bootstrap4/bootstrap_forms.asp -->
        <form method="post" class="needs-validation" novalidate>
          <div class="input-group mb-3">
            <!-- usuario -->
            <input type="text" class="form-control"
              placeholder="usuario" name="usuario" id="usuario" required>

            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>

            <!--rtado o extraido de https://www.w3schools.com/bootstrap4/bootstrap_forms.asp-->
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">el campo es obligatorio</div>
          </div>

          <div class="input-group mb-3">
            <!-- password_hash -->
            <input type="password" class="form-control"
              placeholder="Contraseña" name="password_hash" id="password_hash" required>

            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>

            <!--importado o extraido de https://www.w3schools.com/bootstrap4/bootstrap_forms.asp-->
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">el campo es obligatorio</div>
          </div>

          <?php
          require_once "controller/adminscontroller.php";
          $login = new AdminsController();
          $login->Login();
          ?>

          <div class="row">
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Iniciando Sesión</button>
            </div>
            <!-- /.col -->
          </div>
        </form>


  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
</div>

</div>

<script src="views/assets/custom/Formularios/formularios.js"></script>