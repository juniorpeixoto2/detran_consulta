<?php

/** CRUD Controller para metodos* */
class Metodos extends CI_Controller {

    private $_tpl = 'painel/indexPainel.php';
    private $dados = array();

    public function __construct() {
        parent::__construct();
        $this->load->model('metodosmodel', '', true);
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('Util', 'pagination', 'form_validation'));
        $this->auth->check_logged($this->router->class, $this->router->method);
    }

    /** Lista metodos * */
    public function index($inicio = 0) {
        $maximo = $this->input->post() ? '0' : '10';
        $config['cur_tag_open'] = "<a class='' style='background:#337ab7; color: white'>";
        $config['cur_tag_close'] = '</a>';
        $config['base_url'] = site_url('painel/metodos/index');
        $config['total_rows'] = $this->metodosmodel->contaRegistros();
        $config['per_page'] = $maximo;
        $this->pagination->initialize($config);
        $this->dados['paginacao'] = $this->pagination->create_links();

        $this->dados['dados'] = $this->metodosmodel->all($inicio, $maximo, $this->input->post());
        $this->dados['pagina'] = 'painel/metodos/metodos_list';
        $this->dados['post'] = $this->input->post();
        $this->dados['titulo'] = 'metodos';
        $this->load->view($this->_tpl, $this->dados);
    }

    /** Cria novo(a)  * */
    public function criar() {
        $this->form_validation->set_rules('met_classe', 'met_classe', 'required', array('required' => 'O Campo {field} é Obrigatório'));
        if ($this->form_validation->run() == TRUE) {
            $post = $this->input->post();
            $this->metodosmodel->inserir($post);
            echo "<script>window.location.href='" . site_url() . "/painel/metodos/'</script>";
        } else {
            $this->dados['object'] = $this->metodosmodel;
            $this->dados['pagina'] = 'metodos/metodos_novo';
            $this->dados['titulo'] = 'metodos ';
            $this->load->view($this->_tpl, $this->dados);
        }
    }

    public function editar($id) {
        if ($this->input->post()) {
            $this->metodosmodel->update($this->input->post(), $id);
            echo "<script>window.location.href = '" . site_url() . "/painel/metodos/'</script>";
            return;
        }
        $this->dados['object'] = $this->metodosmodel->getById($id);
        $this->dados['pagina'] = 'metodos/metodos_edit';
        $this->dados['titulo'] = 'metodos ';
        $this->load->view($this->_tpl, $this->dados);
    }

    public function delete($id) {
        $response = null;



        if ($_POST && isset($_POST['agree']) && $_POST['agree'] == 'Sim') {
            $response = $this->metodosmodel->delete($id);
            echo "<script>window.location.href = '" . site_url() . "/painel/metodos/'</script>";
            return;
        } else {
            if ($_POST) {
                redirect('/painel/metodos');
                return;
            }
            $object = $this->metodosmodel->getById($id);
        }

        $this->dados['pagina'] = '/painelmetodos/metodos_del';
        $this->dados['titulo'] = 'metodos ';
        $this->dados['object'] = $object;
        $this->dados['response'] = $response;
        $this->dados['id'] = $id;
        $this->load->view($this->_tpl, $this->dados);
    }

    public function imprimir() {
        $this->dados['object'] = $this->db->get('metodos');
        $this->dados['pagina'] = 'painel/metodos/imprimir';
        $this->dados['titulo'] = 'metodos ';
        $this->load->view('painel/metodos/imprimir', $this->dados);
    }

}
