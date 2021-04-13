<div class='row'>
     <div class='col-md-6'>
         <h3>Cadastro de <?php echo ucfirst($titulo); ?></h3>
     </div>
     <div class='col-md-6 text-right'>
         <a class='btn btn-primary' href='<?php echo site_url('consultas') ?>'>
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
         <label for='nome'>Tipo</label>
         <input type='text' name='con_tipo'  class='form-control' value='<?php echo $object->con_tipo; ?>' />
     </div>
      <div class='col-md-4'>
         <label for='nome'>Dados</label>
         <input type='text' name='con_dados'  class='form-control' value='<?php echo $object->con_dados; ?>' />
     </div>
      <div class='col-md-4'>
         <label for='nome'>IdUsuario</label>
         <input type='text' name='con_idUsuario'  class='form-control' value='<?php echo $object->con_idUsuario; ?>' />
     </div>
      <div class='col-md-4'>
         <label for='nome'>DataCadastro</label>
         <input type='text' name='con_dataCadastro'  class='form-control' value='<?php echo $object->con_dataCadastro; ?>' />
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
