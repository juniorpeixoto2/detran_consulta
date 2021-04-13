<!--
    <style>
        .finalizar {
            display: none;
            width: 158px !important;
            height: 50px;
            position: fixed;
            background-color: green;
            bottom: 0;
            right: 0;
            color: #fff;
            font-size: 20px;
            cursor: pointer;
            line-height: 50px;
            text-align: center;
            margin: 5px;
            border: 1px solid #BFBFBF;
            box-shadow: 10px 10px 5px #aaaaaa;
        }
    </style>
    
    <div class="finalizar text-center align-items-center justify-content-center" onclick="selecionados()" data-toggle="modal" data-target="#modal_finalizar" style="display: none; z-index: 999;">
        Finalizar
    </div>




<div class="modal fade" id="modal_finalizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Finalize sua compra...</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Seus números:</p>
            </div>
            <div class="modal-footer">
                <?php //echo form_open(); 
                ?>
                <input type="hidden" name="numeros" value="" require='true' id="selecionados">
                <input type="hidden" name="rifa" value="<?php //echo $rifa->rif_id 
                                                        ?>" require='true'>
                <button type="button" class="btn btn-info waves-effect waves-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success waves-effect waves-light">Efetuar Pagamento</button>
                <?php //echo form_close() 
                ?>
            </div>
        </div>
    </div>
</div>

-->

<div class="bg-white numeros-escolhidos finalizar2">
    <div class="container">
        <div class="align-items-center justify-content-center row">
            <div class="col-12 col-md">
                <div class="d-block d-flex flex-wrap justify-content-start m-0 text-dark">

                    <div class="modal-body">
                    </div>

                </div>
            </div>
            <div class="col col-md-auto total"> </div>
            <div class="col col-md-auto text-right">
                <?php echo form_open(); ?>
                <input type="hidden" name="numeros" value="" require='true' id="selecionados">
                <input type="hidden" name="rifa" value="<?php echo $rifa->rif_id ?>" require='true'>
                <button type="submit" class="btn btn-success btn-lg waves-effect waves-light">Efetuar Pagamento</button>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>

<style>
    .numeros-escolhidos {
        position: fixed;

        width: 100%;
        left: 0;
        bottom: 0;
        margin-bottom: -200px;
        transition: margin 0.3s ease-in-out;
        z-index: 10;
        box-shadow: 0 0 40px 10px rgba(0, 0, 0, 0.15);
    }

    .modal,
    .numeros-escolhidos {
        color: #333;
    }

    .numeros-escolhidos.active {
        margin-bottom: 0;
    }

    .modal-body {
        padding: 5px;
    }
</style>



<section class="w3ls-bnrbtm py-" id="about">
    <div class="container py-xl-5 py-lg-3">
        <div class="title-section text-center mb-md-5 mb-4">
            <h3 class="w3ls-title mb-3"><span><?php echo ucfirst($rifa->rif_titulo) ?></span></h3>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center mt-lg-0 mt-4">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">

                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <?php foreach ($imagens->result() as $k => $value) {
                        ?>
                            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $k + 1 ?>"></li>
                        <?php } ?>
                    </ol>
                    <div class="carousel-inner">


                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo base_url('assets/img/' . $rifa->rif_imagem) ?>" alt="First slide" style="max-height: 650px;">
                        </div>
                        <?php foreach ($imagens->result() as $k => $value) {
                        ?>
                            <div class="carousel-item <?php echo $k == 0  ? '' : ''; ?> ">
                                <img class="d-block w-100" src="<?php echo base_url('assets/img/' . $value->ima_imagem) ?>" alt=" slide" style="max-height: 50px;">
                            </div>
                        <?php
                        }
                        ?>


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<?php if ($rifa->rif_youtube != '') { ?>
    <section class="w3ls-bnrbtm py-" id="about">
        <div class="container py-xl-5 py-lg-3">
            <div class="row">
                <div class="col-lg-12 text-center mt-lg-0 mt-4">
                    <?php $link = explode('v=', $rifa->rif_youtube); ?>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?php echo 'http://www.youtube.com/embed/' . $link[1] ?>" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<section class="w3ls-bnrbtm py-" id="about">
    <div class="container py-xl-5 py-lg-3">
        <div class="container">
            <ul class="nav nav-tabs mt-2 bg_nav" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" href="#descricao" role="tab" data-toggle="tab" aria-selected="false"> Regulamento/Descrição</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#references" role="tab" data-toggle="tab">Informações do item</a>
                </li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade" id="descricao">
                    <div class="bg_custom_info">
                        <div class="card card-body bg_custom_desc">
                            <?php echo $rifa->rif_regulamento ?>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="references">
                    <div class="card card-body mb-1">
                        <ul class="list-unstyled d-flex flex-wrap justify-content-between py-2">
                            <?php echo $rifa->rif_informacoes ?>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="contato">
                    <div class="card card-body">
                    </div>
                </div>
            </div>
            <?php
            $quant = $rifa->rif_quantidade;
            $totais = $this->rifasmodel->getTotais($rifa->rif_id);
            ?>
            <div class="row d-flex justify-content-center m-2 text-center">
                <div class="col-md-2  p-2 bg-success primary font-weight-bold text-white">
                    1 NÚMERO: <?php echo $this->util->moedaBrasil($rifa->rif_valor) ?>
                </div>
            </div>
            <div class="row d-flex justify-content-center text-center text-white font-weight-bold ">
                <div class="col-md-3  p-2  border" style="color: black;">
                    LIVRES:
                    <br>
                    <?php echo $totais['restante']; ?>
                </div>
                <div class="col-md-3 p-2 text-center border" style="background: #f9a443; ">
                    RESERVADOS:
                    <br>
                    <?php echo $totais['reservados']; ?>
                </div>
                <div class="col-md-3 bg-success text-center d-flex flex-column justify-content-center border" style="">
                    PAGOS:
                    <br>
                    <?php echo $totais['vendidos']; ?>
                </div>
            </div>
            <hr>
            <p class="text-center" style="padding: 20px;">
                Faça
                <a href="<?php echo site_url('site/login') ?>">
                    Login
                </a>
                ou
                <a href="<?php echo site_url('site/cadastro') ?>">
                    Cadastre-se
                </a>
            </p>
            <div class="row">
                <?php
                for ($i = 0; $i <  $quant; $i++) {

                    $toltip = '';

                    if (key_exists($i, $vendas)) {
                        if ($vendas[$i]['status'] == 'pendente') {
                            $status_num = 'reservado'; //reservado pago
                            $toltip = "data-toggle='tooltip' data-placement='top' title='Nº: {$vendas[$i]['numero']},   Pago por: {$vendas[$i]['nome']}'";
                        } else if ($vendas[$i]['status'] == 'pago') {
                            $status_num = 'pago'; //reservado pago
                            $toltip = "data-toggle='tooltip' data-placement='top' title='Nº: {$vendas[$i]['numero']},   Pago por: {$vendas[$i]['nome']}'";
                        } else {
                            $status_num = 'disponivel disponiveis'; //reservado pago
                        }
                    } else {
                        $status_num = 'disponivel disponiveis'; //reservado pago
                    }

                ?>
                    <div class="col div_bolas bolas">
                        <div class="balao d-none text-center" id="balao_0"></div>
                        <div class="ball <?php echo $status_num ?>" <?php echo $status_num == 'disponivel disponiveis' ? 'onclick="selecionar(this)" ' : '' ?> value="<?php echo str_pad($i, 3, 0, STR_PAD_LEFT) ?>" <?php echo $toltip ?>>
                            <?php echo str_pad($i, 3, 0, STR_PAD_LEFT) ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<script>
    qnt = 0;

    function selecionar(obj) {
        val = parseInt($(obj).attr('value'));

        if ($(obj).hasClass('disponiveis')) {

            $(obj).removeClass('disponiveis');
            $(obj).addClass('selecionados');
            qnt++;

        } else {
            $(obj).removeClass('selecionados');
            $(obj).addClass('disponiveis');
            qnt--;
        }


        selecionados();

        if (qnt > 0) {
            $('.finalizar').show();
            $('.finalizar2').addClass('active');
        } else {
            $('.finalizar').hide();
            $('.finalizar2').removeClass('active');
        }
    }

    function selecionados() {
        $('.modal-body').html('');
        html = '';
        values = [];
        html = ' <div class="row flex-wrap bolas">';
        $('.bolas').find('.selecionados').each(function() {
            html += ` <div class="col-1 mr-3  ">
                    <div class="ball selecionados">
                        ${$(this).attr('value')}
                    </div>
                    
                </div>`;
            values.push($(this).attr('value'));
        });
        $('#selecionados').val(values);

        $('.modal-body').html(html);

        let valor = parseFloat(<?php echo $rifa->rif_valor ?>) * (values.length);
        total = `</div><div class=""> Total: ${valor.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})} </div>`;
        $('.total').html(total);
    }

    function efetuarPagamento() {

        //$('.values_balls').val(values);
        //$('#values_form').submit();

    }

    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>