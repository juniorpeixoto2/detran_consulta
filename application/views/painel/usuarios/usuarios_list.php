<div class="row">
    <div class="col-md-6">
        <h3>Cadastro de Usuários</h3>
    </div>
    <div class="col-md-6 text-right">
        <a class="btn btn-primary btn-bloc" href='<?php echo site_url('painel/usuarios/criar/') ?>'>
            <span class="fa fa-user-plus"></span>
            Cadastrar Usuário
        </a>
    </div>
</div>
<hr>
<div class='row'>
    <div class='col-md-12'>
        <?php echo form_open(); ?>
        <div class='form-horizontal'>
            <div class="form-row">
                <div class='col-md-4'>
                    <input type='text' name='usu_nome' value='<?php echo isset($post['usu_nome']) ? $post['usu_nome'] : ''; ?>' class="form-control" placeholder="Nome">
                </div>
                <div class='col-md-2'>
                    <input type='submit' value='Pesquisar' class='form-control btn btn-primary'>
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <?php if (count($dados) != 0) { ?>
            <table class='table table-bordered table-striped table-condensed table-hover table-sm'>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Perfil</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dados as $dado) {
                        ?>
                        <tr class="<?php echo $dado->usu_status == 'INATIVO' ? 'table-danger' : ''; ?>">
                            <td><?php echo $dado->usu_nome ?> </td>
                            <td><?php echo $dado->usu_email ?> </td>
                            <td><?php echo mb_strtoupper($dado->per_nome) ?> </td>
                            <td><?php echo $dado->usu_status ?> </td>
                            <td>
                                <a class='btn btn-sm btn-primary' href="<?php echo site_url('painel/usuarios/editar/' . $dado->usu_id) ?>">
                                    Editar
                                </a>

                            </td>

                        </tr>
                    <?php } ?>

                </tbody>
            </table>
            <ul class='pagination pagination-small'>
                <li>
                    <?php echo $paginacao; ?>
                </li>
            </ul>
        <?php } else { ?>
            <h4>Nenhum registro encontrado</h4>
        <?php } ?>
    </div>
    <div class="col-md-3">

        <!--
        <a class="btn btn-primary btn-lg btn-block" href='<?php echo site_url('painel/metodos') ?>'>
            <span class="fa fa-database"></span>
            <br>
            Páginas do Sistema
        </a>
        -->

    </div>
</div>
<script>
    $('.menu_usuario').addClass('active-menu');
</script>

