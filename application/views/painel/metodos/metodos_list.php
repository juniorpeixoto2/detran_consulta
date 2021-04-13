
<!--
https://github.com/simonbengtsson/jsPDF-AutoTable


-->

<div class='row'>
    <div class='col-md-6'>
        <h3>Cadastro de <?php echo ucfirst($titulo); ?></h3>
    </div>
    <div class='col-md-6 text-right'>
        <a class='btn btn-primary' href='<?php echo site_url('painel/metodos/imprimir') ?>' target="_blanck">
            <span class="fa fa-print"></span>
        </a>    
        <a class='btn btn-primary' href='<?php echo site_url('metodos/criar') ?>'>
            Cadastrar Metodo
        </a>
    </div>
</div>
<hr>

<div class='row'>
    <div class='col-md-12'>
        <?php echo form_open(); ?>
        <div class='form-horizontal'>
            <div class='col-md-4'>
                <label>Classe</label>
                <input type='text' name='met_classe' value='<?php echo isset($post['met_classe']) ? $post['met_classe'] : ''; ?>' class='form-control'>
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
        <?php if (count($dados) != 0) { ?>
            <table class='table table-bordered table-striped table-condensed table-hover'>
                <thead>
                    <tr>
                        <th>Classe</th>
                        <th>Metodo</th>
                        <th>Apelido</th>
                        <th>Privado</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dados as $dado) {
                        ?><tr><td><?php echo $dado->met_classe ?> </td>
                            <td><?php echo $dado->met_metodo ?> </td>
                            <td><?php echo $dado->met_apelido ?> </td>
                            <td><?php echo $dado->met_privado ?> </td>
                            <td>
                                <a class='btn btn-sm btn-primary' href="<?php echo site_url('metodos/editar/' . $dado->met_id) ?>">
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
</div>