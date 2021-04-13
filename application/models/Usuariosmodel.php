<?php

/* * * Model usuarios * */

class Usuariosmodel extends CI_Model {

    /**  Campos* */
    var $usu_id;
    var $usu_nome;
    var $usu_email;
    var $usu_registro;
    var $usu_senha;
    var $usu_status;
    var $usu_dataCadastro;

    public function __construct() {
        parent::__construct();
    }

    /*
      public function login($email, $senha) {
      $this->db->where('usu_email', $email);
      //$this->db->where('cli_senha', $senha);
      $email = $this->db->get('usuarios');

      if ($email->num_rows() == 0) {
      return $email;
      } else {
      $senhaBanco = $this->encryption->decrypt($email->row('usu_senha'));
      //echo $senhaBanco . ' == ' . $senha;
      if ($senhaBanco == $senha) {
      return $email;
      } else {
      return $this->db->limit(0)->get('usuarios');
      }
      }
      }
     * 
     */

    public function inserir($dados) {
        $dados['usu_senha'] = $this->encryption->encrypt($dados['usu_senha']);
        $this->db->set($dados)->insert('usuarios');

        return $this->db->insert_id();
    }

    public function insertPerfil($dados) {
        $this->db->set($dados)->insert('usuario_perfil');
        return $this->db->insert_id();
    }

    public function update($data, $id) {
        if ($data['usu_senha'] != '') {
            $data['usu_senha'] = $this->encryption->encrypt($data['usu_senha']);
        } else {
            unset($data['usu_senha']);
        }

        $this->db->where('usu_id', $id);
        $this->db->set($data)->update('usuarios');
    }

    public function update2($data, $id) {
        $this->db->where('usu_id', $id);
        $this->db->set($data)->update('usuarios');
    }

    public function updatePerfil($data, $idPerfil) {
        $this->db->where('up_id', $idPerfil);
        $this->db->set($data)->update('usuario_perfil');
    }

    public function getPerfUsuario($idUsuario) {
        return $this->db->get_where('usuario_perfil', array('up_idUsuario' => $idUsuario))->row();
    }

    function contaRegistros() {
        return $this->db->count_all_results('usuarios');
    }

    /**
     * Delete object
     * */
    public function delete($id) {
        return $this->db->delete('usuarios', array('usu_id' => $id));
    }

    /**
     * Return all objects
     * */
    public function all($ini, $fim, $post) {
        if (isset($post['usu_nome']) && $post['usu_nome'] != '') {
            $this->db->like('usu_nome', $post['usu_nome']);
        }

        $this->db->join('usuario_perfil', 'up_idUsuario = usu_id');
        $this->db->join('perfis', 'per_id = up_idPerfil');
        return $this->db->get('usuarios', $fim, $ini)->result();
    }

    /**
     * Return object that has $id
     * */
    public function getById($id) {
        return $this->db->get_where('usuarios', array('usu_id' => $id))->row();
    }

    /**
     * Return object filtered by $where
     * $where must be an array
     * */
    public function getBy($where) {
        return $this->db->get_where('usuarios', $where);
    }

    public function getArray() {
        $result = array();

        $dados = $this->db->order_by('usu_nome')->get('usuarios')->result_array();

        $result[''] = 'SELECIONE O Usuarios!';

        foreach ($dados as $dado) {
            $result[$dado['usu_id']] = strtoupper($dado['usu_nome']);
        }
        return $result;
    }

}
