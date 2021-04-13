<?php

/* * * Model logs * */

class Logsmodel extends CI_Model {

    /**  Campos* */
    var $log_id;
    var $log_idUsuario;
    var $log_tipo;
    var $log_conteudo;
    var $log_tabela;
    var $log_sql;
    var $log_status;
    var $log_dataCadastro;
    var $tabela = 'logs';

    public function __construct() {
        parent::__construct();
    }

    public function inserirLog($idUsuario, $tipo, $conteudo, $dados) {
        /* tipos: rede pagamento  */
        $this->load->library('user_agent');


        $dadosAcesso = [
            'ip' => $this->input->ip_address(),
            'browser' => $this->agent->browser(),
            'browserVersion' => $this->agent->version(),
            'platform' => $this->agent->platform(),
        ];

        //'ip' => $this->get_client_ip()

        $dadosLog = [
            'log_idUsuario' => $idUsuario,
            'log_tipo' => $tipo,
            'log_conteudo' => $conteudo,
            'log_idCliente' => isset($dados['idCliente']) ? $dados['idCliente'] : null,
            'log_tabela' => isset($dados['tabela']) ? $dados['tabela'] : null,
            'log_sql' => isset($dados['sql']) ? $dados['sql'] : null,
            'log_dados' => json_encode($dadosAcesso),
        ];

        //$this->util->prints($dadosLog);
        $this->db->set($dadosLog)->insert($this->tabela);
    }

    function get_client_ip() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   //check ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {   //to check ip is pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    public function getAlterRede($idCliente) {
        $this->db->where('log_idCliente', $idCliente);
        $this->db->where('log_tipo', 'alteracao_rede');
        $dados = $this->db->get($this->tabela);
        return $dados;
    }

    public function inserir($dados) {
        $this->db->set($dados)->insert($this->tabela);
        return $this->db->insert_id();
    }

    public function update($dados, $id) {
        $this->db->where('log_id', $id);
        $this->db->set($dados)->update($this->tabela);
    }

    function contaRegistros() {
        return $this->db->count_all_results($this->tabela);
    }

    public function delete($id) {
        return $this->db->delete('logs', array('log_id' => $id));
    }

    public function all($ini, $fim, $post) {
        if (isset($post['log_idUsuario']) && $post['log_idUsuario'] != '') {
            $this->db->like('log_idUsuario', $post['log_idUsuario']);
        }

        $this->db->order_by('log_dataCadastro', 'desc');
        $dados = $this->db->get($this->tabela, $fim, $ini);

        //echo $this->db->last_query();

        return $dados;
    }

    public function getById($id) {
        $this->db->where('log_id', $id);
        return $this->db->get($this->tabela)->row();
    }

    public function getArray() {
        $result = array();
        $dados = $this->db->order_by('log_idUsuario')->get($this->tabela)->result_array();
        $result[''] = 'Selecione!';
        foreach ($dados as $dado) {
            $result[$dado['log_id']] = strtoupper($dado['log_idUsuario']);
        }
        return $result;
    }

}
