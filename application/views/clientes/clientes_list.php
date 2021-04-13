<div class='row'>
    <div class='col-md-6'>
        <h3>Cadastro de <?php echo ucfirst($titulo); ?></h3>
    </div>
    <div class='col-md-6 text-right'>
        <a class='btn btn-primary' href='<?php echo site_url('clientes/criar') ?>'>
            Cadastrar Cliente
        </a>
    </div>
</div>
<hr>
<div class='row'>
    <div class='col-md-12'>
        <?php echo form_open(); ?>
        <div class='form-row'>
            <div class='col-md-4'>
                <label>Nome</label>
                <input type='text' name='cli_nome' value='<?php echo isset($post['cli_nome']) ? $post['cli_nome'] : ''; ?>' class='form-control'>
            </div>
            <div class='col-md-2'>
                <label>&nbsp;</label>
                <input type='submit' value='Pesquisar' class='form-control btn btn-primary'>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
<hr>
<div class='row'>
    <div class='col-md-12'>
        <?php if ($dados->num_rows() > 0) { ?>
            <table class='table table-sm table-bordered table-striped table-condensed table-hover'>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dados->result() as $dado) {
                    ?> <tr>
                            <td><?php echo $dado->cli_nome ?> </td>
                            <td><?php echo $dado->cli_email ?> </td>
                            <td>
                                <a class='btn btn-sm btn-primary' href="<?php echo site_url('clientes/editar_dados/' . $dado->cli_id) ?>">
                                    Detalhar
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
</div>