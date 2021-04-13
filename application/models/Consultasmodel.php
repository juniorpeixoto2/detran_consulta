<?php
/*** Model consultas **/

class Consultasmodel extends CI_Model{

     /**  Campos**/
     var $con_id;
     var $con_tipo;
     var $con_dados;
     var $con_idUsuario;
     var $con_dataCadastro;
     var $tabela = 'consultas';

     public function __construct(){
         parent::__construct();
     }

     public function inserir($dados){
         $this->db->set($dados)->insert($this->tabela);
         return $this->db->insert_id();
         }

     public function update($dados, $id) {
        $this->db->where('con_id', $id);
        $this->db->set($dados)->update($this->tabela);
    }
    
     function contaRegistros() {
        return $this->db->count_all_results($this->tabela);
    }
    

    public function delete($id){
	return $this->db->delete('consultas', array('con_id' => $id));
    }

    public function all($ini, $fim, $post){
        if (isset($post['con_tipo']) && $post['con_tipo'] != '') {
            $this->db->like('con_tipo', $post['con_tipo']);
        }

    	$dados = $this->db->get($this->tabela, $fim, $ini);
        
        //echo $this->db->last_query();

        return $dados;
    }
    
    public function getById($id){
		$this->db->where('con_id', $id);
            return $this->db->get($this->tabela)->row();
	}

    public function getArray() {
        $result = array();
        $dados = $this->db->order_by('con_tipo')->get($this->tabela)->result_array();
        $result[''] = 'Selecione!';
        foreach ($dados as $dado) {
            $result[$dado['con_id']] = strtoupper($dado['con_tipo']);
        }
        return $result;
    }

}
