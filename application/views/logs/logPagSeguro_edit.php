<div class='row'>
    <div class='col-md-6'>
        <h3>Cadastro de <?php echo ucfirst($titulo); ?></h3>
    </div>
    <div class='col-md-6 text-right'>

    </div>
</div>
<hr>
<div class='row'>
    <div class='col-md-12'>
        <div class=form-horizontal>
            <div>
                <div style='background: red; color: white;'><?php echo validation_errors(); ?></div>
            </div>
            <div class='form-row'>
                <div class='col-md-4'>
                    <label for='nome'>NotificationType</label>
                    <input type='text' name='lps_notificationType'  class='form-control' value='<?php echo $object->lps_notificationType; ?>' />
                </div>
                <div class='col-md-4'>
                    <label for='nome'>NotificationCode</label>
                    <input type='text' name='lps_notificationCode'  class='form-control' value='<?php echo $object->lps_notificationCode; ?>' />
                </div>
                <div class='col-md-4'>
                    <label for='nome'>Conteudo</label>
                    <input type='text' name='lps_conteudo'  class='form-control' value='<?php echo $object->lps_conteudo; ?>' />
                </div>
                <div class='col-md-4'>
                    <label for='nome'>Status</label>
                    <input type='text' name='blo_status'  class='form-control' value='<?php echo $object->blo_status; ?>' />
                </div>
                <div class='col-md-4'>
                    <label for='nome'>DataCadastro</label>
                    <input type='text' name='lps_dataCadastro'  class='form-control' value='<?php echo $object->lps_dataCadastro; ?>' />
                </div>
            </div>
            <div class='form-row'>
                <div class='col-md-3'>
                    <label>&nbsp;</label>
                    <input type=submit  value=Salvar class='btn btn-primary form-control'>
                </div>
            </div>
        </div>
    </div>
</div>
