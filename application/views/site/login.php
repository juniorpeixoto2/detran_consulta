<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->

    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/login/main.css">
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/login/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Login Realize</title>
</head>

<body>
    <header>
        <nav>
            <div class="container">
                <a class="brand" href="<?php echo site_url() ?>">
                    <img class="pt-4 pb-4" src="<?php echo base_url('assets') ?>/login/logo.png" alt="logo" width="250px">
                </a>
            </div>
        </nav>
    </header>
    <div class="container">
        <main class="mt-5">
            <section class="mb-5" id="login">
                <h2 class="font-weight-bold">Entrar no sistema</h2>
                <p>Todos os campos são de preenchimento obrigatório.</p>
                <form action="#" method="post" class="mt-5">
                    <p class="mb-5">E-mail:
                        <input type="text" name="email" required='true' autofocus='on' placeholder="Login/E-mail">
                    </p>
                    <p class="">Senha:
                        <input type="password" name="senha" required='true' placeholder="Login/E-mail">
                    </p>
                    <div class="text-center mt-5 mb-2">
                        <button type="submit" class="mr-5 mb-4 font-weight-bold pt-1 pb-1 pl-4 pr-4">Entrar</button>
                        <a href="<?php echo site_url('site/cadastro') ?>" class="bt font-weight-bold pt-1 pb-1 pl-4 pr-4">Abra sua conta</a>
                    </div>
                    <h5>
                    </h5>
                </form>
            </section>
        </main>
    </div>
    <style>
        .bt {
            border: none;
            border-radius: 10px;
            font-family: 'Campton' !important;
            font-size: 30px;
            background: linear-gradient(to right, #1b366b, #007ebe);
            color: #ffff;
        }
    </style>
    <footer>
        <div class="d-flex justify-content-center mt-5">
            <img src="<?php echo base_url('assets') ?>/login/logo.png" alt="logo">
        </div>
        <div class="container-footer mt-5">
            <section class="mt-5 mb-5" id="rodape">
                <div class="row ml-auto mr-auto">
                    <div class="col-md-3">
                        <h2 class="mb-3">Quem somos</h2>
                        <a class="mb-2" href="#">A Realize</a>
                        <a class="mb-2" href="#">Social</a>
                    </div>
                    <div class="col-md-3">
                        <h2 class="mb-3">Investimento</h2>
                        <a class="mb-2" href="#">Renda Fixa</a>
                        <a class="mb-2" href="#">Ações</a>
                        <a class="mb-2" href="#">Fundos Inevestimentos</a>
                        <a class="mb-2" href="#">Fundos Imobiliários</a>
                        <a class="mb-2" href="#">Operações COE</a>
                    </div>
                    <div class="col-md-3">
                        <h2 class="mb-3">Opere na Bolsa</h2>
                        <a class="mb-2" href="#">O que é a Bolsa</a>
                        <a class="mb-2" href="#">Abrir conta Corretora</a>
                        <a class="mb-2" href="#">Montar uma Carteira</a>
                    </div>
                    <div class="col-md-3">
                        <h2 class="mb-3">Cursos</h2>
                        <a class="mb-2" href="#">Investir em Ações</a>
                        <a class="mb-2" href="#">Trade na Prática</a>
                    </div>
                </div>
            </section>
        </div>
    </footer>
</body>

</html>