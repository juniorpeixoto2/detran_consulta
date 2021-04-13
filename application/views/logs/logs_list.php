<div class="box box-primary">
    <div class="box-header ui-sortable-handle">
        <i class="fa fa-align-justify"></i>

        <h3 class="box-title"><?php echo ucfirst($titulo); ?></h3>
        <div class="box-tools pull-right">
        </div>
    </div>
    <div class="box-body">
        <div class='row'>
            <div class='col-md-6'>
                <h3> <?php echo ucfirst($titulo); ?></h3>
            </div>
            <div class='col-md-6 text-right'>
                <a class='btn btn-primary' href='<?php echo site_url('painel/painel/update') ?>'>
                    update
                </a>
                <a class='btn btn-primary' href='<?php echo site_url('logs_financ') ?>'>
                    Logs de Recebimentos
                </a>
                <a class='btn btn-primary' href='<?php echo site_url('logs/logs') ?>'>
                    Logs do Sistema
                </a>
            </div>
        </div>
        <hr>
        <!--
        <div class='row'>
            <div class='col-md-12'>
        <?php echo form_open(); ?>
                <div class='form-row'>
                    <div class='col-md-4'>
                        <label>Usuário</label>
                        <input type='text' name='log_idUsuario' value='<?php echo isset($post['log_idUsuario']) ? $post['log_idUsuario'] : ''; ?>' class='form-control'>
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
        -->
        <div class='row'>
            <div class='col-md-12'>
                <?php if ($dados->num_rows() > 0) { ?>
                    <table class='table table-sm table-bordered table-striped table-condensed table-hover'>
                        <thead>
                            <tr>
                                <th>Usuário</th>
                                <th>Tipo</th>
                                <th>Conteudo</th>
                                <th>DataCadastro</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($dados->result() as $dado) {
                                $usuario = $this->db->where('usu_id', $dado->log_idUsuario)->get('usuarios')->row();
                                ?>
                                <tr>
                                    <td><?php echo mb_strtoupper($usuario->usu_nome); ?></td>
                                    <td><?php echo $dado->log_tipo ?> </td>
                                    <td><?php echo $dado->log_conteudo ?> </td>
                                    <td><?php echo $this->util->data3($dado->log_dataCadastro) ?> </td>
                                    <td>
                                        <a class='btn btn-sm btn-primary' href="<?php echo site_url('logs/editar/' . $dado->log_id) ?>">
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
    </div>
</div>
