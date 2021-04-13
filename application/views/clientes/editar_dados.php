<div class='row'>
    <div class='col-md-12'>
        <div class=form-horizontal>
            <div class="erro">
                <div style='background: red; color: white;'><?php echo validation_errors(); ?></div>
            </div>
            <?php echo form_open() ?>
            <div class='form-row'>
                <div class='col-md-6'>
                    <label for='nome'>Nome</label>
                    <input type='text' name='cli_nome' required="true" class='form-control' value='<?php $this->util->set_valor($object->cli_nome, set_value('cli_nome')); ?>' />
                </div>
            </div>
            <div class='form-row'>
                <div class='col-md-3'>
                    <label for='nome'>CPF</label>
                    <input type='text' name='cli_cpf' required="true" class='form-control cpf' value='<?php $this->util->set_valor($object->cli_cpf, set_value('cli_cpf')); ?>' />
                </div>
                <div class='col-md-3'>
                    <label for='nome'>Telefone</label>
                    <input type='text' name='cli_telefone' class='form-control fone' value='<?php $this->util->set_valor($object->cli_telefone, set_value('cli_telefone')); ?>' />
                </div>
            </div>
            <div class='form-row'>
                <div class='col-md-3'>
                    <label for='nome'>Email</label>
                    <input type='email' name='cli_email' required="true" class='form-control' value='<?php $this->util->set_valor($object->cli_email, set_value('cli_email')); ?>' />
                </div>
                <div class='col-md-3'>
                    <label for='nome'>Senha</label>
                    <input type='password' name='cli_senha' class='form-control' value='<?php $this->util->set_valor('', set_value('cli_senha')); ?>' />
                </div>
            </div>

            <div class='form-row'>
                <div class='col-md-6'>
                    <label for="">Status</label>
                    <?php echo form_dropdown('cli_status', ['' => 'Selecione!', 'pendente' => 'pendente', 'ativo' => 'ativo'], $object->cli_status, ['class' => 'form-control', 'required' => 'true']); ?>
                </div>
            </div>

            <div class='form-row'>
                <div class='col-md-3'>
                    <label>&nbsp;</label>
                    <input type=submit value=Salvar class='btn btn-primary form-control'>
                </div>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>

<style>
    .erro p {
        padding: 5px;
    }
</style>

<script src="<?php echo base_url('assets'); ?>/js/selectize.js"></script>
<script src="<?php echo base_url('assets'); ?>/js/jquery.mask.js"></script>
<script>
    $('.moeda').mask("#.##0,00", {
        reverse: true
    });
    $('.numero').mask("000000000");
    $('.moeda2').mask("#.##0,0000", {
        reverse: true
    });
    $('.data').mask("00/00/0000");
    $('.fone').mask("(99) 9 9999-9999", {
        clearIfNotMatch: true
    });
    $('.cpf').mask("000.000.000-00", {
        clearIfNotMatch: true
    });

    var options = {
        onComplete: function(cep) {
            $.get('<?php echo site_url('site/getCep'); ?>/' + cep, function(result) {

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
</script>