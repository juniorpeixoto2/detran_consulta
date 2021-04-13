<div class="box box-primary">
    <div class="box-header ui-sortable-handle">
        <i class="fa fa-align-justify"></i>

        <h3 class="box-title"><?php echo ucfirst($titulo); ?></h3>
        <div class="box-tools pull-right">
            <a class='btn btn-primary' href='<?php echo site_url('logs/logs') ?>'>
                Voltar
            </a>
        </div>
    </div>
    <div class="box-body">
        <?php
        $arquivo = file_get_contents(APPPATH . 'logs/' . $arquivo);
        $this->util->prints($arquivo);
        ?>
    </div>
</div>