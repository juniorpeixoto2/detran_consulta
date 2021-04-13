
	<h3> <?php echo 'Deletar'?></h3>
        <div class='form'>
        <?php echo form_open($this->uri->uri_string(), 'post') ?>
        Tem certeza que quer excluir: <?php echo $object->log_id ?>?
            <br>
        <?php echo form_submit('agree', 'Sim') ?>
        <?php echo form_submit('disagree', 'Não') ?>
        <?php echo form_close() ?>
        </div>
	