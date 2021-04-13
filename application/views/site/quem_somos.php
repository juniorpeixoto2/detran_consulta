<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/quem_somos/main.css">
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/quem_somos/QuemSomos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Realize Invest - Quem Somos</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo site_url() ?>">
                    <img src="<?php echo base_url('assets') ?>/quem_somos/LOGO-DOURADA.webp" alt="" width="150px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('site/quem_somos') ?>">QUEM SOMOS<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('site/invest') ?>">INVESTIMENTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('site/bolsa') ?>">OPERE NA BOLSA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('site/cursos') ?>">CURSOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('site/login') ?>">LOGIN</a>
                        </li>
                    </ul>
                </div>
            </div>
            <h2>Sobre<br><span>a Realize</span></h2>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-main">
            <section class="text-center mt-4 mb-4" id="sobre">
                <p>Especialistas em investimentos, somos uma empresa voltada para a área de desenvolvimento educacional no mercado financeiro, através de uma metodologia diferenciada oferecemos treinamentos, mentorias e cursos,
                    ajudando empresas e pessoas a alavancarem ainda mais seus Resultados.
                </p>
            </section>
        </div>
    </main>
    <footer>
        <div class="d-flex justify-content-center mt-5">
            <h1>Acompanhe-nos nas redes sociais:</h1>
        </div>
        <div class="d-flex justify-content-center mt-3">
            <div class="row">
                <div class="col-md-6">
                    <img class="mr-5 mb-3 ml-2" src="<?php echo base_url('assets') ?>/quem_somos/FACEBOOK.png" alt="">
                </div>
                <div class="col-md-6">
                    <img class="ml-2" src="<?php echo base_url('assets') ?>/quem_somos/INSTAGRAM.png" alt="logo">
                </div>
            </div>

        </div>
        <div class="d-flex justify-content-center mt-5">
            <img src="<?php echo base_url('assets') ?>/quem_somos/logo.png" alt="logo">
        </div>
        <div class="container-footer mt-5">
            <section class="m-5" id="rodape">
                <div class="row ml-auto mr-auto">
                    <div class="col-md-3">
                        <h2 class="mb-3">Quem somos</h2>
                        <a class="mb-2" href="<?php echo site_url('site/quem_somos') ?>">A Realize</a>
                        <a class="mb-2" href="<?php echo site_url('site/quem_somos') ?>">Social</a>
                    </div>
                    <div class="col-md-3">
                        <h2 class="mb-3">Investimento</h2>
                        <a class="mb-2" href="<?php echo site_url('site/invest') ?>">Renda Fixa</a>
                        <a class="mb-2" href="<?php echo site_url('site/invest') ?>">Ações</a>
                        <a class="mb-2" href="<?php echo site_url('site/invest') ?>">Fundos Investimentos</a>
                        <a class="mb-2" href="<?php echo site_url('site/invest') ?>">Fundos Imobiliários</a>
                        <a class="mb-2" href="<?php echo site_url('site/invest') ?>">Operações COE</a>
                    </div>
                    <div class="col-md-3">
                        <h2 class="mb-3">Opere na Bolsa</h2>
                        <a class="mb-2" href="<?php echo site_url('site/bolsa') ?>">O que é a Bolsa</a>
                        <a class="mb-2" href="<?php echo site_url('site/bolsa') ?>">Abrir conta Corretora</a>
                        <a class="mb-2" href="<?php echo site_url('site/bolsa') ?>">Montar uma Carteira</a>
                    </div>
                    <div class="col-md-3">
                        <h2 class="mb-3">Cursos</h2>
                        <a class="mb-2" href="<?php echo site_url('site/cursos') ?>">Investir em Ações</a>
                        <a class="mb-2" href="<?php echo site_url('site/cursos') ?>">Trade na Prática</a>
                    </div>
                </div>
            </section>
        </div>
    </footer>

    <style>
        header {
            min-width: 100vw;
            height: 85vh;
            background-image: url('<?php echo base_url('assets') ?>/quem_somos/FUNDO.png');
            background-repeat: no-repeat;
            border-bottom-left-radius: 80px;
            border-bottom-right-radius: 80px;
        }
    </style>

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>