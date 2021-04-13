<div class='row'>
     <div class='col-md-6'>
         <h3>Cadastro de <?php echo ucfirst($titulo); ?></h3>
     </div>
     <div class='col-md-6 text-right'>
         <a class='btn btn-primary' href='<?php echo site_url('consultas/criar') ?>'>
             Cadastrar Consulta
         </a>
     </div>
</div>
<hr>
<div class='row'>
     <div class='col-md-12'>
     <?php echo form_open(); ?>
         <div class='form-row'>
             <div class='col-md-4'>
                 <label>Tipo</label>
                 <input type='text' name='con_tipo' value='<?php echo isset($post['con_tipo']) ? $post['con_tipo'] : ''; ?>' class='form-control'>
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
<?php 
if ($dados->num_rows() > 0){ ?>
     <table class='table table-sm table-bordered table-striped table-condensed table-hover'>
         <thead>
             <tr>
                <th>Tipo</th>
                <th>Dados</th>
                <th>IdUsuario</th>
                <th>DataCadastro</th>
         <th></th>
     </tr>
</thead>
	<tbody>
     <?php foreach($dados->result() as $dado){ 
?>     <tr>
<td><?php echo $dado->con_tipo ?> </td>
<td><?php echo $dado->con_dados ?> </td>
<td><?php echo $dado->con_idUsuario ?> </td>
<td><?php echo $dado->con_dataCadastro ?> </td>
<td>
<a class='btn btn-sm btn-primary' href="<?php echo site_url('consultas/editar/' . $dado->con_id) ?>">
     Editar
</a>
<a class='btn btn-sm btn-danger' href="<?php echo site_url('consultas/delete/' . $dado->con_id) ?>">Deletar</a>
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
     <?php }else{ ?>
     <h4>Nenhum registro encontrado</h4>
     <?php } ?>
     </div>
</div>
