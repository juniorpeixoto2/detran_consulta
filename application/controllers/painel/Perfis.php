<?php

/** CRUD Controller para perfis* */
class Perfis extends CI_Controller {

    private $_tpl = 'painel/indexPainel.php';
    private $dados = array();

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('Util', 'pagination', 'form_validation'));
        $this->auth->check_logged($this->router->class, $this->router->method);
        $this->load->model('perfismodel', '', true);
        $this->load->model('metodosmodel', '', true);
    }

    /** Lista perfis * */
    public function index($inicio = 0) {
        $maximo = $this->input->post() ? '0' : '10';
        $config['cur_tag_open'] = "<a class='' style='background:#337ab7; color: white'>";
        $config['cur_tag_close'] = '</a>';
        $config['base_url'] = site_url('/painel/perfis/index');
        $config['total_rows'] = $this->perfismodel->contaRegistros();
        $config['per_page'] = $maximo;
        $this->pagination->initialize($config);
        $this->dados['paginacao'] = $this->pagination->create_links();

        $this->dados['dados'] = $this->perfismodel->all($inicio, $maximo, $this->input->post());
        $this->dados['pagina'] = '/painel/perfis/perfis_list';
        $this->dados['post'] = $this->input->post();
        $this->dados['titulo'] = 'perfis';
        $this->load->view($this->_tpl, $this->dados);
    }

    /** Cria novo(a)  * */
    public function criar() {
        $this->form_validation->set_rules('per_nome', 'per_nome', 'required', array('required' => 'O Campo {field} é Obrigatório'));
        if ($this->form_validation->run() == TRUE) {
            $post = $this->input->post();
            $this->perfismodel->inserir($post);
            echo "<script>window.location.href='" . site_url() . "/painel/perfis/'</script>";
        } else {
            $this->dados['object'] = $this->perfismodel;
            $this->dados['pagina'] = '/painel/perfis/perfis_novo';
            $this->dados['titulo'] = 'perfis ';
            $this->load->view($this->_tpl, $this->dados);
        }
    }

    public function editar($id) {
        if ($this->input->post()) {
            $this->perfismodel->update($this->input->post(), $id);
            echo "<script>window.location.href = '" . site_url() . "/painel/perfis/'</script>";
            return;
        }
        $this->dados['object'] = $this->perfismodel->getById($id);
        $this->dados['pagina'] = '/painel/perfis/perfis_edit';
        $this->dados['titulo'] = 'perfis ';
        $this->load->view($this->_tpl, $this->dados);
    }

    public function permissoes($idPerfil) {
        if ($this->input->post()) {
            $this->perfismodel->updatePerfilPermissoes($this->input->post(), $idPerfil);
            echo "<script>window.location.href = '" . site_url() . "/painel/perfis/'</script>";
            return;
        } else {

            $this->dados['classes'] = $this->metodosmodel->listarClasses();
            $this->dados['metodos'] = $this->metodosmodel->listar();
            $this->dados['permissoes'] = $this->perfismodel->permissoes($idPerfil);
            $this->dados['idPerfil'] = $idPerfil;

            $this->dados['pagina'] = '/painel/perfis/permissoes';
            $this->dados['titulo'] = 'perfis ';
            $this->load->view($this->_tpl, $this->dados);
        }
    }

    public function delete($id) {
        $response = null;



        if ($_POST && isset($_POST['agree']) && $_POST['agree'] == 'Sim') {
            $response = $this->perfismodel->delete($id);
            echo "<script>window.location.href = '" . site_url() . "/painel/perfis/'</script>";
            return;
        } else {
            if ($_POST) {
                redirect('/painel/perfis');
                return;
            }
            $object = $this->perfismodel->getById($id);
        }

        $this->dados['pagina'] = '/painel/perfis/perfis_del';
        $this->dados['titulo'] = 'perfis ';
        $this->dados['object'] = $object;
        $this->dados['response'] = $response;
        $this->dados['id'] = $id;
        $this->load->view($this->_tpl, $this->dados);
    }

}
