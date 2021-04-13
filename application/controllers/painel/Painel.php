<?php

/** CRUD Controller para alunos* */
class Painel extends CI_Controller {

    private $_tpl = 'painel/indexPainel.php';
    private $dados = array();

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('Util', 'pagination'));
        $this->auth->check_logged($this->router->class, $this->router->method);
    }

    public function index() {
        $this->dados['pagina'] = 'painel/painel';
        $this->dados['titulo'] = 'Painel ';
        $this->load->view($this->_tpl, $this->dados);
    }

    function sair() {
        $this->session->sess_destroy();
        echo "<script>window.location.href='" . site_url() . "'</script>";
        exit;
    }

    function acesso() {
        $this->dados['titulo'] = 'Painel ';
        $this->dados['pagina'] = 'painel/acesso';
        $this->load->view($this->_tpl, $this->dados);
    }
}
