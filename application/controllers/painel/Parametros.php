<?php

/** CRUD Controller para parametros* */
class Parametros extends CI_Controller {

    private $_tpl = 'painel/indexPainel.php';
    private $dados = array();

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('Util', 'pagination', 'form_validation'));

        $this->load->model('parametrosmodel', '', true);
    }

    /** Lista parametros * */
    public function index() {
        $this->auth->check_logged($this->router->class, 'index');
        $id = 1;
        if ($this->input->post()) {
            $this->parametrosmodel->update($this->input->post(), $id);
            echo "<script>window.location.href = '" . site_url() . "/painel/parametros/'</script>";
            return;
        }
        $this->dados['object'] = $this->parametrosmodel->getById($id);
        $this->dados['pagina'] = 'painel/parametros/parametros_edit';
        $this->dados['titulo'] = 'parametros ';
        $this->load->view($this->_tpl, $this->dados);
    }
}
