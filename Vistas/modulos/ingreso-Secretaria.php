<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Reserv</b>Medic</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingresar como Secretaria</p>

    <form method="post">
      <div class="form-group has-feedback">

        <input type="text" class="form-control" name="usuario-Ing" placeholder="Escribe tu usuario">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>
      <div class="form-group has-feedback">

        <input type="password" class="form-control" name="clave-Ing" placeholder="Escribe tu Contraseña...">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      </div>
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>

      <?php
          $ingreso = new SecretariasC();
          $ingreso -> IngresarSecretariaC();
      ?>

    </form>

  </div>
  <!-- /.login-box-body -->
</div>