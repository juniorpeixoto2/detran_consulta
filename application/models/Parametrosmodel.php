<?php

/* * * Model parametros * */

class Parametrosmodel extends CI_Model {

    /**  Campos* */
    var $par_id;
    var $par_titulo;
    var $par_url;
    var $par_smtpPorta;
    var $par_smtpSecure;
    var $par_smtpUsuario;
    var $par_smtpSenha;
    var $par_dataCadastro;
    var $par_taxaSaque;

    public function __construct() {
        parent::__construct();
    }

    public function inserir($dados) {
        $this->db->set($dados)->insert('parametros');
    }

    public function update($dados, $id) {
        $this->db->where('par_id', $id);
        $this->db->set($dados)->update('parametros');
    }

    function contaRegistros() {
        return $this->db->count_all_results('parametros');
    }

    public function delete($id) {
        return $this->db->delete('parametros', array('par_id' => $id));
    }

    public function all($ini, $fim, $post) {
        if (isset($post['par_titulo']) && $post['par_titulo'] != '') {
            $this->db->like('par_titulo', $post['par_titulo']);
        }

        $dados = $this->db->get('parametros', $fim, $ini)->result();

        //echo $this->db->last_query();

        return $dados;
    }

    public function getById($id) {
        return $this->db->get_where('parametros', array('par_id' => $id))->row();
    }

    public function getBy($where) {
        return $this->db->get_where('parametros', $where);
    }

    public function getArray() {
        $result = array();
        $dados = $this->db->order_by('par_titulo')->get('parametros')->result_array();
        $result[''] = 'Selecione Parametros!';
        foreach ($dados as $dado) {
            $result[$dado['par_id']] = strtoupper($dado['par_titulo']);
        }
        return $result;
    }

    public function cotacoes() {
        $param = $this->parametrosmodel->getById(1);
        $cotacoes = json_decode($param->par_cotacoes, true);

        return [
            'dolar' => $cotacoes['dolar'],
            'bitcoin' => $cotacoes['bitcoin'],
        ];
    }

}
