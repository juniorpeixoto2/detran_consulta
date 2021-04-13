<h2>Cadastrar Usuário</h2>
<hr>
<div class=form-horizontal>    
    <div>
        <?php echo validation_errors(); ?>
    </div>

    <?php echo form_open() ?>
    <div class=form-row>
        <?php $this->util->input3('Nome', 'usu_nome', $object->usu_nome, '', 4, '', 'required'); ?>
        <?php $this->util->input3('E-mail', 'usu_email', $object->usu_email, '', 4, '', 'required'); ?>
    </div>
    <div class=form-row>
        <?php $this->util->input3('Senha (deixe em branco para não alterar a senha)', 'usu_senha', '', '', 4, '', '', '', 'password'); ?>
        <?php $this->util->select2('Perfil', 'perfil', $perfis, $perfil->up_idPerfil, 2, '', '', 'required'); ?>
        <?php $this->util->select2('Status', 'usu_status', array('ATIVO' => 'ATIVO', 'INATIVO' => 'INATIVO'), $object->usu_status, 2, '', '', 'required'); ?>
    </div>

    <div class=form-row>
        <div class="col-md-4">
            <input type=submit  value=Salvar class='btn btn-primary'>
        </div>
    </div>            
    <?php echo form_close() ?>
</div>
