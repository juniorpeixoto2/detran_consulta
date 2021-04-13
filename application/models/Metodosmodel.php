<?php

/* * * Model metodos * */

class Metodosmodel extends CI_Model {

    /**  Campos* */
    var $met_id;
    var $met_classe;
    var $met_metodo;
    var $met_apelido;
    var $met_privado;
    var $met_dataCadastro;

    public function __construct() {
        parent::__construct();
    }

    public function inserir($dados) {
        $this->db->set($dados)->insert('metodos');
    }

    public function update($data, $id) {
        $this->db->where('met_id', $id);
        $this->db->set($data)->update('metodos');
    }

    function contaRegistros() {
        return $this->db->count_all_results('metodos');
    }

    public function delete($id) {
        return $this->db->delete('metodos', array('met_id' => $id));
    }

    public function all($ini, $fim, $post) {
        if (isset($post['met_classe']) && $post['met_classe'] != '') {
            $this->db->like('met_classe', $post['met_classe']);
        }

        $dados = $this->db->get('metodos', $fim, $ini)->result();

        //echo $this->db->last_query();

        return $dados;
    }

    public function getById($id) {
        return $this->db->get_where('metodos', array('met_id' => $id))->row();
    }

    public function getBy($where) {
        return $this->db->get_where('metodos', $where);
    }

    public function getArray() {
        $result = array();
        $dados = $this->db->order_by('met_classe')->get('metodos')->result_array();
        $result[''] = 'Selecione Metodos!';
        foreach ($dados as $dado) {
            $result[$dado['met_id']] = strtoupper($dado['met_classe']);
        }
        return $result;
    }

    public function listar() {
        return $this->db->get('metodos')->result_array();
    }

    public function listarClasses() {
        return $this->db
                ->select('met_classe')
                ->group_by('met_classe')
                ->order_by('met_classe')
                ->get('metodos')
                ->result_array();
    }

}
