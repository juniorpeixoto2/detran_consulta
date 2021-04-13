<div class="row ">
    <div class="col-md-4">
        <div class="card l-bg-green-dark">
            <div class="card-statistic-3">
                <div class="card-icon card-icon-large"><i class="fa fa-dollar"></i></div>
                <div class="card-content">
                    <h4 class="card-title">Saldo Disponível</h4>
                    <span class="valor">
                        <?php echo $this->util->moedaBrasil($saldos['saldo_disponivel']); ?>
                    </span>
                    <div class="progress mt-1 mb-1" data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card l-bg-purple-dark">
            <div class="card-statistic-3">
                <div class="card-icon card-icon-large"><i class="fa fa-dollar"></i></div>
                <div class="card-content">
                    <h4 class="card-title">Saldo A Liberar</h4>
                    <span class="valor">
                        <?php echo $this->util->moedaBrasil($saldos['saldo_pendente']); ?>
                    </span>
                    <div class="progress mt-1 mb-1" data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card l-bg-purple-dark">
            <div class="card-statistic-3">
                <div class="card-icon card-icon-large"><i class="fa fa-handshake-o"></i></div>
                <div class="card-content">
                    <h4 class="card-title">Ganhos de Indicação</h4>
                    <span class="valor">
                        <?php echo $this->util->moedaBrasil($saldos['indicacao']); ?>
                    </span>
                    <div class="progress mt-1 mb-1" data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row ">
    <div class="col-md-12">
        <div class="table-responsive">
            <h4>Extrato Detalhado</h4>

            <table class='table table-s table-bordered table-striped table-condensed table-hover'>
                <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Valor</th>
                        <th>Data</th>
                        <th>Observação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dados->result() as $dado) {
                    ?>
                        <tr>
                            <td><?php echo ucfirst($dado->fin_tipo); ?></td>
                            <td><?php echo $this->util->moedaBrasil($dado->fin_valor); ?></td>
                            <td><?php echo $this->util->data3($dado->fin_dataCadastro); ?></td>
                            <td><?php echo ucfirst($dado->fin_dados); ?></td>
                            <td> </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $('.extrato').addClass('active');
</script>