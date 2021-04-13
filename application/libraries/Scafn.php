<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Scafn {

    public function index() {
        
    }

    public function controller($tabela, $campos) {

        $tabelaUcf = ucfirst($tabela);
        $tabelaMin = strtolower($tabela);
        $model = $tabelaMin . 'model';

        return ""
                . "<?php\n"
                . "/** CRUD Controller para $tabela**/ \n"
                . "class $tabelaUcf extends CI_Controller { \n"
                . "\n"
                . "     private \$_tpl = 'painel/indexPainel.php';\n"
                . "     private \$dados = array();\n"
                . "\n"
                . "     public function __construct() {\n"
                . "         parent::__construct();\n"
                . "         \$this->load->helper(array('form', 'url'));\n"
                . "         \$this->load->library(array('Util', 'pagination', 'form_validation'));\n"
                . "         \$this->auth->check_logged(\$this->router->class, \$this->router->method);\n"
                . "\n"
                . "         \$this->load->model('$model', '', true);\n"
                . "     }\n"
                . "\n"
                . "     /** Lista $tabela * */\n"
                . "     public function index(\$inicio = 0) {\n"
                . "         \$maximo =  \$this->input->post() ? '0' : '10';\n"
                . ""
                . "         \$config['full_tag_open'] = '<nav><ul class=\"pagination\">';\n"
                . "         \$config['full_tag_close'] = '</ul></nav>';\n"
                //. "         \$config['prev_link'] = '<i class=\"fa fa-chevron-left\"></i>';\n"
                //. "         \$config['next_link'] = '<i class=\"fa fa-chevron-right\"></i>';\n"
                . "         \$config['cur_tag_open'] = '<li class=\"page-item active\"><a class=\"page-link\" href=\"#\">';\n"
                . "         \$config['cur_tag_close'] = '<span class=\"sr-only\">(current)</span></a></li>';\n"
                . "         \$config['attributes'] = array('class' => 'page-link');\n"
                . ""
                . "         \$config['base_url'] = site_url('/$tabelaMin/index');\n"
                . "         \$config['total_rows'] = \$this->" . $model . "->contaRegistros();\n"
                . "         \$config['per_page'] = \$maximo;\n"
                . "         \$this->pagination->initialize(\$config);\n"
                . "         \$this->dados['paginacao'] = \$this->pagination->create_links();\n"
                . "\n"
                . "         \$this->dados['dados'] = \$this->" . $model . "->all(\$inicio, \$maximo, \$this->input->post());\n"
                . "         \$this->dados['pagina'] = '$tabelaMin/" . $tabelaMin . "_list';\n"
                . "         \$this->dados['post'] = \$this->input->post();\n"
                . "         \$this->dados['titulo'] = '$tabela';\n"
                . "         \$this->load->view(\$this->_tpl, \$this->dados);\n"
                . "     }\n"
                . "\n"
                . "     /** Cria novo(a)  * */\n"
                . "     public function criar() {\n"
                . "         \$this->form_validation->set_rules('$campos[1]', '$campos[1]', 'required', array('required' => 'O Campo {field} é Obrigatório'));\n"
                . "         if (\$this->form_validation->run() == TRUE) {\n"
                . "             \$post = \$this->input->post();\n"
                . "             \$this->" . $model . "->inserir(\$post);\n"
                . "             echo \"<script>window.location.href='\" . site_url() . \"/$tabelaMin/'</script>\";\n"
                . "         }else{\n"
                . "             \$this->dados['object'] = \$this->$model;\n"
                . "             \$this->dados['pagina'] = '$tabelaMin/" . $tabelaMin . "_novo';\n"
                . "             \$this->dados['titulo'] = '$tabela ';\n"
                . "             \$this->load->view(\$this->_tpl, \$this->dados);\n "
                . "         }\n "
                . "     }\n"
                . "\n"
                . "     public function editar(\$id) {\n"
                . "         if (\$this->input->post()) {\n"
                . "             \$post = \$this->input->post();\n"
                . "             \$this->" . $model . "->update(\$post, \$id);\n"
                . "             echo \"<script>window.location.href = '\" . site_url() . \"/$tabelaMin/'</script>\";\n"
                . "             return;\n"
                . "         }else{\n"
                . "         \$this->dados['object'] = \$this->" . $model . "->getById(\$id);\n"
                . "         \$this->dados['pagina'] = '$tabelaMin/" . $tabelaMin . "_edit';\n"
                . "         \$this->dados['titulo'] = '$tabela ';\n"
                . "         \$this->load->view(\$this->_tpl, \$this->dados);\n"
                . "          }"
                . "     }\n"
                . "\n"
                . "     public function delete(\$id) {\n"
                . "         \$response = null;\n"
                . "\n"
                . "         if (\$_POST && isset(\$_POST['agree']) && \$_POST['agree'] == 'Sim') {\n"
                . "             \$response = \$this->" . $model . "->delete(\$id);\n"
                . "             echo \"<script>window.location.href = '\" . site_url() . \"/$tabelaMin/'</script>\";\n"
                . "             return;\n"
                . "         } else {\n"
                . "         if (\$_POST) {\n"
                . "             redirect('$tabelaMin');\n"
                . "             return;\n"
                . "         }\n"
                . "     \$object = \$this->" . $model . "->getById(\$id);\n"
                . "     }\n"
                . "     \$this->dados['pagina'] = '$tabelaMin/" . $tabelaMin . "_del';\n"
                . "     \$this->dados['titulo'] = '$tabela ';\n"
                . "     \$this->dados['object'] = \$object;\n"
                . "     \$this->dados['response'] = \$response;\n"
                . "     \$this->dados['id'] = \$id;\n"
                . "     \$this->load->view(\$this->_tpl, \$this->dados);\n"
                . "   }\n"
                . "}\n"
                . "";
    }

    public function model($tabela, $campos) {

        $tabelaUcf = ucfirst($tabela);
        $tabelaMin = strtolower($tabela);

        $model = ""
                . "<?php\n"
                . "/*** Model $tabela **/\n"
                . "\n"
                . "class " . $tabelaUcf . "model extends CI_Model{\n"
                . "\n"
                . "     /**  Campos**/\n";

        $id = $campos[0];
        $campo2 = $campos[1];
        foreach ($campos as $campo) {
            $model .= "     var \$$campo;\n";
        }

        $model .= "     var \$tabela = '{$tabelaMin}';"
                . "\n\n"
                . "     public function __construct(){\n"
                . "         parent::__construct();\n"
                . "     }\n"
                . "\n"
                . "     public function inserir(\$dados){\n"
                . "         \$this->db->set(\$dados)->insert(\$this->tabela);\n"
                . "         return \$this->db->insert_id();\n    "
                . "     }\n"
                . "\n"
                . "     public function update(\$dados, \$id) {"
                . ""
                . "
        \$this->db->where('$id', \$id);
        \$this->db->set(\$dados)->update(\$this->tabela);
    }
    
     function contaRegistros() {
        return \$this->db->count_all_results(\$this->tabela);
    }
    

    public function delete(\$id){
	return \$this->db->delete('$tabelaMin', array('$id' => \$id));
    }

    public function all(\$ini, \$fim, \$post){
        if (isset(\$post['$campo2']) && \$post['$campo2'] != '') {
            \$this->db->like('$campo2', \$post['$campo2']);
        }

    	\$dados = \$this->db->get(\$this->tabela, \$fim, \$ini);
        
        //echo \$this->db->last_query();

        return \$dados;
    }
    
    public function getById(\$id){
		\$this->db->where('$id', \$id);
            return \$this->db->get(\$this->tabela)->row();
	}

    public function getArray() {
        \$result = array();
        \$dados = \$this->db->order_by('$campo2')->get(\$this->tabela)->result_array();
        \$result[''] = 'Selecione!';
        foreach (\$dados as \$dado) {
            \$result[\$dado['$id']] = strtoupper(\$dado['$campo2']);
        }
        return \$result;
    }

}
";
        return $model;
    }

    public function vList($tabela, $campos) {

        $label1 = ucfirst(substr($campos[1], strpos($campos[1], "_") + 1));

        $vlist = ""
                . "<div class='row'>\n"
                . "     <div class='col-md-6'>\n"
                . "         <h3>Cadastro de <?php echo ucfirst(\$titulo); ?></h3>\n"
                . "     </div>\n"
                . "     <div class='col-md-6 text-right'>\n"
                . "         <a class='btn btn-primary' href='<?php echo site_url('$tabela/criar') ?>'>\n"
                . "             Cadastrar " . ucfirst(substr($tabela, 0, -1)) . "\n"
                . "         </a>\n"
                . "     </div>\n"
                . "</div>\n"
                . "<hr>\n"
                . "<div class='row'>\n"
                . "     <div class='col-md-12'>\n"
                . "     <?php echo form_open(); ?>\n"
                . "         <div class='form-row'>\n"
                . "             <div class='col-md-4'>\n"
                . "                 <label>$label1</label>\n"
                . "                 <input type='text' name='$campos[1]' value='<?php echo isset(\$post['$campos[1]']) ? \$post['$campos[1]'] : ''; ?>' class='form-control'>\n"
                . "             </div>\n"
                . "             <div class='col-md-2'>\n"
                . "                 <label>&nbsp;</label>\n"
                . "                 <input type='submit' value='Pesquisar' class='form-control btn btn-primary'>\n"
                . "             </div>\n"
                . "         </div>\n"
                . "         <?php echo form_close(); ?>\n"
                . "     </div>\n"
                . "</div>\n"
                . "<hr>\n"
                . ""
                . "<div class='row'>\n"
                . "     <div class='col-md-12'>\n"
                . ""
                . "<?php \n"
                . "if (\$dados->num_rows() > 0){ ?>\n"
                . "     <table class='table table-sm table-bordered table-striped table-condensed table-hover'>\n"
                . "         <thead>\n"
                . "             <tr>\n";

        $id = $campos[0];
        unset($campos[0]);
        foreach ($campos as $campo) {
            $label = ucfirst(substr($campo, strpos($campo, "_") + 1));
            $vlist .= "                <th>" . $label . "</th>\n";
        }

        $vlist .= "         <th></th>\n"
                . "     </tr>\n"
                . "</thead>\n\t"
                . "<tbody>\n"
                . "     <?php foreach(\$dados->result() as \$dado){ \n?>"
                . "     <tr>\n";

        foreach ($campos as $campo) {

            $vlist .= "<td><?php echo \$dado->$campo ?> </td>\n";
        }

        $vlist .= ""
                . "<td>\n"
                . "<a class='btn btn-sm btn-primary' href=\"<?php echo site_url('$tabela/editar/' . \$dado->$id) ?>\">\n"
                . "     Editar\n"
                . "</a>\n"
                . "<a class='btn btn-sm btn-danger' href=\"<?php echo site_url('$tabela/delete/' . \$dado->$id) ?>\">Deletar</a>\n"
                . "     </td>\n"
                . "</tr>\n"
                . "<?php } ?>\n"
                . "</tbody>\n"
                . "</table>\n"
                . " <ul class='pagination pagination-small'>\n"
                . "     <li>\n"
                . "         <?php echo \$paginacao; ?>\n"
                . "     </li>\n"
                . " </ul>\n"
                . "     <?php }else{ ?>\n"
                . "     <h4>Nenhum registro encontrado</h4>\n"
                . "     <?php } ?>\n"
                . "     </div>\n"
                . "</div>\n"
                . "";

        return $vlist;
    }

    public function vForm($tabela, $campos) {

        unset($campos[0]);

        $vEdit = ""
                . "<div class='row'>\n"
                . "     <div class='col-md-6'>\n"
                . "         <h3>Cadastro de <?php echo ucfirst(\$titulo); ?></h3>\n"
                . "     </div>\n"
                . "     <div class='col-md-6 text-right'>\n"
                . "         <a class='btn btn-primary' href='<?php echo site_url('$tabela') ?>'>\n"
                . "             Voltar\n"
                . "         </a>\n"
                . "     </div>\n"
                . "</div>\n"
                . "<hr>\n"
                . "<div class='row'>\n"
                . "     <div class='col-md-12'>\n"
                . ""
                . "<div class=form-horizontal>\n"
                . "   <div>\n"
                . ""
                . "  <div style='background: red; color: white;'><?php echo validation_errors(); ?></div>\n"
                . "   </div>\n"
                . "   <?php echo form_open() ?>\n"
                . "   <div class='form-row'>\n";

        foreach ($campos as $campo) {
            $label = ucfirst(substr($campo, strpos($campo, "_") + 1));

            /* $vEdit .= "<?php \$this->util->input3('$label', '$campo', \$object->$campo); ?>\n"; */

            $vEdit .= ""
                    . "     <div class='col-md-4'>\n"
                    . "         <label for='nome'>$label</label>\n"
                    . "         <input type='text' name='$campo'  class='form-control' value='<?php echo \$object->$campo; ?>' />\n"
                    . "     </div>\n ";
        }
        $vEdit .= ""
                . "     </div>\n"
                . " <div class='form-row'>\n"
                . "     <div class='col-md-3'>\n"
                . "         <label>&nbsp;</label>\n"
                . "         <input type=submit  value=Salvar class='btn btn-primary form-control'>\n"
                . "     </div>\n"
                . "     </div>\n"
                . "     <?php echo form_close() ?>\n"
                . "    </div>\n"
                . "  </div>\n"
                . "</div>\n"
                . "";


        return $vEdit;
    }

    public function vDelete($tabela, $campos) {
        return "
	<h3> <?php echo 'Deletar'?></h3>
        <div class='form'>
        <?php echo form_open(\$this->uri->uri_string(), 'post') ?>
        Tem certeza que quer excluir: <?php echo \$object->$campos[0] ?>?
            <br>
        <?php echo form_submit('agree', 'Sim') ?>
        <?php echo form_submit('disagree', 'Não') ?>
        <?php echo form_close() ?>
        </div>
	";
    }

}
