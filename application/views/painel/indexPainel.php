<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consulta</title>
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
</head>

<body class="sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
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
                <span class="brand-text font-weight-light">Consulta</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo base_url('assets/img') ?>/user.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Admin</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-header">Painel</li>

                        <li class="nav-item">
                            <a href="<?php echo site_url('painel/painel') ?>" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Painel</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="<?php echo site_url('consultar/consulta1') ?>" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>Consulta 1</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="<?php echo site_url('consultas') ?>" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>Consultas</p>
                            </a>
                        </li>



                        <li class="nav-item">
                            <a href="<?php echo site_url('painel/usuarios') ?>" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Usuários</p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-plus-square"></i>
                                <p>
                                    Configurações
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li>
                                    <a class="collapse-item" href="<?php echo site_url('painel/perfis'); ?>"><i class="fa fa-dashboard"></i> Perfis</a>
                                </li>
                                <li>
                                    <a class="collapse-item" href="<?php echo site_url('painel/parametros'); ?>"><i class="fa fa-dashboard"></i> Parâmetros</a>
                                </li>
                                <li>
                                    <a class="collapse-item" href="<?php echo site_url('painel/backups'); ?>"><i class="fa fa-dashboard"></i> Backups</a>
                                </li>


                            </ul>
                        </li>



                        <li class="nav-item">
                            <a href="<?php echo site_url('painel/painel/sair') ?>" class="nav-link">
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
            <section class="content">
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
            <strong>Copyright &copy; 2021
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