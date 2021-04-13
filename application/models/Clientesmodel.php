<?php

/* * * Model clientes * */

class Clientesmodel extends CI_Model {

    /**  Campos* */
    var $cli_id;
    var $cli_nome;
    var $cli_email;
    var $cli_senha;
    var $cli_sexo;
    var $cli_telefone;
    var $cli_cpf;
    var $cli_logradouro;
    var $cli_numero;
    var $cli_complemento;
    var $cli_bairro;
    var $cli_cidade;
    var $cli_cep;
    var $cli_uf;
    var $usu_status;
    var $usu_erroLogin;
    var $usu_dataBloqueio;
    var $cli_dataCadastro;
    var $tabela = 'clientes';

    public function __construct() {
        parent::__construct();
    }

    public function inserir($dados) {
        $dados['cli_senha'] = $this->encryption->encrypt($dados['cli_senha']);

        $this->db->set($dados)->insert($this->tabela);
        return $this->db->insert_id();
    }

    public function update($dados, $id) {
        if ($dados['cli_senha'] != '') {
            $dados['cli_senha'] = $this->encryption->encrypt($dados['cli_senha']);
        } else {
            unset($dados['cli_senha']);
        }

        $this->db->where('cli_id', $id);
        $this->db->set($dados)->update($this->tabela);
    }

    public function update2($dados, $id) {
        $this->db
            ->where('cli_id', $id)
            ->set($dados)
            ->update($this->tabela);
    }

    function contaRegistros() {
        return $this->db->count_all_results($this->tabela);
    }

    public function delete($id) {
        return $this->db->delete('clientes', array('cli_id' => $id));
    }

    public function all($ini, $fim, $post) {
        if (isset($post['cli_nome']) && $post['cli_nome'] != '') {
            $this->db->like('cli_nome', $post['cli_nome']);
        }

        $dados = $this->db
            ->order_by('cli_nome')
            ->get($this->tabela, $fim, $ini);

        return $dados;
    }

    public function getById($id) {
        $this->db->where('cli_id', $id);
        return $this->db->get($this->tabela)->row();
    }

    public function getArray() {
        $result = array();
        $dados = $this->db->order_by('cli_nome')->get($this->tabela)->result_array();
        $result[''] = 'Selecione!';
        foreach ($dados as $dado) {
            $result[$dado['cli_id']] = strtoupper($dado['cli_nome']);
        }
        return $result;
    }

    public function getIndicados($idCliente) {
        return $this->db
            ->where('cli_idIndicado', $idCliente)
            ->get($this->tabela);
    }

    public function insertDoc($dados) {
        $this->db->set($dados)->insert('cliente_docs');
        return $this->db->insert_id();
    }

    public function getByEmail($email) {
        return $this->db
            ->where('cli_email', $email)
            ->get($this->tabela)->row();
    }
}
