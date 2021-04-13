<div class='row pb-2'>
    <div class='col-md-12 '>
        <h1 class="text-center py-3" style="color: #6495ed;">Controle de Operações Day Trade</h1>
    </div>
</div>
<div class='row'>
    <div class='col-md-12'>
        <ul class="nav nav-tabs">
            <?php foreach ($meses_ano->result() as $ma) {
                //var_dump($ma->ma_mes);
                if ($ma->ma_mes == 0) {
                    continue;
                }
            ?>
                <li class="nav-item">
                    <a class="nav-link btn mx-1 mt-1 <?php echo ($ma->ma_mes == $mes && $ma->ma_ano == $ano) ? 'btn-info' : 'btn-primary'; ?> " href="<?php echo site_url("clientes/trades/{$id}/{$ma->ma_mes}/{$ma->ma_ano}") ?>">
                        <?php echo $this->util->meses()[$ma->ma_mes] ?> / <?php echo $ma->ma_ano ?>
                    </a>
                </li>
            <?php
            } ?>
            <li class="nav-item">
                <a class="nav-link btn mx-1 mt-1 <?php echo ($ma->ma_mes == $mes && $ma->ma_ano == $ano) ? 'btn-info' : 'btn-primary'; ?> " href="<?php echo site_url("clientes/trades/{$id}/0/{$ano}") ?>">
                    Resumo Anual / <?php echo $ano ?>
                </a>
            </li>
        </ul>

    </div>
</div>
<hr class="m-0 mb-2">

<?php
if (count($dados) != 0) {
    // $this->util->prints($dados);
?>
    <div class='row'>

        <div class='col-md-6'>
            <table class="table table-bordered table-hover table-striped table-sm text-center">
                <thead>
                    <tr>
                        <th>
                            CAPITAL INICIAL
                        </th>
                        <th>META DIÁRIA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $this->util->moedaBrasil($mes_ano->ma_capitalInicial); ?>
                        </td>
                        <td><?php echo $mes_ano->ma_metaDIaria . '%'; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>



    </div>

    <div class='row'>
        <div class='col-md-12'>
            <div class='table-responsive'>
                <table class="table table-bordered table-hover table-striped table-sm text-center">
                    <thead>
                        <tr class="th">
                            <th>DATA</th>
                            <th>TICKET</th>
                            <th>CORRETORA</th>
                            <th>OP. VENC.</th>
                            <th>OP. PERD.</th>
                            <th>Nº CONTRATOS</th>
                            <th>GANHO</th>
                            <th>PERDA</th>
                            <th>RESULTADO BRUTO</th>
                            <th>PERCENTUAL</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $resultado_bruto = 0;
                        $resultado_bruto_total = 0;
                        $percentual = 0;
                        $percentual_media = 0;
                        $percentual_media_quant = 0;
                        foreach ($dados['dados'] as $key => $dado) {
                            // $this->util->prints($dado);
                            $ganhos = $dado->tra_ganhos;
                            if ($ganhos > 0) {
                                $resultado_bruto = $dado->tra_ganhos - $dado->tra_perdas;
                                $percentual = round(($resultado_bruto * 100) /  $dado->tra_ganhos, 2);
                                $resultado_bruto_total += $resultado_bruto;
                            } else {
                                $resultado_bruto = $dado->tra_ganhos - $dado->tra_perdas;
                                $percentual = 0;
                                $resultado_bruto_total += $resultado_bruto;
                            }
                            $percentual_media += $percentual;
                            $percentual_media_quant++;
                        ?>
                            <tr>
                                <td><?php echo $this->util->data2($dado->tra_data); ?></td>
                                <td><?php echo $dado->tra_tickt; ?></td>
                                <td><?php echo $dado->cor_nome; ?></td>
                                <td><?php echo $dado->tra_quantOperacoesV; ?></td>
                                <td><?php echo $dado->tra_quantOperacoesP; ?></td>
                                <td><?php echo $dado->tra_quantContatos; ?></td>
                                <td><?php echo $dado->tra_ganhos; ?></td>
                                <td><?php echo $dado->tra_perdas; ?></td>
                                <td><?php echo $this->util->moedaBrasil($resultado_bruto); ?></td>
                                <td><?php echo $percentual; ?>%</td>

                            </tr>
                        <?php
                        } ?>
                        <tr>
                            <th colspan="11"></th>
                        </tr>
                        <tr>
                            <th colspan="3">TOTAIS</th>
                            <th><?php echo $dados['quantOperacoesV'] ?></th>
                            <th><?php echo $dados['quantOperacoesP'] ?></th>
                            <th><?php echo $dados['quantContatos'] ?></th>
                            <th><?php echo $this->util->moedaBrasil($dados['ganhos']) ?></th>
                            <th><?php echo $this->util->moedaBrasil($dados['perdas']) ?></th>
                            <th><?php echo $this->util->moedaBrasil($resultado_bruto_total) ?></th>
                            <th><?php echo $percentual_media_quant > 0 ? round($percentual_media / $percentual_media_quant, 2) : 0 ?>%</th>
                            <th></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <hr>
    <?php //if ($dadosCliente['tipo'] == 'adm') {
    ?>
    <div class='row pb-2'>
        <div class='table-responsive'>

            <table class="table table-condensed table-bordered table-striped table-hover text-center">
                <thead>
                    <tr>
                        <th>DATA</th>
                        <th>Nº OPER.</th>
                        <th>% ACERTO</th>
                        <th>SALDO BRUTO</th>
                        <th>TAXA CORRET.</th>
                        <th>TAXA REGISTRO</th>
                        <th>TAXA EMOLUM.</th>
                        <th>IMPOSTO ISS</th>
                        <th>TOTAL DESPESAS</th>
                        <th>% DESPESAS</th>
                        <th>LUCRO BRUTO</th>
                        <th>IRRPF FONTE</th>
                        <th>IR A RECOLHER</th>
                        <th>% IMPOSTO</th>
                        <th>LUCRO LÍQUIDO</th>
                        <th>% LUCRO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dados['base'] as $base) { ?>
                        <tr>
                            <td><?php echo $this->util->data2($base['data']) ?></td>
                            <td><?php echo $base['total_operacoes'] ?></td>
                            <td><?php echo $base['acerto_percent'] ?></td>
                            <td><?php echo $this->util->moedaBrasil($base['saldo_bruto']) ?></td>
                            <td><?php echo $this->util->moedaBrasil($base['taxa_corretagem']) ?></td>
                            <td><?php echo $this->util->moedaBrasil($base['taxa_registro']) ?></td>
                            <td><?php echo $this->util->moedaBrasil($base['taxa_emolumentos']) ?></td>
                            <td><?php echo $this->util->moedaBrasil($base['iss']) ?></td>
                            <td><?php echo $this->util->moedaBrasil($base['despesas_total']) ?></td>
                            <td><?php echo ($base['despesas_percent']) ?> %</td>
                            <td><?php echo $this->util->moedaBrasil($base['lucro_bruto']) ?></td>
                            <td><?php echo $this->util->moedaBrasil($base['irrpf']) ?></td>
                            <td><?php echo $this->util->moedaBrasil($base['ir_recolher']) ?></td>
                            <td><?php echo ($base['imposto']) ?> %</td>
                            <td><?php echo $this->util->moedaBrasil($base['lucro_liquido']) ?></td>
                            <td><?php echo ($base['lucro_percent']) ?> %</td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <th></th>
                    </tr>
                    <tr>
                        <th>TOTAIS</th>
                        <th><?php echo $dados['sum_total_operacoes'] ?></th>
                        <th><?php echo $dados['sum_acerto_percent'] ?>%</th>
                        <th><?php echo $this->util->moedaBrasil($dados['sum_saldo_bruto']) ?></th>
                        <th><?php echo $this->util->moedaBrasil($dados['sum_taxa_corretagem']) ?></th>
                        <th><?php echo $this->util->moedaBrasil($dados['sum_taxa_registro']) ?></th>
                        <th><?php echo $this->util->moedaBrasil($dados['sum_taxa_emolumentos']) ?></th>
                        <th><?php echo $this->util->moedaBrasil($dados['sum_iss']) ?></th>
                        <th><?php echo $this->util->moedaBrasil($dados['sum_despesas_total']) ?></th>
                        <th><?php echo ($dados['sum_despesas_percent']) ?>%</th>
                        <th><?php echo $this->util->moedaBrasil($dados['sum_lucro_bruto']) ?></th>
                        <th><?php echo $this->util->moedaBrasil($dados['sum_irrpf']) ?></th>
                        <th><?php echo $this->util->moedaBrasil($dados['sum_ir_recolher']) ?></th>
                        <th><?php echo ($dados['sum_imposto']) ?>%</th>
                        <th><?php echo $this->util->moedaBrasil($dados['sum_lucro_liquido']) ?></th>
                        <th><?php echo ($dados['sum_lucro_percent']) ?>%</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<?php //}
} else { ?>
    <div class='row'>
        <div class='col-md-12 text-center p-5'>

            <h2>Sem lançamentos no Período</h2>
        </div>
    </div>
<?php } ?>

<script>
    $('.clientes').addClass('active');
</script>
<style>
    .th {
        background: #7abaff;
    }
</style>