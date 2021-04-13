<div class='row'>
    <div class='col-md-6'>
        <h3>Cadastro de <?php echo ucfirst($titulo); ?></h3>
    </div>
    <div class='col-md-6 text-right'>
        <a class='btn btn-primary' href='<?php echo site_url('painel/perfis/criar') ?>'>
            Cadastrar Perfil
        </a>
    </div>
</div>
<hr>



<div class='row'>
    <div class='col-md-12'>
        <?php echo form_open(); ?>
        <div class='form-horizontal'>
            <div class='col-md-4'>
                <label>Nome</label>
                <input type='text' name='per_nome' value='<?php echo isset($post['per_nome']) ? $post['per_nome'] : ''; ?>' class='form-control'>
            </div>
            <div class='col-md-2'>
                <label>&nbsp;</label>
                <input type='submit' value='Pesquisar' class='form-control btn btn-primary'>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
<hr><div class='row'>
    <div class='col-md-12'>
        <?php if (count($dados) != 0) { ?>
            <table class='table table-bordered table-striped table-condensed table-hover'>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dados as $dado) {
                        ?><tr><td><?php echo $dado->per_nome ?> </td>
                            <td><?php echo $dado->per_status ?> </td>
                            <td>
                                <a class='btn btn-sm btn-success' href="<?php echo site_url('painel/perfis/permissoes/' . $dado->per_id) ?>">
                                    Permissões
                                </a>
                                <a class='btn btn-sm btn-primary' href="<?php echo site_url('painel/perfis/editar/' . $dado->per_id) ?>">
                                    Editar
                                </a>
                                <a class='btn btn-sm btn-danger' href="<?php echo site_url('painel/perfis/delete/' . $dado->per_id) ?>">Deletar</a>
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
</div>