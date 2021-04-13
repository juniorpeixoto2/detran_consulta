<?php
$parametros = $this->db->where('par_id', 1)->get('parametros')->row();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?php echo $parametros->par_titulo ?></title>

    <link rel="icon" type="image/gif" href="<?php echo base_url('assets/img'); ?>/icone.png" />

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/dash/app.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/dash/jqvmap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/dash/weather-icons.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/dash/weather-icons-wind.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/dash/summernote-bs4.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/dash/style.css">
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/dash/components.css">

    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/dash/prism.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/dash/custom.css">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo site_url('cliente'); ?>images/favicon.png">

    <link href="<?php echo base_url('assets/site') ?>/css/font-awesome.min.css" rel="stylesheet">

    <script src="<?php echo base_url('assets'); ?>/dash/app.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/dash/index.js"></script>
    <script src="<?php echo base_url('assets'); ?>/dash/scripts.js"></script>
    <script src="<?php echo base_url('assets'); ?>/dash/custom.js"></script>
    <script src="<?php echo base_url('assets'); ?>/dash/prism.js"></script>
    <script src="<?php echo base_url('assets'); ?>/dash/jquery-ui.min.js"></script>

    <style>
        .modal-backdrop {
            z-index: -1;
        }

        .form-row {
            margin-top: 10px;
        }

        .valor {
            font-size: 25px;
            font-weight: bold;
        }
    </style>


    <style type="text/css">
        /* Chart.js */
        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }
    </style>
    <script src="<?php echo base_url('assets'); ?>/dash/clipboard.min.js"></script>
</head>

<body class="light light-sidebar theme-white">

    <div class="loader" style="display: none;"></div>


    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="<?php echo site_url('painel/painel'); ?>#" data-toggle="sidebar" class="nav-link nav-link-lg
                                   collapse-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-justify">
                                    <line x1="21" y1="10" x2="3" y2="10"></line>
                                    <line x1="21" y1="6" x2="3" y2="6"></line>
                                    <line x1="21" y1="14" x2="3" y2="14"></line>
                                    <line x1="21" y1="18" x2="3" y2="18"></line>
                                </svg>
                            </a></li>


                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">

                    <li class="dropdown">
                        <a href="<?php echo site_url('painel/painel'); ?>#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img src="<?php echo base_url('assets'); ?>/dash/sem_foto.gif" class="user-img-radious-style" style="border-radius:100px;width:30px;height:30px;" alt="">

                            <span class="d-sm-none d-lg-inline-block"></span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">
                            <div class="dropdown-title">
                                Olá <?php echo $this->session->usuario; ?>
                            </div>
                            <a href="<?php echo site_url('cliente'); ?>dadospessoais" class="dropdown-item has-icon"> <i class="fa fa-user"></i> Dados Pessoais
                            </a> <a href="<?php echo site_url('cliente'); ?>dadosbancarios" class="dropdown-item has-icon"> <i class="fa fa-bolt"></i>
                                Dados de Pagamento
                            </a>
                            <a href="<?php echo site_url('cliente'); ?>minhasfotos" class="dropdown-item has-icon"> <i class="fa fa-cog"></i>
                                Minhas Fotos
                            </a>

                            <a href="<?php echo site_url('cliente'); ?>" class="dropdown-item has-icon"> <i class="fa fa-cog"></i>
                                Segurança
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?php echo site_url('cliente/sair'); ?>" class="dropdown-item has-icon text-danger"> <i class="fa fa-arrow-left"></i>
                                Sair
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>

            <div class="main-sidebar sidebar-style-2" tabindex="1" style="overflow: hidden; outline: none;">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="<?php echo site_url('painel/painel'); ?>">
                            <span class="logo-name"><?php echo $parametros->par_titulo ?></span>
                        </a>
                    </div>
                    <div class="sidebar-user">
                        <div class="sidebar-user-picture">
                            <img src="<?php echo base_url('assets'); ?>/dash/sem_foto.gif" class="header-logo">
                        </div>
                        <div class="sidebar-user-details">
                            <div class="user-name">
                                <?php echo $this->session->usuario; ?>
                            </div>
                            <div class="user-role"></div>
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Backoffice</li>
                        <hr class="sidebar-divider">


                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('painel/painel'); ?>">
                                <i class="fa fa-fw fa-home"></i>
                                <span>
                                    Painel
                                </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('compras'); ?>">
                                <i class="fa fa-fw fa-money"></i>
                                <span>
                                    Depositos
                                </span>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('rifas'); ?>">
                                <i class="fa fa-fw fa-dollar-sign"></i>
                                <span>
                                    Rifas
                                </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('saques'); ?>">
                                <i class="fa fa-fw fa-dollar-sign"></i>
                                <span>
                                    Saques
                                </span>
                            </a>
                        </li>



                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('clientes'); ?>">
                                <i class="fa fa-fw fa-user"></i>
                                <span>
                                    Clientes
                                </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('painel/parametros/termos'); ?>">
                                <i class="fa fa-fw fa-dashboard"></i>
                                <span>
                                    Termos
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('painel/parametros/instituto'); ?>">
                                <i class="fa fa-fw fa-dashboard"></i>
                                <span>
                                    Instituto
                                </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('painel/usuarios'); ?>">
                                <i class="fa fa-fw fa-users"></i>
                                <span>
                                    Usuários
                                </span>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="<?php echo site_url('cliente'); ?>#" class="nav-link has-dropdown"><i class="fa fa-fw fa-gear"></i><span>Configurações</span></a>
                            <ul class="dropdown-menu" style="display: none;">
                                <!-- 
                                    -->
                                <li>
                                    <a class="collapse-item" href="<?php echo site_url('painel/perfis'); ?>"><i class="fa fa-dashboard"></i> Perfis</a>
                                </li>
                                <li>
                                    <a class="collapse-item" href="<?php echo site_url('painel/parametros'); ?>"><i class="fa fa-dashboard"></i> Parâmetros</a>
                                </li>
                                <li>
                                    <a class="collapse-item" href="<?php echo site_url('painel/backups'); ?>"><i class="fa fa-dashboard"></i> Backups</a>
                                </li>
                                <li>
                                    <a class="collapse-item" href="<?php echo site_url('logs'); ?>"><i class="fa fa-dashboard"></i> Logs</a>
                                </li>
                                <li>
                                    <a class="collapse-item" href="<?php echo site_url('Logs_financ'); ?>"><i class="fa fa-dashboard"></i> Logs Financ</a>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('painel/painel/sair'); ?>">
                                <i class="fa fa-fw fa-arrow-left"></i>
                                <span>
                                    Sair
                                </span>
                            </a>
                        </li>
                    </ul>
                    <hr class="sidebar-divider">
                </aside>
            </div>
            <!-- Main Content -->
            <div class="main-content" style="min-height: 838px;">
                <section class="section">
                    <?php
                    if ($pagina == 'cliente/home') {
                    ?>
                        <?php $this->load->view($pagina) ?>
                    <?php } else { ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4><?php echo ucfirst($titulo); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <?php $this->load->view($pagina) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright © 2020
                </div>
                <div class="footer-right">
                </div>
            </footer>
        </div>
    </div>
    <div id="ascrail2001" class="nicescroll-rails nicescroll-rails-vr" style="width: 8px; z-index: 892; cursor: default; position: fixed; top: 0px; left: 242px; height: 933px; display: none; opacity: 0;">
        <div class="nicescroll-cursors" style="position: relative; top: 0px; float: right; width: 6px; height: 0px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;"></div>
    </div>
    <div id="ascrail2001-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 8px; z-index: 892; top: 925px; left: 0px; position: fixed; cursor: default; display: none; opacity: 0;">
        <div class="nicescroll-cursors" style="position: absolute; top: 0px; height: 6px; width: 0px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px; left: 0px;"></div>
    </div>
</body>

</html>