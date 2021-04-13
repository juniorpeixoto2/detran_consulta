<div class="box box-primary">
    <div class="box-header ui-sortable-handle">
        <i class="fa fa-align-justify"></i>

        <h3 class="box-title"><?php echo ucfirst($titulo); ?></h3>
        <div class="box-tools pull-right">
            <a class='btn btn-primary' href='<?php echo site_url('logs') ?>'>
                Voltar
            </a>
        </div>
    </div>
    <div class="box-body">

        <hr>
        <div class='row'>
            <div class='col-md-12'>
                <div class=form-horizontal>
                    <div>
                        <div style='background: red; color: white;'><?php echo validation_errors(); ?></div>
                    </div>
                    <div class='form-group'>
                        <div class='col-md-4'>
                            <?php $usuario = $this->db->where('usu_id', $object->log_idUsuario)->get('usuarios')->row(); ?>
                            <label for='nome'>Usuário</label>
                            <input type='text' name='log_idUsuario'  class='form-control' value='<?php echo $usuario->usu_nome; ?>' disabled="true" />
                        </div>
                        <div class='col-md-4'>
                            <label for='nome'>Tipo de Alteração</label>
                            <input type='text' name='log_tipo'  class='form-control' value='<?php echo $object->log_tipo; ?>' disabled="true"/>
                        </div>
                    </div>
                    <div class='form-group'>
                        <div class='col-md-8'>
                            <label for='nome'>Conteudo</label>
                            <div class="form-control" style="height: 100px" disabled="true"><?php echo $object->log_conteudo; ?></div>
                        </div>
                    </div>
                    <div class='form-group'>
                        <div class='col-md-8'>
                            <label for='nome'>SQL</label>
                            <div class="form-control" style="height: 100px" disabled="true"><?php echo $object->log_sql; ?></div>
                        </div>
                    </div>
                    <div class='form-group'>
                        <div class='col-md-8'>
                            <label for='nome'>Dados</label>
                            <div class="form-control" style="height: auto" disabled="true"><?php $this->util->prints(json_decode($object->log_dados, true)); ?></div>
                        </div>
                    </div>
                    <div class='form-group'>
                        <div class='col-md-4'>
                            <label for='nome'>Tabela</label>
                            <input type='text' name='log_tabela'  class='form-control' value='<?php echo $object->log_tabela; ?>' disabled="true"/>
                        </div>

                        <div class='col-md-4'>
                            <label for='nome'>Data</label>
                            <input type='text' name='log_dataCadastro'  class='form-control' value='<?php echo $this->util->data3($object->log_dataCadastro); ?>' disabled="true"/>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
