<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Style-->
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/assets/style.css">
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/assets/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Realize Invest - Investimentos</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="<?php echo site_url() ?>">
                    <img src="<?php echo base_url('assets') ?>/media/LOGO-DOURADA.webp" alt="">
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
        <div class="text-center">
            <h2 class="text-light fw-bold">Investimentos</h2>
            <p class="text-light fw-light">
                Na Realize você vai encontrar tudo o que precisa para realizar seus<br>
                investimentos de forma ágil, fácil e segura
            </p>
            <button class="btn-lg fw-bold text-light">ABRA SUA CONTA GRATUITAMENTE</button>
        </div>
    </header>
    <main>
        <section id="vantagens">
            <div class="row">
                <div class="box col-md-2">
                    <a href="#renda-fixa">
                        <div class="text-center">
                            <img src="<?php echo base_url('assets') ?>/media/RENDA-FIXA.png" alt="">
                            <a class="text-light saiba" href="#renda-fixa">Saiba mais</a>
                        </div>
                    </a>
                </div>
                <div class="box col-md-2">
                    <a href="#fundo-investimentos">
                        <div class="text-center">
                            <img src="<?php echo base_url('assets') ?>/media/FUNDO-DE-INVESTIMENTOS.png" alt="" width="110px">
                            <a class="text-light saiba" href="#fundo-investimentos">Saiba mais</a>
                        </div>
                    </a>
                </div>
                <div class="box col-md-2">
                    <a href="#acoes">
                        <div class="text-center">
                            <img src="<?php echo base_url('assets') ?>/media/AÇÕES.png" alt="">
                            <a class="text-light saiba" href="#acoes">Saiba mais</a>
                        </div>
                    </a>
                </div>
                <div class="box col-md-2">
                    <a href="#fundo-imobiliario">
                        <div class="text-center">
                            <img src="<?php echo base_url('assets') ?>/media/FUNDOS-IMOBILIARIOS.png" alt="">
                            <a class="text-light saiba" href="#fundo-imobiliario">Saiba mais</a>
                        </div>
                    </a>
                </div>
                <div class="box col-md-2">
                    <a href="#coe">
                        <div class="text-center">
                            <img src="<?php echo base_url('assets') ?>/media/COE.png" alt="">
                            <a class="text-light saiba" href="#coe">Saiba mais</a>
                        </div>
                    </a>
                </div>
                <div class="box col-md-2">
                    <a href="#">
                        <div class="text-center">
                            <img src="<?php echo base_url('assets') ?>/media/TRADE.png" alt="">
                            <a class="text-light saiba" href="#">Saiba mais</a>
                        </div>
                    </a>
                </div>
        </section>
        <section class="text-center" id="abrir-conta">
            <h2 class="text-dark fw-bold">Seus investimentos rendem de verdade,<br>
                vem ganhar dinheiro, vem!
            </h2>
            <button class="btn-lg fw-bold text-light">ABRA CONTA GRÁTIS</button>
        </section>
        <!--Página Renda Fixa-->
        <div class="menu" id="renda-fixa">
            <section class="text-center" id="sobre-renda-fixa">
                <h2 class="text-light fw-bold">O que é Renda Fixa ?</h2>
                <p class="fw-light text-light">Renda fixa é um termo que se refere a qualquer tipo de investimento que possui regras<br>
                    de remuneraçãodefinidas no momento da aplicação no título. Essas regras estipulamo<br> prazo e a forma que a remuneração será calculada e paga ao investidor.<br>
                    Quando você compra um título de Renda Fixa, você está emprestando dinheiro<br>
                    ao emissor do papel, que pode ser um banco, uma empresa ou mesmo o Governo.<br>
                    Em troca, recebe uma remuneração por um determinado prazo, na forma de juros<br>
                    e/ou correção monetária, podendo receber, ainda, parcelas chamadas amortizações.</p>
            </section>
            <div class="text-center btn-2">
                <button class="btn-lg fw-bold text-light">ABRA SUA CONTA GRATUITAMENTE</button>
            </div>
            <div class="text-center">
                <a class="text-center fw-bold tipos-a" href="#">Tipos de renda fixa</a>
            </div>
            <section id="tipos">
                <div class="box2 text-center">
                    <h3 class="fw-bold">Títulos Públicos</h3>
                    <p class="fw-light">LTN,NTN,B,LFT</p>
                </div>
                <div class="box2 text-center">
                    <h3 class="fw-bold">LCI E LCA</h3>
                    <p class="fw-light">Letra de Crédito Imobiliário e Letra de Crédito Agrícola</p>
                </div>
                <div class="box2 text-center">
                    <h3 class="fw-bold">CRI E CRA</h3>
                    <p class="fw-light">
                        Certificado de Recebível Imobiliário e Certificado de Recebível Agrícola</p>
                </div>
                <div class="box2 text-center">
                    <h3 class="fw-bold">CDB</h3>
                    <p class="fw-light">Certificado de Depósito Bancário</p>
                </div>
                <div class="box2 text-center">
                    <h3 class="fw-bold">DEBÊNTURES</h3>
                    <p class="fw-light">Crédito privado de empresas</p>
                </div>
                <div class="box2 text-center">
                    <h3 class="fw-bold">LC</h3>
                    <p class="fw-light">Letra de Câmbio</p>
                </div>
            </section>
        </div>
        <!--Página Fundos de investimento-->
        <div class="menu" id="fundo-investimentos">
            <section class="text-center" id="fundo-investimentos-sobre">
                <h2 class="fw-bold text-light mb-3">Fundo de Investimentos:</h2>
                <p class="text-light">É o tipo de aplicação financeira que reúne recursos de um conjunto de investidores<br>
                    (cotistas), permitindo assim investir em uma variada cesta de ativos,<br>
                    em diferentes mercados. Esta carteira pode englobar Títulos de Renda Fixa,<br>
                    Títulos Públicos, Títulos Cambiais, Derivativos, Commodities, Ações, entre outros.<br>
                    Quanto mais diversificado o fundo, menor é o risco.
                    Todo o dinheiro aplicado no Fundo de Investimento é convertido em cotas.<br>
                    Cada cotista possui um número de cotas proporcional ao valor total de seus investimentos.<br>
                    O valor da cota é atualizado diariamente e o cálculo do saldo do cotista<br>
                    é feito multiplicando o número de cotas adquiridas pelo valor da cota no dia.<br>
                    O patrimônio de um Fundo de Investimento é a soma de todos os recursos aplicados<br>
                    por seus diferentes investidores.</p>
                <a href="#">(Ver informações)</a>
            </section>
            <section class="text-center mt-5" id="fundo-investimentos-dados">
                <div class="mb-5">
                    <h1 class="mb-3">Taxas</h1>
                    <h2>TAXA DE ADMINISTRAÇÃO</h2>
                    <p class="fw-bold">Percentual sobre patrimônio do Fundo, pago anualmente pelos cotistas, referente<br>
                        à prestaçãode serviço do gestor, do administrador e das demais instituições<br>
                        presentes na operacionalização do dia a dia. Pode variar de instituição para instituição<br>
                        e de produto para produto. Para saber qual a taxa do fundo, consulte o prospecto,<br>
                        que pode ser encontrado no site do próprio distribuidor.<br>
                        Para Fundos que podem comprar cotas de outros fundos, existe a taxa máxima<br>
                        de administração. Isso porque, ao se investir em outro fundo, o fundo inicial<br>
                        também estará pagando taxa de administração. Assim, o cliente final deve ter ciência<br>
                        de qual seria a taxa de administração máxima, que pode ser cobrada pelo fundo onde<br>
                        é feita aplicação.</p>
                </div>
                <div class="mb-5">
                    <h2>TAXA DE SAÍDA</h2>
                    <p class="fw-bold">Taxa paga no momento do resgate, sobre o montante total resgatado, caso o<br>
                        cotista queira vender suas cotas com um prazo de liquidação e cotização inferior<br>
                        ao prazo de resgate padrão do fundo. A taxa de saída estará prevista na lâmina<br>
                        e no regulamento de cada fundo, se for aplicável.
                    </p>
                </div>
                <div class="mb-5">
                    <h2>TAXA DE PERFORMANCE</h2>
                    <p class="fw-bold">Taxa cobrada do cotista semestralmente (desde que prevista em seu regulamento)<br>
                        se a rentabilidade do Fundo superar a de um indicador de referência (benchmark).<br>
                        Tem o objetivo de remunerar uma boa gestão.<br>
                        A taxa de performance é cobrada do cotista somente quando a rentabilidade do<br>
                        Fundo superar a de seu indicador de referência (benchmark). Esta cobrança é realizada<br>
                        apenas sobre a rentabilidade que ultrapassar o benchmark, e se a rentabilidade<br>
                        for positiva. Caso a performance do Fundo seja negativa, não haverá<br>
                        cobrança da taxa de performance, mesmo se exceder o benchmark.
                    </p>
                </div>
                <div class="mb-5">
                    <p class="fw-bold">Exemplo:</p>
                    <p class="fw-bold">Taxa paga no momento do resgate, sobre o montante total resgatado, caso o<br>
                        cotista queira vender suas cotas com um prazo de liquidação e cotização inferior<br>
                        ao prazo de resgate padrão do fundo. A taxa de saída estará prevista na lâmina<br>
                        e no regulamento de cada fundo, se for aplicável.
                    </p>
                    <div>
                        <p class="fw-bold">• Rendimento do Fundo no ano: 15</p>
                        <p class="fw-bold">• Variação do CDI no ano: 10%</p>
                        <p class="fw-bold">• Excedente que incidirá a performance: 5%</p>
                        <p class="fw-bold">• Taxa de performance ou remuneração "extra" que será paga: 1% Tributação.</p>
                    </div>
                </div>
                <div class="mb-5">
                    <h2>CLASSIFICAÇÃO PARA EFEITOS DE IR</h2>
                    <p class="fw-bold">Segundo determinação da Secretaria da Receita Federal, os Fundos de Investimento<br>
                        são classificados em três categorias para efeitos de Imposto de Renda, e a incidência<br>
                        do imposto dependerá do período em que cada aplicação permanecer no Fundo:
                    </p>
                </div>
                <div class="mb-5">
                    <h2>FUNDOS DE AÇÕES</h2>
                    <div class="d-flex justify-content-center">
                        <p class="fw-bold me-5">Prazo de Aplicação</p>
                        <p class="fw-bold">Alíquota de IR</p>
                    </div>
                    <div class="linha"></div>
                    <div class="d-flex justify-content-center">
                        <p class="fw-bold me-5">Independente do prazo<br> de aplicação</p>
                        <p class="fw-bold">15%</p>
                    </div>
                </div>
                <div class="mb-5">
                    <p class="fw-bold">
                        Esses fundos contam com alíquota única de IR na fonte, seja qual for o prazo<br>
                        em que o investidor permanecer com os recursos investidos. O imposto será cobrado<br>
                        sobre o rendimento bruto do Fundo, no momento do resgate.
                    </p>
                </div>
                <div class="mb-5">
                    <h2>FUNDOS DE TRIBUTAÇÃO DE CURTO PRAZO</h2>
                    <div class="d-flex justify-content-center">
                        <p class="fw-bold me-5">Prazo de Aplicação</p>
                        <p class="fw-bold">Alíquota de IR</p>
                    </div>
                    <div class="linha"></div>
                    <div class="d-flex justify-content-center">
                        <p class="fw-bold me-5">Em até 180 dias</p>
                        <p class="fw-bold">22,5%</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="fw-bold me-5">Acima de 180 dias</p>
                        <p class="fw-bold">20%</p>
                    </div>
                </div>
                <div class="mb-5">
                    <p class="fw-bold">
                        Para fins de tributação, são considerados Fundos de Investimento de Curto Prazo<br>
                        aqueles cuja carteira de títulos tenha prazo médio igual ou inferior a 365 dias.<br>
                        Eles estão sujeitos à incidência de IR na fonte
                    </p>
                </div>
                <div class="mb-5">
                    <h2>FUNDOS DE TRIBUTAÇÃO DE CURTO PRAZO</h2>
                    <div class="d-flex justify-content-center">
                        <p class="fw-bold me-5">Prazo de Aplicação</p>
                        <p class="fw-bold">Alíquota de IR</p>
                    </div>
                    <div class="linha"></div>
                    <div class="d-flex justify-content-center">
                        <p class="fw-bold me-5">Em até 180 dias</p>
                        <p class="fw-bold">22,5%</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="fw-bold me-5">De 181 a 360 dias</p>
                        <p class="fw-bold">20%</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="fw-bold me-5">de 361 a 720 dias</p>
                        <p class="fw-bold">20%</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="fw-bold me-5">Acima de 180 dias</p>
                        <p class="fw-bold">20%</p>
                    </div>
                </div>
                <div class="mb-5">
                    <p class="fw-bold">
                        Para fins de tributação, são considerados Fundos de Investimento de Curto Prazo<br>
                        aqueles cuja carteira de títulos tenha prazo médio igual ou inferior a 365 dias.<br>
                        Eles estão sujeitos à incidência de IR na fonte.<br>
                        Neste tipo de fundo se o cotista resgatar cotas por um período superior<br>
                        a dois anos, ele pagará 15% de IR sobre o rendimento do Fundo no período.
                    </p>
                </div>
                <div class="mb-5">
                    <h2>COME COTAS</h2>
                    <p class="fw-bold">O Imposto de Renda dos Fundos de Investimento é recolhido no último dia útil<br>
                        dos meses de maio e novembro, em um sistema denominado "come-cotas". <br>
                        Para esse recolhimento será usada a menor alíquota de cada tipo de Fundo: 20%<br>
                        para Fundos de Curto Prazo e 15% para Fundos de Longo Prazo.
                    </p>
                </div>
                <div class="mb-5">
                    <p class="fw-bold">
                        Assim sendo, a cada 6 meses os Fundos, automaticamente, deduzem esse Imposto<br>
                        de Renda dos cotistas, considerando o rendimento obtido nesse período.<br>
                        A cobrança desse imposto é efetuada em quantidade de cotas, ou seja, calcula-se<br>
                        o número de cotas proporcional ao valor financeiro referente ao IR devido<br>
                        e diminui-seesse número do total de cotas que o cliente possui.
                    </p>
                </div>
                <div class="mb-5">
                    <p class="fw-bold">
                        Além disso, no momento do resgate da aplicação do investidor, se for o caso, será feito<br>
                        o recolhimento do IR, de acordo com a alíquota final devida, conforme o prazo<br>
                        de permanência desse investimento no fundo. Não há a incidência de “come-cotas”<br>
                        em Fundos de Ações.
                    </p>
                </div>
                <div class="mb-5">
                    <h2>IOF</h2>
                    <p class="fw-bold">O Imposto sobre Operações Financeiras (IOF) incide sobre o rendimento nos resgates<br>
                        feitos em um período inferior a 30 dias. O percentual do IOF pode variar de 96% a 0%,<br>
                        dependendo do número de dias decorridos da aplicação, incidindo sobre o rendimento<br>
                        do investimento
                    </p>
                </div>
                <img src="./media/QUADRO.png" alt="quadro">
            </section>
        </div>
        <div class="menu" id="acoes">
            <section class="text-center" id="acoes-sobre">
                <h2 class="fw-bold text-light mb-3">Ações</h2>
                <p class="text-light">É o tipo de aplicação financeira que reúne recursos de um conjunto de investidores<br>
                    (cotistas), permitindo assim investir em uma variada cesta de ativos,<br>
                    em diferentes mercados. Esta carteira pode englobar Títulos de Renda Fixa,<br>
                    Títulos Públicos, Títulos Cambiais, Derivativos, Commodities, Ações, entre outros.<br>
                    Quanto mais diversificado o fundo, menor é o risco.
                    Todo o dinheiro aplicado no Fundo de Investimento é convertido em cotas.<br>
                    Cada cotista possui um número de cotas proporcional ao valor total de seus investimentos.<br>
                    O valor da cota é atualizado diariamente e o cálculo do saldo do cotista<br>
                    é feito multiplicando o número de cotas adquiridas pelo valor da cota no dia.<br>
                    O patrimônio de um Fundo de Investimento é a soma de todos os recursos aplicados<br>
                    por seus diferentes investidores.</p>
                <a href="#">(Ver informações)</a>
            </section>
            <div class="d-flex justify-content-center">
                <button class="btn-lg fw-bold text-light">ABRA SUA CONTA GRATUITAMENTE</button>
            </div>
        </div>
        <div class="menu" id="fundo-imobiliario">
            <section class="text-center" id="fundo-imobiliario-sobre">
                <h2 class="fw-bold text-light mb-3">Fundos Imobiliários</h2>
                <p class="text-light">Os Fundos de Investimento Imobiliário (FII) são formados por grupos de investidores<br>
                    com o objetivo de aplicar recursos em todo o tipo de negócios de base imobiliária,<br>
                    seja no desenvolvimento de empreendimentos imobiliários ou em imóveis prontos,<br>
                    como edifícios comerciais, shopping centers e hospitais. Do patrimônio de um fundo<br>
                    podem participar um ou mais imóveis, parte de imóveis, direitos a eles relativos, entre outros.<br>
                    VOCÊ PODE SER SÓCIO DE GRANDES EMPREENDIMENTOS IMOBILIÁRIOS As construtoras desses<br>
                    empreendimentos vendem uma parte do imóvel em cotas e o dono de cada cota<br>
                    recebe um valor proporcional do aluguel. Existem cotas no mercado que valem
                    menos de R$20 e você pode comprar quantas estiverem à venda.</p>
                <a href="#">(Ver informações)</a>
            </section>
            <div class="d-flex justify-content-center">
                <button class="btn-lg fw-bold text-light">ABRA SUA CONTA GRATUITAMENTE</button>
            </div>
            <h2 class="text-center fw-bold mb-5">Qual a diferença entre aplicar em Fundos Imobiliários<br>
                e comprar um imóvel ?
            </h2>
            <div class="d-flex justify-content-center">
                <img src="<?php echo base_url('assets') ?>/media/QUADRO-EXPLICACAO.png" alt="" width="80%" height="auto">
            </div>
        </div>
        <div class="menu" id="coe">
            <section class="text-center" id="coe-sobre">
                <h2 class="fw-bold text-light mb-3">Operações COE</h2>
                <h3 class="fw-bold text-light">(Certificado de Operações Estruturadas)</h3>
                <p class="text-light">O COE é estruturado com base em cenários de ganhos e perdas, selecionados de<br>
                    acordo com o perfil de cada investidor. É a versão brasileira das Notas Estruturadas,<br>
                    muito populares na Europa e nos Estados Unidos.<br>
                    O COE é montado através da combinação de um título de crédito emitido por uma<br>
                    instituição financeira com estratégias em derivativos.<br>
                    Ao criar o COE, o emissor estrutura pacotes de cenários para o desempenho<br>
                    de um ativo ou indexador, que pode ser tanto nacional como internacional.<br>
                    O COE é sempre emitido por um banco e registrado na Cetip..</p>
            </section>
            <section class="text-center" id="coe-dados">
                <h2 class="mb-3">RISCOS</h2>
                <p class="fw-bold mb-4">
                    Risco de crédito do emissor: o recebimento dos pagamentos dos certificados está<br>
                    sujeito ao risco de crédito do emissor e não conta com a garantia do Fundo<br>
                    Garantidor de Créditos - FGC;
                </p>
                <p class="fw-bold">
                    Possibilidade de regaste antecipado sujeito à marcação a mercado e, portanto,<br>
                    sem garantia do principal investido.
                </p>
                <h2 class="mb-3">DOCUMENTAÇÃO</h2>
                <p class="fw-bold">
                    Termo de ciência de risco: assinado uma única vez pelo investidor, dando ciência<br>
                    dos riscos do COE;<br>
                    DIE (Documento de Informações Essenciais): documento com explicações<br>
                    sobre o funcionamento, fluxo de pagamentos e riscos do COE, que é entregue<br>
                    antes da realização de cada investimento ao investidor. Este, por sua vez,<br>
                    deve assinar o DIE para confirmar seu recebimento.
                </p>
                <h2 class="mb-3">IMPORTANTE</h2>
                <p class="fw-bold">
                    Apenas investidores com o perfil de investidor adequado a este produto poderão<br>
                    realizar aplicação. Para definição do perfil de investidor do cliente,<br>
                    é necessário o preenchimento do Formulário Perfil do Investidor.
                </p>
                <h2 class="mb-3">CARACTERÍSTICAS:</h2>
                <p class="fw-bold text-start">
                    *Vencimento do investimento em data pré-determinada;<br>
                    *Valor mínimo de aporte;<br>
                    *Indexador local ou internacional;<br>
                    *Cenário de ganhos e perdas no vencimento, conhecidos desde o início da operação;<br>
                    *Tributação de acordo com tabela regressiva de Renda Fixa;<br>
                    *Perfil do investidor deve ser compatível com o produto;<br>
                    *Fluxos de Pagamentos no Vencimento ou Periódicos.
                </p>
            </section>
        </div>
    </main>
    <footer>
        <div class="d-flex justify-content-center mt-5">
            <img src="<?php echo base_url('assets') ?>/media/logo.png" alt="logo" width="300px">
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
    <!--JS-->
    <script src="<?php echo base_url('assets') ?>/assets/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>