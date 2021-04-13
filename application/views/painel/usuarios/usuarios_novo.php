<h2>Cadastrar Usuário</h2>
<hr>
<div class=form-horizontal>    
    <div>
        <?php echo validation_errors(); ?>
    </div>

    <?php echo form_open() ?>
    <div class=form-row>
        <?php $this->util->input3('Nome', 'usu_nome', set_value('usu_nome'), '', 4, '', 'required'); ?>
        <?php $this->util->input3('E-mail', 'usu_email', set_value('usu_email'), '', 4, '', 'required'); ?>
    </div>
    <div class=form-row>
        <?php $this->util->input3('Senha', 'usu_senha', set_value('usu_senha'), '', 4, '', 'required', '', 'password'); ?>
        <?php $this->util->select2('Perfil', 'perfil', $perfis, set_value('perfil'), 4, '', '', 'required'); ?>
    </div>

    <div class=form-row>
        <input type=submit  value=Salvar class='btn btn-primary'>
    </div>            
    <?php echo form_close() ?>
</div>
