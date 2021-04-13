<div class='row'>
     <div class='col-md-6'>
         <h3>Cadastro de <?php echo ucfirst($titulo); ?></h3>
     </div>
     <div class='col-md-6 text-right'>
         <a class='btn btn-primary' href='<?php echo site_url('logs') ?>'>
             Voltar
         </a>
     </div>
</div>
<hr>
<div class='row'>
     <div class='col-md-12'>
<div class=form-horizontal>
   <div>
  <div style='background: red; color: white;'><?php echo validation_errors(); ?></div>
   </div>
   <?php echo form_open() ?>
   <div class='form-row'>
     <div class='col-md-4'>
         <label for='nome'>IdUsuario</label>
         <input type='text' name='log_idUsuario'  class='form-control' value='<?php echo $object->log_idUsuario; ?>' />
     </div>
      <div class='col-md-4'>
         <label for='nome'>Tipo</label>
         <input type='text' name='log_tipo'  class='form-control' value='<?php echo $object->log_tipo; ?>' />
     </div>
      <div class='col-md-4'>
         <label for='nome'>Conteudo</label>
         <input type='text' name='log_conteudo'  class='form-control' value='<?php echo $object->log_conteudo; ?>' />
     </div>
      <div class='col-md-4'>
         <label for='nome'>Tabela</label>
         <input type='text' name='log_tabela'  class='form-control' value='<?php echo $object->log_tabela; ?>' />
     </div>
      <div class='col-md-4'>
         <label for='nome'>Sql</label>
         <input type='text' name='log_sql'  class='form-control' value='<?php echo $object->log_sql; ?>' />
     </div>
      <div class='col-md-4'>
         <label for='nome'>Status</label>
         <input type='text' name='log_status'  class='form-control' value='<?php echo $object->log_status; ?>' />
     </div>
      <div class='col-md-4'>
         <label for='nome'>DataCadastro</label>
         <input type='text' name='log_dataCadastro'  class='form-control' value='<?php echo $object->log_dataCadastro; ?>' />
     </div>
      </div>
 <div class='form-row'>
     <div class='col-md-3'>
         <label>&nbsp;</label>
         <input type=submit  value=Salvar class='btn btn-primary form-control'>
     </div>
     </div>
     <?php echo form_close() ?>
    </div>
  </div>
</div>
