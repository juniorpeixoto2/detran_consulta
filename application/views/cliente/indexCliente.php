<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Realize Invest</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/painel') ?>/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('assets/painel') ?>/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <script src="<?php echo base_url('assets/painel') ?>/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url('assets/painel') ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url('assets/painel') ?>/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url('assets/painel') ?>/js/demo.js"></script>

  <style>
    .form-row {
      margin-top: 10px;
    }

    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
      background: #007bff !important;
      color: white;
    }
  </style>
</head>

<body class="sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-collapse">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-dark navbar-primary">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="" class="nav-link">Home</a>
        </li>
      </ul>

      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="" class="brand-link">
        <img src="<?php echo base_url('assets/img') ?>/logo5.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Realize Invest</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo base_url('assets/img') ?>/user.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">
              <?php echo $dadosCliente['nome'] ?>
            </a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-header">Painel</li>

            <li class="nav-item">
              <a href="<?php echo site_url('cliente') ?>" class="nav-link home">
                <i class="nav-icon fas fa-home"></i>
                <p>Home</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo site_url('cliente/plano') ?>" class="nav-link plano">
                <i class="nav-icon fas fa-chess"></i>
                <p>Plano de Trade</p>
              </a>
            </li>




            <li class="nav-item ">
              <a href="<?php echo site_url('cliente/trades') ?>" class="nav-link trades">
                <i class="nav-icon fas fa-play-circle"></i>
                <p>Meus Trades</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo site_url('cliente/imposto') ?>" class="nav-link imposto">
                <i class="nav-icon fas fa-money-bill"></i>
                <p>Imposto a Recolher</p>
              </a>
            </li>



            <li class="nav-item">
              <a href="<?php echo site_url('cliente/gestao') ?>" class="nav-link gestao">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Gestão das Operações</p>
              </a>
            </li>



            <li class="nav-item">
              <a href="<?php echo site_url('cliente/diario') ?>" class="nav-link diario">
                <i class="nav-icon fas fa-calendar"></i>
                <p>Diário do Trader</p>
              </a>
            </li>


            <li class="nav-item">
              <a href="<?php echo site_url('cliente/sala') ?>" class="nav-link sala">
                <i class="nav-icon fas fa-chess-board"></i>
                <p>Sala de Coach</p>
              </a>
            </li>



            <li class="nav-item">
              <a href="<?php echo site_url('cliente/calend') ?>" class="nav-link calendario">
                <i class="nav-icon fas fa-globe"></i>
                <p>Calend. Econ. Mundial</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo site_url('cliente') ?>" class="nav-link bib">
                <i class="nav-icon fas fa-book"></i>
                <p>Biblioteca</p>
              </a>
            </li>


            <li class="nav-item">
              <a href="<?php echo site_url('cliente/videos') ?>" class="nav-link videos">
                <i class="nav-icon fas fa-video"></i>
                <p>Vídeos</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo site_url('cliente/materiais') ?>" class="nav-link materiais">
                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                <p>Materiais</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo site_url('cliente/sair') ?>" class="nav-link">
                <i class="nav-icon fas fa-power-off"></i>
                <p>Sair</p>
              </a>
            </li>

          </ul>
        </nav>
      </div>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1><?php echo ucfirst($titulo) ?></h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo site_url('cliente') ?>">Cliente</a></li>
                <li class="breadcrumb-item active"><?php echo ucfirst($titulo) ?></li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><?php echo ucfirst($titulo) ?></h3>
            <div class="card-tools">
            </div>
          </div>
          <div class="card-body">
            <?php $this->load->view($pagina) ?>
          </div>
          <div class="card-footer">
          </div>
        </div>
      </section>
    </div>
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
      </div>
      <strong>Copyright &copy; 2020 Realize Invest
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->

</body>

</html>