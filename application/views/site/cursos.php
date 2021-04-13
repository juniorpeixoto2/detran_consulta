<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/bolsa/assets/main.css">
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/bolsa/assets/cursos.css">
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/bolsa/assets/responsive.css">
  <title>Realize Invest - Cursos</title>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="<?php echo site_url() ?>">
          <img src="<?php echo base_url('assets') ?>/bolsa/media/LOGO-DOURADA.webp" alt="logo" width="150px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo site_url('site/quem_somos') ?>">QUEM SOMOS</a>
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
    </nav>
  </header>

  <main>
    <section class="text-center mt-5 mb-5" id="content">
      <h1 class="mt-3">Cursos</h1>
      <div class="buy-hold mt-4">
        <div class="buy-hold-text">
          <h2>Investir em Ações</h2>
          <p class="text-light">Metodologia Buy and Hold</p>
        </div>
      </div>
      <div class="container mt-4 mb-5">
        <p class="text-cursos"> Esse Curso Destina-se a todas pessoas que querem conhecer o universo do mercado de capitais, aprendendo investir e multiplicar seu dinheiro de forma prática, e segura na bolsa de valores. Utilizando de uma metodologia simples e de fácil compreensão, onde o aluno sairá do nível iniciante ao avançado através de uma didática 100% prática com estudo de casos, planejando através de uma estratégia sólida e consistente, o alcance de seus objetivos Financeiros.</p>
      </div>
      <div class="container mt-5">
        <form>
          <h2>Para mais informações</h2>
          <h3>Preencha os campos abaixo</h3>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome Completo">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Número</label>
            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="(XX) XXXXX-XXXX">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="exampleInputPassword1" placeholder="XXXXXXXX@gmail.com">
          </div>
          <button type="submit" class="btn     w-100">Enviar</button>
        </form>
      </div>

      <div class="trade mt-4">
        <div class="trade-text">
          <h2>Trade Na Pratica</h2>
          <p class="text-light">Operando Mini Índice</p>
        </div>
      </div>
      <div class="container mt-4 mb-5">
        <p class="text-cursos">Venha fazer parte da elite financeira e tenha uma renda extra operando Day Trade no Mini Índice. Preparamos um curso com linguagem clara, simples, e de fácil compreensão para alunos iniciantes. Utilizamos uma técnica exclusiva onde todos os alunos poderão colocar em prática o conhecimento adquirido, criando assim uma forte autoconfiança nas suas operações.</p>
      </div>
      <div class="container mt-5">
        <form>
          <h2>Para mais informações</h2>
          <h3>Preencha os campos abaixo</h3>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome Completo">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Número</label>
            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="(XX) XXXXX-XXXX">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="exampleInputPassword1" placeholder="XXXXXXXX@gmail.com">
          </div>
          <button type="submit" class="btn     w-100">Enviar</button>
        </form>
      </div>

    </section>
  </main>

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


  <!--JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>