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
            <div class='form-row'>
                <?php $this->util->input3('Titulo', 'par_titulo', $object->par_titulo); ?>
                <?php $this->util->input3('Url', 'par_url', $object->par_url); ?>
            </div>
            <hr>
            <strong>
                Configuraçãos do E-mail
            </strong>
            <hr>
            <div class='form-row'>
                <?php $this->util->input3('Smtp Host', 'par_smtpHost', $object->par_smtpHost); ?>
                <?php $this->util->input3('Smtp Set From', 'par_smtpSetFrom', $object->par_smtpSetFrom); ?>
            </div>
            <div class='form-row'>
                <?php $this->util->input3('SmtpPorta', 'par_smtpPorta', $object->par_smtpPorta); ?>
                <?php $this->util->input3('SmtpSecure', 'par_smtpSecure', $object->par_smtpSecure); ?>
            </div>
            <div class='form-row'>
                <?php $this->util->input3('SmtpUsuario', 'par_smtpUsuario', $object->par_smtpUsuario); ?>
                <?php $this->util->input3('SmtpSenha', 'par_smtpSenha', $object->par_smtpSenha, '', 4, '', '', '', 'password'); ?>
            </div>
            <div class='form-row'>
                <div class='col-md-3'>
                    <label>&nbsp;</label>
                    <input type=submit value=Salvar class='btn btn-primary form-control'>
                </div>
            </div>
            <br>
            <?php
            echo form_close();
            echo CI_VERSION;
            ?>
        </div>
    </div>
</div>
<script>
    $('.menu_parametros').addClass('active-menu');
</script>


<script src="<?php echo base_url('assets'); ?>/js/selectize.js"></script>
<script src="<?php echo base_url('assets'); ?>/js/jquery.mask.js"></script>
<script>
    $('.fone').mask("(99) 9 9999-9999", {
        clearIfNotMatch: true
    });
</script>