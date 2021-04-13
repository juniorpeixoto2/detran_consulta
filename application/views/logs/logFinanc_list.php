<div class='row'>
    <div class='col-md-6'>
        <h3>Logs</h3>
    </div>
    <div class='col-md-6 text-right'>
    </div>
</div>
<hr>
<div class='row'>
    <div class='col-md-12'>
        <?php echo form_open(); ?>
        <div class='form-row'>
            <div class='col-md-4'>
                <label>NotificationType</label>
                <input type='text' name='lps_notificationType' value='<?php echo isset($post['lps_notificationType']) ? $post['lps_notificationType'] : ''; ?>' class='form-control'>
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
                        <th>ID</th>
                        <th>NotificationType</th>
                        <th>Data</th>
                        <th>NotificationCode</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dados->result() as $dado) {
                        ?>
                        <tr>
                            <td><?php echo $dado->lps_id ?> </td>
                            <td><?php echo $dado->lps_notificationType ?> </td>
                            <td><?php echo $dado->lps_dataCadastro ?> </td>
                            <td><?php echo $this->util->prints(json_decode($dado->lps_conteudo, true)) ?> </td>
                            <td>
                                <a class='btn btn-sm btn-primary' href="<?php echo site_url('logs_financ/editar/' . $dado->lps_id) ?>">
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
