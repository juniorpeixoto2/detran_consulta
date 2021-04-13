<div class='row'>
    <div class='col-md-6'>
        <h3>Cadastro de <?php echo ucfirst($titulo); ?></h3>
    </div>
    <div class='col-md-6 text-right'>
        <a class='btn btn-primary' href='<?php echo site_url('painel/perfis') ?>'>
            Voltar
        </a>
    </div>
</div>
<hr>
<div class='row'>
    <div class='col-md-12'>
        <div class=form-horizontal>    <div><div style='background: red; color: white;'><?php echo validation_errors(); ?></div></div><?php echo form_open() ?>
            <div class='form-group'>
                <?php $this->util->input3('Nome', 'per_nome', $object->per_nome); ?>
            </div>
            <div class='form-group'>
                <div class='col-md-3'>
                    <label>&nbsp;</label>
                    <input type=submit  value=Salvar class='btn btn-primary form-control'>
                </div>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>

