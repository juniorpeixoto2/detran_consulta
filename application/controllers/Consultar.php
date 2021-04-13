<?php

/** CRUD Controller para consultas**/
class Consultar extends CI_Controller {

    private $_tpl = 'painel/indexPainel.php';
    private $dados = array();

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('Util', 'pagination', 'form_validation'));
        $this->auth->check_logged($this->router->class, $this->router->method);

        $this->load->model('consultasmodel', '', true);
    }


    public function consulta1() {
        if ($this->input->post()) {
            $post = $this->input->post();





            // $this->consultasmodel->inserir($post);
            // echo "<script>window.location.href='" . site_url() . "/consultas/'</script>";
        } else {
            $this->dados['object'] = $this->consultasmodel;
            $this->dados['pagina'] = 'consultar/consulta1';
            $this->dados['titulo'] = 'Consulta 1';
            $this->load->view($this->_tpl, $this->dados);
        }
    }
}
