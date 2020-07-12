<!-- SETANDO TITULO -->
<?= (isset($titulo)?"<title>$titulo</title>":"<title>FullStack</title>") ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Portal, Reflexões, mensagens, amor, pensamento, dia, coração, love">
    <meta name="author" content="Diego Xavier">
    <meta name="generator" content="">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/200619pr2331.min.css') ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url('assets/css/ionicons.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/css/AdminLTE.min.css'); ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('assets/iCheck/square/blue.css'); ?>">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url('assets/css/_all-skins.min.css'); ?>">
  </head>
<body class="hold-transition skin-purple sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>F</b>ST</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Full</b>Stack</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="<?= base_url('sair'); ?>">Sair do Dashboard</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">PRINCIPAL NAVEGAÇÃO</li>

        <li class="treeview">
          <a href="">
          <i class="fa fa-tags" aria-hidden="true"></i> <span>Categorias</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li><a href="<?php echo base_url('categoriaModulo'); ?>" title="Cadastrar uma nova categoria">
              <i class="fa fa-plus" aria-hidden="true"></i> Novo</a>
            </li>

            <li><a href="<?php echo base_url('categoria'); ?>" title="Gerênciar categorias">
              <i class="fa fa-puzzle-piece" aria-hidden="true"></i> Gerênciar</a>
            </li>

          </ul>
        </li>

        <li class="treeview">
          <a href="">
          <i class="fa fa-stack-overflow" aria-hidden="true"></i> <span>Postagem</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li><a href="<?php echo base_url('categoriaModulo'); ?>" title="Cadastrar uma nova categoria">
              <i class="fa fa-plus" aria-hidden="true"></i> Novo</a>
            </li>

            <li><a href="<?php echo base_url('categoria'); ?>" title="Gerênciar categorias">
              <i class="fa fa-puzzle-piece" aria-hidden="true"></i> Gerênciar</a>
            </li>

          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $titulo ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?= (!isset($localizacao)?"":$localizacao) ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-primary">
        <div class="box-body">

          <!-- VERIFICANDO QUAL PÁGINA VAI SER MOSTRADA -->
          <?php if(isset($secundaria)) {
              $this->load->view($secundaria);
            } else {
              //$this->load->view($dashboardHome);
            }
          ?>


        </div>

      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="#">FullStack</a>.</strong> All rights
    reserved.
  </footer>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
</body>
</html>
<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<!-- SlimScroll -->
<script src="<?= base_url('assets/js/jquery.slimscroll.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?= base_url('assets/js/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/js/adminlte.min.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/js/demo.js'); ?>"></script>
<script>
$(document).ready(function () {
  $('.sidebar-menu').tree()
})
</script>
</body>
