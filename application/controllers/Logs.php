<?php

/** CRUD Controller para logs* */
class Logs extends CI_Controller {

    private $_tpl = 'painel/indexPainel.php';
    private $dados = array();

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('Util', 'pagination', 'form_validation'));
    }

    /** Lista logs * */
    public function index($inicio = 0) {
        $this->auth->check_logged('parametros', 'index');
        $this->dados['pagina'] = 'logs/logs_sistema';
        $this->dados['titulo'] = 'logs ';
        $this->load->view($this->_tpl, $this->dados);
    }

    public function load($arquivo) {
        $this->auth->check_logged('parametros', 'index');
        $this->dados['arquivo'] = $arquivo;
        $this->dados['pagina'] = 'logs/load';
        $this->dados['titulo'] = 'logs ';
        $this->load->view($this->_tpl, $this->dados);
    }
}
