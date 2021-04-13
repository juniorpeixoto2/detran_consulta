<div class='row'>
    <div class='col-md-12'>
        <div class=form-horizontal>
            <div class="erro">
                <div style='background: red; color: white;'><?php echo validation_errors(); ?></div>
            </div>
            <?php echo form_open() ?>
            <div class='form-row'>
                <div class='col-md-4'>
                    <label for='nome'>Indicado</label>
                    <?php echo form_dropdown('cli_idIndicado', $clientes, $object->cli_idIndicado, ['class' => 'form-control', 'required' => 'true']); ?>
                </div>
            </div>
            <div class='form-row'>
                <div class='col-md-3'>
                    <label>&nbsp;</label>
                    <input type=submit  value=Salvar class='btn btn-primary form-control'>
                </div>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>

<style>
    .erro p{
        padding: 5px;
    }
</style>

<script src="<?php echo base_url('assets'); ?>/js/selectize.js"></script>
<script src="<?php echo base_url('assets'); ?>/js/jquery.mask.js"></script>
<script>
    $('.moeda').mask("#.##0,00", {reverse: true});
    $('.numero').mask("000000000");
    $('.moeda2').mask("#.##0,0000", {reverse: true});
    $('.data').mask("00/00/0000");
    $('.fone').mask("(99) 9 9999-9999", {clearIfNotMatch: true});
    $('.cpf').mask("000.000.000-00", {clearIfNotMatch: true});

    var options = {
        onComplete: function (cep) {
            $.get('<?php echo site_url('site/getCep'); ?>/' + cep, function (result) {

                console.log(result);
                if (result.erro) {
                    $('.bairro').val('')
                    $('.cidade').val('')
                    $('.estado').val('')
                } else {
                    $('.bairro').val(result.bairro)
                    $('.cidade').val(result.localidade)
                    $('.estado').val(result.uf)
                }


            });
        },
        clearIfNotMatch: true
    };
    $('.cep').mask("00.000-000", options);

    $('.selectize').selectize({
        selectOnTab: true,
        //plugins: ['remove_button'],

    });
</script>