<?php

/* * * Model perfis * */

class Perfismodel extends CI_Model {

    /**  Campos* */
    var $per_id;
    var $per_nome;
    var $per_status;
    var $per_dataCadastro;

    public function __construct() {
        parent::__construct();
    }

    public function inserir($dados) {
        $this->db->set($dados)->insert('perfis');
    }

    public function update($data, $id) {
        $this->db->where('per_id', $id);
        $this->db->set($data)->update('perfis');
    }

    function contaRegistros() {
        return $this->db->count_all_results('perfis');
    }

    public function delete($id) {
        return $this->db->delete('perfis', array('per_id' => $id));
    }

    public function all($ini, $fim, $post) {
        if (isset($post['per_nome']) && $post['per_nome'] != '') {
            $this->db->like('per_nome', $post['per_nome']);
        }

        $dados = $this->db->get('perfis', $fim, $ini)->result();

        //echo $this->db->last_query();

        return $dados;
    }

    public function getById($id) {
        return $this->db->get_where('perfis', array('per_id' => $id))->row();
    }

    public function getBy($where) {
        return $this->db->get_where('perfis', $where);
    }

    public function getArray() {
        $result = array();
        $dados = $this->db->order_by('per_nome')->get('perfis')->result_array();
        $result[''] = 'Selecione o Perfil!';
        foreach ($dados as $dado) {
            $result[$dado['per_id']] = strtoupper($dado['per_nome']);
        }
        return $result;
    }

    public function permissoes($idPerfil) {
        $this->db->from('perfil_permissoes')->where('pp_idPerfil', $idPerfil);
        $result = $this->db->get()->result_array();

        $permissoes = array();
        foreach ($result as $res) {
            $permissoes[] = $res['pp_idMetodo'];
        }

        return $permissoes;
    }

    public function updatePerfilPermissoes($dados, $idPerfil) {
        $this->db->delete('perfil_permissoes', array('pp_idPerfil' => $idPerfil));
        $data = array();
        foreach ($dados['perm_id'] as $dado) {
            $linha = array(
                'pp_idPerfil' => $idPerfil,
                'pp_idMetodo' => $dado
            );
            $data[] = $linha;
        }
        $this->db->insert_batch('perfil_permissoes', $data);
    }

    public function getByUsuario($id) {
        return $this->db->get_where('usuario_perfil', array('up_idUsuario' => $id))->row();
    }

}
