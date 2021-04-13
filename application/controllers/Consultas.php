<?php

/** CRUD Controller para consultas**/
class Consultas extends CI_Controller {

    private $_tpl = 'painel/indexPainel.php';
    private $dados = array();

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('Util', 'pagination', 'form_validation'));
        $this->auth->check_logged($this->router->class, $this->router->method);

        $this->load->model('consultasmodel', '', true);
    }

    /** Lista consultas * */
    public function index($inicio = 0) {
        $maximo =  $this->input->post() ? '0' : '10';
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
        $config['attributes'] = array('class' => 'page-link');
        $config['base_url'] = site_url('/consultas/index');
        $config['total_rows'] = $this->consultasmodel->contaRegistros();
        $config['per_page'] = $maximo;
        $this->pagination->initialize($config);
        $this->dados['paginacao'] = $this->pagination->create_links();

        $this->dados['dados'] = $this->consultasmodel->all($inicio, $maximo, $this->input->post());
        $this->dados['pagina'] = 'consultas/consultas_list';
        $this->dados['post'] = $this->input->post();
        $this->dados['titulo'] = 'consultas';
        $this->load->view($this->_tpl, $this->dados);
    }

    /** Cria novo(a)  * */
    public function criar() {
        $this->form_validation->set_rules('con_tipo', 'con_tipo', 'required', array('required' => 'O Campo {field} é Obrigatório'));
        if ($this->form_validation->run() == TRUE) {
            $post = $this->input->post();
            $this->consultasmodel->inserir($post);
            echo "<script>window.location.href='" . site_url() . "/consultas/'</script>";
        } else {
            $this->dados['object'] = $this->consultasmodel;
            $this->dados['pagina'] = 'consultas/consultas_novo';
            $this->dados['titulo'] = 'consultas ';
            $this->load->view($this->_tpl, $this->dados);
        }
    }

    public function editar($id) {
        if ($this->input->post()) {
            $post = $this->input->post();
            $this->consultasmodel->update($post, $id);
            echo "<script>window.location.href = '" . site_url() . "/consultas/'</script>";
            return;
        } else {
            $this->dados['object'] = $this->consultasmodel->getById($id);
            $this->dados['pagina'] = 'consultas/consultas_edit';
            $this->dados['titulo'] = 'consultas ';
            $this->load->view($this->_tpl, $this->dados);
        }
    }

    public function delete($id) {
        $response = null;

        if ($_POST && isset($_POST['agree']) && $_POST['agree'] == 'Sim') {
            $response = $this->consultasmodel->delete($id);
            echo "<script>window.location.href = '" . site_url() . "/consultas/'</script>";
            return;
        } else {
            if ($_POST) {
                redirect('consultas');
                return;
            }
            $object = $this->consultasmodel->getById($id);
        }
        $this->dados['pagina'] = 'consultas/consultas_del';
        $this->dados['titulo'] = 'consultas ';
        $this->dados['object'] = $object;
        $this->dados['response'] = $response;
        $this->dados['id'] = $id;
        $this->load->view($this->_tpl, $this->dados);
    }
}
