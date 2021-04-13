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




        <section class="w3l-contact mt-5">
            <div class="contacts-9 py-5 mt-5">
                <div class="container py-lg-3">
                    <div class="row top-map">
                        <div class="map-content-9 col-md-12 mt-5 mt-md-0">

                            <div class="login p-4 mx-auto">
                                <h5 class="text-center mb-4">Cadastro</h5>
                                <form action="#" method="post">


                                    <div class="erro">
                                        <div style='background: red; color: white;'><?php echo validation_errors(); ?></div>
                                    </div>
                                    <?php echo form_open('', ['class' => 'user']); ?>
                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            <input name="nome" type="text" value="<?php echo set_value('nome'); ?>" class="form-control form-control-user" id="" placeholder="Nome" required="true">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="cpf" value="<?php echo set_value('cpf'); ?>" class="form-control form-control-user cpf" id="" placeholder="CPF" required="true">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="fone" value="<?php echo set_value('fone'); ?>" class="form-control form-control-user fone" id="" placeholder="Telefone" required="true">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="logradouro" placeholder="Logradouro" required="true" value="<?php echo set_value('logradouro'); ?>" class="form-control form-control-user" id="">
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-8 mb-3 mb-sm-0">
                                            <input type="text" name="cidade" placeholder="Cidade" required="true" value="<?php echo set_value('cidade'); ?>" class="form-control form-control-user" id="">
                                        </div>
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input type="text" name="uf" placeholder="UF" required="true" value="<?php echo set_value('uf'); ?>" class="form-control form-control-user" id="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="cep" placeholder="CEP" required="true" value="<?php echo set_value('cep'); ?>" class="cep form-control form-control-user" id="">
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="email" name="email" value="<?php echo set_value('email'); ?>" minlength="6" class="form-control form-control-user" id="" placeholder="email" required="true">
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input name="senha" type="password" value="<?php echo set_value('senha'); ?>" class="form-control form-control-user" id="" placeholder="Senha" required="true">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-contact btn-block">Cadastrar</button>
                                    </div>

                                    <p class="account-w3ls text-center text-da">
                                        Já Tem Cadastro?
                                        <a href="<?php echo site_url('site/login'); ?>">Login</a>
                                    </p>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>






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


<div class="login-contect py-5">
    <div class="container py-xl-5 py-3">
        <div class="login-body">

        </div>
    </div>
</div>


<script src="<?php echo base_url('assets'); ?>/js/jquery.mask.js"></script>
<script>
    $(function() {
        $('.fone').mask("(99) 9 9999-9999", {
            clearIfNotMatch: true
        });
        $('.cpf').mask("000.000.000-00", {
            clearIfNotMatch: true
        });
        $('.cep').mask("00.000-000", {
            clearIfNotMatch: true
        });
    });
</script>