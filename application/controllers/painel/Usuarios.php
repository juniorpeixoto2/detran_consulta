<?php

/** CRUD Controller para usuarios* */
class Usuarios extends CI_Controller {

    private $_tpl = 'painel/indexPainel.php';
    private $dados = array();

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('Util', 'pagination', 'form_validation'));
        $this->auth->check_logged($this->router->class, $this->router->method);
        $this->load->model('usuariosmodel', '', true);
        $this->load->model('perfismodel', '', true);
    }

    /** Lista usuarios * */
    public function index($inicio = 0) {
        $maximo = 10;
        $config['base_url'] = site_url('/painel/usuarios/index');
        $config['total_rows'] = $this->usuariosmodel->contaRegistros($this->input->post());
        $config['per_page'] = $maximo;
        $this->pagination->initialize($config);
        $this->dados['paginacao'] = $this->pagination->create_links();

        $this->dados['dados'] = $this->usuariosmodel->all($inicio, $maximo, $this->input->post());
        $this->dados['post'] = $this->input->post();
        $this->dados['titulo'] = 'usuarios';
        $this->dados['pagina'] = 'painel/usuarios/usuarios_list';
        $this->load->view($this->_tpl, $this->dados);
    }

    public function criar() {
        $this->form_validation->set_rules('usu_nome', 'Nome', 'required', $this->util->mensagens());
        $this->form_validation->set_rules('usu_email', 'E-mail', 'required|valid_email|is_unique[usuarios.usu_email]', $this->util->mensagens());
        if ($this->form_validation->run() == TRUE) {
            $post = $this->input->post();
            $idPerfil = $post['perfil'];
            unset($post['perfil']);
            $idUsuario = $this->usuariosmodel->inserir($post);

            $dadosPerfil = array(
                'up_idUsuario' => $idUsuario,
                'up_idPerfil' => $idPerfil,
            );
            $this->usuariosmodel->insertPerfil($dadosPerfil);
            echo "<script>window.location.href='" . site_url() . "/painel/usuarios/'</script>";
        } else {
            $this->dados['object'] = $this->usuariosmodel;
            $this->dados['perfis'] = $this->perfismodel->getArray();
            $this->dados['pagina'] = 'painel/usuarios/usuarios_novo';
            $this->dados['titulo'] = 'usuarios ';
            $this->load->view($this->_tpl, $this->dados);
        }
    }

    public function editar($id) {
        $perfilusuario = $this->usuariosmodel->getPerfUsuario($id);

        /* edit uniq */
        $original_value = $this->db->where('usu_id', $id)->get('usuarios')->row()->usu_email;
        if ($this->input->post('usu_email') != $original_value) {
            $is_unique = '|is_unique[usuarios.usu_email]';
        } else {
            $is_unique = '';
        }
        /*  */

        //$this->load->helper('security');

        $this->form_validation->set_rules('usu_email', 'E-mail', 'required|valid_email|trim' . $is_unique, $this->util->mensagens());
        if ($this->form_validation->run() == TRUE) {
            $post = $this->input->post();
            $idPerfil = $post['perfil'];
            unset($post['perfil']);
            $this->usuariosmodel->update($post, $id);

            $dadosPerfil = array(
                'up_idUsuario' => $id,
                'up_idPerfil' => $idPerfil,
            );
            $this->usuariosmodel->updatePerfil($dadosPerfil, $perfilusuario->up_id);
            echo "<script>window.location.href = '" . site_url() . "/painel/usuarios/'</script>";
            return;
        } else {
            $this->dados['perfil'] = $perfilusuario;
            $this->dados['perfis'] = $this->perfismodel->getArray();
            $this->dados['object'] = $this->usuariosmodel->getById($id);
            $this->dados['pagina'] = 'painel/usuarios/usuarios_edit';
            $this->dados['titulo'] = 'usuarios ';
            $this->load->view($this->_tpl, $this->dados);
        }
    }

    public function delete($id) {
        $response = null;
        if ($_POST && isset($_POST['agree']) && $_POST['agree'] == 'Sim') {
            $response = $this->usuariosmodel->delete($id);
            echo "<script>window.location.href = '" . site_url() . "/painel/usuarios/'</script>";
            return;
        } else {
            if ($_POST) {
                redirect('usuarios');
                return;
            }
            $object = $this->usuariosmodel->getById($id);
        }

        $this->dados['pagina'] = 'painel/usuarios/usuarios_del';
        $this->dados['titulo'] = 'usuarios ';
        $this->dados['object'] = $object;
        $this->dados['response'] = $response;
        $this->dados['id'] = $id;
        $this->load->view($this->_tpl, $this->dados);
    }

    public function pdf() {
        /*
          ini_set('max_execution_time', 3000);
         */
        $this->load->library('pdf');
        $mpdf = $this->pdf->load([
            'mode' => 'utf-8',
            'format' => 'A4'
        ]);
        
        //$html = $this->load->view('testePdf', $this->dados, true);
        
        $mpdf->WriteHTML("Hello World!");
        //$mpdf->WriteHTML($html);
        $mpdf->Output();


    }

}
