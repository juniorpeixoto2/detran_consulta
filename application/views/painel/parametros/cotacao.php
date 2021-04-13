<div class='row'>
    <div class='col-md-6'>
        <h3>Cadastro de <?php echo ucfirst($titulo); ?></h3>
    </div>
    <div class='col-md-6 text-right'>
        <a class='btn btn-primary' href='<?php echo site_url('parametros') ?>'>
            Voltar
        </a>
    </div>
</div>
<hr>
<div class='row'>
    <div class='col-md-12'>
        <div class=form-horizontal>
            <div>
                <div style='background: red; color: white;'>
                    <?php echo validation_errors(); ?>
                </div>
            </div>
            <?php echo form_open() ?>

            <strong>
                Configuraçãos do E-mail
            </strong>
            <hr>



            <div class="form-row">
                <div class="col-md-3">
                    <label for="nome">Dolar</label>
                    <input type="text" name="dolar" required="true" class="form-control moeda" value="<?php echo isset($cotacoes['dolar']) ? $cotacoes['dolar'] : ''; ?>">
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col-md-3">
                    <label for="nome">Bitcoin</label>
                    <input type="text" name="bitcoin" required="true" class="form-control moeda" value="<?php echo isset($cotacoes['bitcoin']) ? $cotacoes['bitcoin'] : ''; ?>">
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col-md-3">
                    <label for="nome">Taxa de Saque(%)</label>
                    <input type="text" name="par_taxaSaque" required="true" class="form-control moeda" value="<?php echo $dados->par_taxaSaque; ?>">
                </div>
            </div>

            <div class='form-row'>
                <div class='col-md-3'>
                    <label>&nbsp;</label>
                    <input type=submit  value=Salvar class='btn btn-primary form-control'>
                </div>
            </div>
            <br>
            <?php
            echo form_close();
            ?>
        </div>
    </div>
</div>
<script>
    $('.menu_parametros').addClass('active-menu');
</script>


<script src="<?php echo base_url('assets'); ?>/js/jquery.mask.js"></script>
<script>
    $('.moeda').mask("#.##0,00", {reverse: true});
    $('.moeda2').mask("#.##0,0000", {reverse: true});

</script>