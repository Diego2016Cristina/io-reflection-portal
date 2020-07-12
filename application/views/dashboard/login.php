<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Full</b>Stack</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Entre com seus dados</p>
    <?php
      getMsg('msgAutenticacaoUser');
    ?>
    <form action="<?= base_url('acessar'); ?>" method="post">
      <div class="form-group has-feedback">
        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Senha">
        <input type="hidden" name="login" id="login" value="logado">
        <span class="glyphicon glyphicon-eye-close form-control-feedback" aria-hidden="true"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Acessar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="#">Esqueci a minha senha</a><br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
