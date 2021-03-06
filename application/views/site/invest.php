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
                Na Realize voc?? vai encontrar tudo o que precisa para realizar seus<br>
                investimentos de forma ??gil, f??cil e segura
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
                            <img src="<?php echo base_url('assets') ?>/media/A????ES.png" alt="">
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
            <button class="btn-lg fw-bold text-light">ABRA CONTA GR??TIS</button>
        </section>
        <!--P??gina Renda Fixa-->
        <div class="menu" id="renda-fixa">
            <section class="text-center" id="sobre-renda-fixa">
                <h2 class="text-light fw-bold">O que ?? Renda Fixa ?</h2>
                <p class="fw-light text-light">Renda fixa ?? um termo que se refere a qualquer tipo de investimento que possui regras<br>
                    de remunera????odefinidas no momento da aplica????o no t??tulo. Essas regras estipulamo<br> prazo e a forma que a remunera????o ser?? calculada e paga ao investidor.<br>
                    Quando voc?? compra um t??tulo de Renda Fixa, voc?? est?? emprestando dinheiro<br>
                    ao emissor do papel, que pode ser um banco, uma empresa ou mesmo o Governo.<br>
                    Em troca, recebe uma remunera????o por um determinado prazo, na forma de juros<br>
                    e/ou corre????o monet??ria, podendo receber, ainda, parcelas chamadas amortiza????es.</p>
            </section>
            <div class="text-center btn-2">
                <button class="btn-lg fw-bold text-light">ABRA SUA CONTA GRATUITAMENTE</button>
            </div>
            <div class="text-center">
                <a class="text-center fw-bold tipos-a" href="#">Tipos de renda fixa</a>
            </div>
            <section id="tipos">
                <div class="box2 text-center">
                    <h3 class="fw-bold">T??tulos P??blicos</h3>
                    <p class="fw-light">LTN,NTN,B,LFT</p>
                </div>
                <div class="box2 text-center">
                    <h3 class="fw-bold">LCI E LCA</h3>
                    <p class="fw-light">Letra de Cr??dito Imobili??rio e Letra de Cr??dito Agr??cola</p>
                </div>
                <div class="box2 text-center">
                    <h3 class="fw-bold">CRI E CRA</h3>
                    <p class="fw-light">
                        Certificado de Receb??vel Imobili??rio e Certificado de Receb??vel Agr??cola</p>
                </div>
                <div class="box2 text-center">
                    <h3 class="fw-bold">CDB</h3>
                    <p class="fw-light">Certificado de Dep??sito Banc??rio</p>
                </div>
                <div class="box2 text-center">
                    <h3 class="fw-bold">DEB??NTURES</h3>
                    <p class="fw-light">Cr??dito privado de empresas</p>
                </div>
                <div class="box2 text-center">
                    <h3 class="fw-bold">LC</h3>
                    <p class="fw-light">Letra de C??mbio</p>
                </div>
            </section>
        </div>
        <!--P??gina Fundos de investimento-->
        <div class="menu" id="fundo-investimentos">
            <section class="text-center" id="fundo-investimentos-sobre">
                <h2 class="fw-bold text-light mb-3">Fundo de Investimentos:</h2>
                <p class="text-light">?? o tipo de aplica????o financeira que re??ne recursos de um conjunto de investidores<br>
                    (cotistas), permitindo assim investir em uma variada cesta de ativos,<br>
                    em diferentes mercados. Esta carteira pode englobar T??tulos de Renda Fixa,<br>
                    T??tulos P??blicos, T??tulos Cambiais, Derivativos, Commodities, A????es, entre outros.<br>
                    Quanto mais diversificado o fundo, menor ?? o risco.
                    Todo o dinheiro aplicado no Fundo de Investimento ?? convertido em cotas.<br>
                    Cada cotista possui um n??mero de cotas proporcional ao valor total de seus investimentos.<br>
                    O valor da cota ?? atualizado diariamente e o c??lculo do saldo do cotista<br>
                    ?? feito multiplicando o n??mero de cotas adquiridas pelo valor da cota no dia.<br>
                    O patrim??nio de um Fundo de Investimento ?? a soma de todos os recursos aplicados<br>
                    por seus diferentes investidores.</p>
                <a href="#">(Ver informa????es)</a>
            </section>
            <section class="text-center mt-5" id="fundo-investimentos-dados">
                <div class="mb-5">
                    <h1 class="mb-3">Taxas</h1>
                    <h2>TAXA DE ADMINISTRA????O</h2>
                    <p class="fw-bold">Percentual sobre patrim??nio do Fundo, pago anualmente pelos cotistas, referente<br>
                        ?? presta????ode servi??o do gestor, do administrador e das demais institui????es<br>
                        presentes na operacionaliza????o do dia a dia. Pode variar de institui????o para institui????o<br>
                        e de produto para produto. Para saber qual a taxa do fundo, consulte o prospecto,<br>
                        que pode ser encontrado no site do pr??prio distribuidor.<br>
                        Para Fundos que podem comprar cotas de outros fundos, existe a taxa m??xima<br>
                        de administra????o. Isso porque, ao se investir em outro fundo, o fundo inicial<br>
                        tamb??m estar?? pagando taxa de administra????o. Assim, o cliente final deve ter ci??ncia<br>
                        de qual seria a taxa de administra????o m??xima, que pode ser cobrada pelo fundo onde<br>
                        ?? feita aplica????o.</p>
                </div>
                <div class="mb-5">
                    <h2>TAXA DE SA??DA</h2>
                    <p class="fw-bold">Taxa paga no momento do resgate, sobre o montante total resgatado, caso o<br>
                        cotista queira vender suas cotas com um prazo de liquida????o e cotiza????o inferior<br>
                        ao prazo de resgate padr??o do fundo. A taxa de sa??da estar?? prevista na l??mina<br>
                        e no regulamento de cada fundo, se for aplic??vel.
                    </p>
                </div>
                <div class="mb-5">
                    <h2>TAXA DE PERFORMANCE</h2>
                    <p class="fw-bold">Taxa cobrada do cotista semestralmente (desde que prevista em seu regulamento)<br>
                        se a rentabilidade do Fundo superar a de um indicador de refer??ncia (benchmark).<br>
                        Tem o objetivo de remunerar uma boa gest??o.<br>
                        A taxa de performance ?? cobrada do cotista somente quando a rentabilidade do<br>
                        Fundo superar a de seu indicador de refer??ncia (benchmark). Esta cobran??a ?? realizada<br>
                        apenas sobre a rentabilidade que ultrapassar o benchmark, e se a rentabilidade<br>
                        for positiva. Caso a performance do Fundo seja negativa, n??o haver??<br>
                        cobran??a da taxa de performance, mesmo se exceder o benchmark.
                    </p>
                </div>
                <div class="mb-5">
                    <p class="fw-bold">Exemplo:</p>
                    <p class="fw-bold">Taxa paga no momento do resgate, sobre o montante total resgatado, caso o<br>
                        cotista queira vender suas cotas com um prazo de liquida????o e cotiza????o inferior<br>
                        ao prazo de resgate padr??o do fundo. A taxa de sa??da estar?? prevista na l??mina<br>
                        e no regulamento de cada fundo, se for aplic??vel.
                    </p>
                    <div>
                        <p class="fw-bold">??? Rendimento do Fundo no ano: 15</p>
                        <p class="fw-bold">??? Varia????o do CDI no ano: 10%</p>
                        <p class="fw-bold">??? Excedente que incidir?? a performance: 5%</p>
                        <p class="fw-bold">??? Taxa de performance ou remunera????o "extra" que ser?? paga: 1% Tributa????o.</p>
                    </div>
                </div>
                <div class="mb-5">
                    <h2>CLASSIFICA????O PARA EFEITOS DE IR</h2>
                    <p class="fw-bold">Segundo determina????o da Secretaria da Receita Federal, os Fundos de Investimento<br>
                        s??o classificados em tr??s categorias para efeitos de Imposto de Renda, e a incid??ncia<br>
                        do imposto depender?? do per??odo em que cada aplica????o permanecer no Fundo:
                    </p>
                </div>
                <div class="mb-5">
                    <h2>FUNDOS DE A????ES</h2>
                    <div class="d-flex justify-content-center">
                        <p class="fw-bold me-5">Prazo de Aplica????o</p>
                        <p class="fw-bold">Al??quota de IR</p>
                    </div>
                    <div class="linha"></div>
                    <div class="d-flex justify-content-center">
                        <p class="fw-bold me-5">Independente do prazo<br> de aplica????o</p>
                        <p class="fw-bold">15%</p>
                    </div>
                </div>
                <div class="mb-5">
                    <p class="fw-bold">
                        Esses fundos contam com al??quota ??nica de IR na fonte, seja qual for o prazo<br>
                        em que o investidor permanecer com os recursos investidos. O imposto ser?? cobrado<br>
                        sobre o rendimento bruto do Fundo, no momento do resgate.
                    </p>
                </div>
                <div class="mb-5">
                    <h2>FUNDOS DE TRIBUTA????O DE CURTO PRAZO</h2>
                    <div class="d-flex justify-content-center">
                        <p class="fw-bold me-5">Prazo de Aplica????o</p>
                        <p class="fw-bold">Al??quota de IR</p>
                    </div>
                    <div class="linha"></div>
                    <div class="d-flex justify-content-center">
                        <p class="fw-bold me-5">Em at?? 180 dias</p>
                        <p class="fw-bold">22,5%</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="fw-bold me-5">Acima de 180 dias</p>
                        <p class="fw-bold">20%</p>
                    </div>
                </div>
                <div class="mb-5">
                    <p class="fw-bold">
                        Para fins de tributa????o, s??o considerados Fundos de Investimento de Curto Prazo<br>
                        aqueles cuja carteira de t??tulos tenha prazo m??dio igual ou inferior a 365 dias.<br>
                        Eles est??o sujeitos ?? incid??ncia de IR na fonte
                    </p>
                </div>
                <div class="mb-5">
                    <h2>FUNDOS DE TRIBUTA????O DE CURTO PRAZO</h2>
                    <div class="d-flex justify-content-center">
                        <p class="fw-bold me-5">Prazo de Aplica????o</p>
                        <p class="fw-bold">Al??quota de IR</p>
                    </div>
                    <div class="linha"></div>
                    <div class="d-flex justify-content-center">
                        <p class="fw-bold me-5">Em at?? 180 dias</p>
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
                        Para fins de tributa????o, s??o considerados Fundos de Investimento de Curto Prazo<br>
                        aqueles cuja carteira de t??tulos tenha prazo m??dio igual ou inferior a 365 dias.<br>
                        Eles est??o sujeitos ?? incid??ncia de IR na fonte.<br>
                        Neste tipo de fundo se o cotista resgatar cotas por um per??odo superior<br>
                        a dois anos, ele pagar?? 15% de IR sobre o rendimento do Fundo no per??odo.
                    </p>
                </div>
                <div class="mb-5">
                    <h2>COME COTAS</h2>
                    <p class="fw-bold">O Imposto de Renda dos Fundos de Investimento ?? recolhido no ??ltimo dia ??til<br>
                        dos meses de maio e novembro, em um sistema denominado "come-cotas". <br>
                        Para esse recolhimento ser?? usada a menor al??quota de cada tipo de Fundo: 20%<br>
                        para Fundos de Curto Prazo e 15% para Fundos de Longo Prazo.
                    </p>
                </div>
                <div class="mb-5">
                    <p class="fw-bold">
                        Assim sendo, a cada 6 meses os Fundos, automaticamente, deduzem esse Imposto<br>
                        de Renda dos cotistas, considerando o rendimento obtido nesse per??odo.<br>
                        A cobran??a desse imposto ?? efetuada em quantidade de cotas, ou seja, calcula-se<br>
                        o n??mero de cotas proporcional ao valor financeiro referente ao IR devido<br>
                        e diminui-seesse n??mero do total de cotas que o cliente possui.
                    </p>
                </div>
                <div class="mb-5">
                    <p class="fw-bold">
                        Al??m disso, no momento do resgate da aplica????o do investidor, se for o caso, ser?? feito<br>
                        o recolhimento do IR, de acordo com a al??quota final devida, conforme o prazo<br>
                        de perman??ncia desse investimento no fundo. N??o h?? a incid??ncia de ???come-cotas???<br>
                        em Fundos de A????es.
                    </p>
                </div>
                <div class="mb-5">
                    <h2>IOF</h2>
                    <p class="fw-bold">O Imposto sobre Opera????es Financeiras (IOF) incide sobre o rendimento nos resgates<br>
                        feitos em um per??odo inferior a 30 dias. O percentual do IOF pode variar de 96% a 0%,<br>
                        dependendo do n??mero de dias decorridos da aplica????o, incidindo sobre o rendimento<br>
                        do investimento
                    </p>
                </div>
                <img src="./media/QUADRO.png" alt="quadro">
            </section>
        </div>
        <div class="menu" id="acoes">
            <section class="text-center" id="acoes-sobre">
                <h2 class="fw-bold text-light mb-3">A????es</h2>
                <p class="text-light">?? o tipo de aplica????o financeira que re??ne recursos de um conjunto de investidores<br>
                    (cotistas), permitindo assim investir em uma variada cesta de ativos,<br>
                    em diferentes mercados. Esta carteira pode englobar T??tulos de Renda Fixa,<br>
                    T??tulos P??blicos, T??tulos Cambiais, Derivativos, Commodities, A????es, entre outros.<br>
                    Quanto mais diversificado o fundo, menor ?? o risco.
                    Todo o dinheiro aplicado no Fundo de Investimento ?? convertido em cotas.<br>
                    Cada cotista possui um n??mero de cotas proporcional ao valor total de seus investimentos.<br>
                    O valor da cota ?? atualizado diariamente e o c??lculo do saldo do cotista<br>
                    ?? feito multiplicando o n??mero de cotas adquiridas pelo valor da cota no dia.<br>
                    O patrim??nio de um Fundo de Investimento ?? a soma de todos os recursos aplicados<br>
                    por seus diferentes investidores.</p>
                <a href="#">(Ver informa????es)</a>
            </section>
            <div class="d-flex justify-content-center">
                <button class="btn-lg fw-bold text-light">ABRA SUA CONTA GRATUITAMENTE</button>
            </div>
        </div>
        <div class="menu" id="fundo-imobiliario">
            <section class="text-center" id="fundo-imobiliario-sobre">
                <h2 class="fw-bold text-light mb-3">Fundos Imobili??rios</h2>
                <p class="text-light">Os Fundos de Investimento Imobili??rio (FII) s??o formados por grupos de investidores<br>
                    com o objetivo de aplicar recursos em todo o tipo de neg??cios de base imobili??ria,<br>
                    seja no desenvolvimento de empreendimentos imobili??rios ou em im??veis prontos,<br>
                    como edif??cios comerciais, shopping centers e hospitais. Do patrim??nio de um fundo<br>
                    podem participar um ou mais im??veis, parte de im??veis, direitos a eles relativos, entre outros.<br>
                    VOC?? PODE SER S??CIO DE GRANDES EMPREENDIMENTOS IMOBILI??RIOS As construtoras desses<br>
                    empreendimentos vendem uma parte do im??vel em cotas e o dono de cada cota<br>
                    recebe um valor proporcional do aluguel. Existem cotas no mercado que valem
                    menos de R$20 e voc?? pode comprar quantas estiverem ?? venda.</p>
                <a href="#">(Ver informa????es)</a>
            </section>
            <div class="d-flex justify-content-center">
                <button class="btn-lg fw-bold text-light">ABRA SUA CONTA GRATUITAMENTE</button>
            </div>
            <h2 class="text-center fw-bold mb-5">Qual a diferen??a entre aplicar em Fundos Imobili??rios<br>
                e comprar um im??vel ?
            </h2>
            <div class="d-flex justify-content-center">
                <img src="<?php echo base_url('assets') ?>/media/QUADRO-EXPLICACAO.png" alt="" width="80%" height="auto">
            </div>
        </div>
        <div class="menu" id="coe">
            <section class="text-center" id="coe-sobre">
                <h2 class="fw-bold text-light mb-3">Opera????es COE</h2>
                <h3 class="fw-bold text-light">(Certificado de Opera????es Estruturadas)</h3>
                <p class="text-light">O COE ?? estruturado com base em cen??rios de ganhos e perdas, selecionados de<br>
                    acordo com o perfil de cada investidor. ?? a vers??o brasileira das Notas Estruturadas,<br>
                    muito populares na Europa e nos Estados Unidos.<br>
                    O COE ?? montado atrav??s da combina????o de um t??tulo de cr??dito emitido por uma<br>
                    institui????o financeira com estrat??gias em derivativos.<br>
                    Ao criar o COE, o emissor estrutura pacotes de cen??rios para o desempenho<br>
                    de um ativo ou indexador, que pode ser tanto nacional como internacional.<br>
                    O COE ?? sempre emitido por um banco e registrado na Cetip..</p>
            </section>
            <section class="text-center" id="coe-dados">
                <h2 class="mb-3">RISCOS</h2>
                <p class="fw-bold mb-4">
                    Risco de cr??dito do emissor: o recebimento dos pagamentos dos certificados est??<br>
                    sujeito ao risco de cr??dito do emissor e n??o conta com a garantia do Fundo<br>
                    Garantidor de Cr??ditos - FGC;
                </p>
                <p class="fw-bold">
                    Possibilidade de regaste antecipado sujeito ?? marca????o a mercado e, portanto,<br>
                    sem garantia do principal investido.
                </p>
                <h2 class="mb-3">DOCUMENTA????O</h2>
                <p class="fw-bold">
                    Termo de ci??ncia de risco: assinado uma ??nica vez pelo investidor, dando ci??ncia<br>
                    dos riscos do COE;<br>
                    DIE (Documento de Informa????es Essenciais): documento com explica????es<br>
                    sobre o funcionamento, fluxo de pagamentos e riscos do COE, que ?? entregue<br>
                    antes da realiza????o de cada investimento ao investidor. Este, por sua vez,<br>
                    deve assinar o DIE para confirmar seu recebimento.
                </p>
                <h2 class="mb-3">IMPORTANTE</h2>
                <p class="fw-bold">
                    Apenas investidores com o perfil de investidor adequado a este produto poder??o<br>
                    realizar aplica????o. Para defini????o do perfil de investidor do cliente,<br>
                    ?? necess??rio o preenchimento do Formul??rio Perfil do Investidor.
                </p>
                <h2 class="mb-3">CARACTER??STICAS:</h2>
                <p class="fw-bold text-start">
                    *Vencimento do investimento em data pr??-determinada;<br>
                    *Valor m??nimo de aporte;<br>
                    *Indexador local ou internacional;<br>
                    *Cen??rio de ganhos e perdas no vencimento, conhecidos desde o in??cio da opera????o;<br>
                    *Tributa????o de acordo com tabela regressiva de Renda Fixa;<br>
                    *Perfil do investidor deve ser compat??vel com o produto;<br>
                    *Fluxos de Pagamentos no Vencimento ou Peri??dicos.
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
                        <a class="mb-2" href="<?php echo site_url('site/invest') ?>">A????es</a>
                        <a class="mb-2" href="<?php echo site_url('site/invest') ?>">Fundos Investimentos</a>
                        <a class="mb-2" href="<?php echo site_url('site/invest') ?>">Fundos Imobili??rios</a>
                        <a class="mb-2" href="<?php echo site_url('site/invest') ?>">Opera????es COE</a>
                    </div>
                    <div class="col-md-3">
                        <h2 class="mb-3">Opere na Bolsa</h2>
                        <a class="mb-2" href="<?php echo site_url('site/bolsa') ?>">O que ?? a Bolsa</a>
                        <a class="mb-2" href="<?php echo site_url('site/bolsa') ?>">Abrir conta Corretora</a>
                        <a class="mb-2" href="<?php echo site_url('site/bolsa') ?>">Montar uma Carteira</a>
                    </div>
                    <div class="col-md-3">
                        <h2 class="mb-3">Cursos</h2>
                        <a class="mb-2" href="<?php echo site_url('site/cursos') ?>">Investir em A????es</a>
                        <a class="mb-2" href="<?php echo site_url('site/cursos') ?>">Trade na Pr??tica</a>
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