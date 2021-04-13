<?php

/** CRUD Controller para clientes* */
class Clientes extends CI_Controller {

    private $_tpl = 'painel/indexPainel.php';
    private $dados = array();

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('Util', 'pagination', 'form_validation'));

        $this->load->model('clientesmodel', '', true);
        $this->load->model('financeiromodel', '', true);
        $this->load->model('mes_anomodel', '', true);
        $this->load->model('tradesmodel', '', true);
    }

    /** Lista clientes * */
    public function index($inicio = 0) {
        $this->auth->check_logged($this->router->class, $this->router->method);
        $maximo = $this->input->post() ? '0' : '10';
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
        $config['attributes'] = array('class' => 'page-link');
        $config['base_url'] = site_url('/clientes/index');
        $config['total_rows'] = $this->clientesmodel->contaRegistros();
        $config['per_page'] = $maximo;
        $this->pagination->initialize($config);
        $this->dados['paginacao'] = $this->pagination->create_links();

        $this->dados['dados'] = $this->clientesmodel->all($inicio, $maximo, $this->input->post());
        $this->dados['pagina'] = 'clientes/clientes_list';
        $this->dados['post'] = $this->input->post();
        $this->dados['titulo'] = 'clientes';
        $this->load->view($this->_tpl, $this->dados);
    }

    /** Cria novo(a)  * */
    public function criar() {
        $this->auth->check_logged($this->router->class, $this->router->method);

        $this->form_validation->set_rules('nome', 'Nome', 'required', $this->util->mensagens());
        $this->form_validation->set_rules('email', 'E-mail', 'required|is_unique[clientes.cli_email]', $this->util->mensagens());
        $this->form_validation->set_rules('cpf', 'CPF', 'callback_check_cpf|required|is_unique[clientes.cli_cpf]', $this->util->mensagens() + ['check_cpf' => 'CPF INVÁLIDO']);
        $this->form_validation->set_rules('senha', 'SENHA', 'required|min_length[6]', $this->util->mensagens());

        if ($this->form_validation->run() == TRUE) {
            $post = $this->input->post();

            $dados_usuario = [
                'cli_nome' => $post['nome'],
                'cli_cpf' => $post['cpf'],
                'cli_telefone' => $post['fone'],
                'cli_logradouro' => $post['logradouro'],
                'cli_cidade' => $post['cidade'],
                'cli_uf' => $post['uf'],
                'cli_cep' => $post['cep'],
                'cli_email' => $post['email'],
                'cli_senha' => $post['senha'],
            ];

            $this->clientesmodel->inserir($dados_usuario);
            echo "<script>window.location.href='" . site_url() . "/clientes/'</script>";
            return;
        } else {
            $this->dados['object'] = $this->clientesmodel;
            $this->dados['pagina'] = 'clientes/clientes_novo';
            $this->dados['titulo'] = 'clientes ';
            $this->load->view($this->_tpl, $this->dados);
        }
    }

    public function editar($id) {
        $this->auth->check_logged($this->router->class, $this->router->method);
        $this->dados['object'] = $this->clientesmodel->getById($id);
        $this->dados['id'] = $id;
        $this->dados['tab'] = 'home';
        $this->dados['pagina'] = 'clientes/clientes_home';
        $this->dados['pagina2'] = 'clientes/home';
        $this->dados['titulo'] = 'clientes ';
        $this->load->view($this->_tpl, $this->dados);
    }

    public function indicados($id) {
        $this->auth->check_logged($this->router->class, 'editar');

        $this->dados['indicados'] = $this->clientesmodel->getIndicados($id);

        $this->dados['object'] = $this->clientesmodel->getById($id);
        $this->dados['id'] = $id;
        $this->dados['tab'] = 'indicados';
        $this->dados['pagina'] = 'clientes/clientes_home';
        $this->dados['pagina2'] = 'clientes/indicados';

        $this->dados['titulo'] = 'clientes ';
        $this->load->view($this->_tpl, $this->dados);
    }

    public function indicado($id) {
        $this->auth->check_logged($this->router->class, 'editar');

        $this->dados['clientes'] = $this->clientesmodel->getArray();
        if ($this->input->post()) {
            $post = $this->input->post();
            $this->clientesmodel->update2($post, $id);
            echo "<script>alert('Indicado Alterado');window.location.href = '" . site_url() . "/clientes/indicado/{$id}'</script>";
            return;
        } else {

            $this->dados['object'] = $this->clientesmodel->getById($id);
            $this->dados['id'] = $id;
            $this->dados['tab'] = 'indicado';
            $this->dados['pagina'] = 'clientes/clientes_home';
            $this->dados['pagina2'] = 'clientes/indicado';

            $this->dados['titulo'] = 'clientes ';
            $this->load->view($this->_tpl, $this->dados);
        }
    }

    public function editar_dados($id) {
        $this->auth->check_logged($this->router->class, 'editar');
        if ($this->input->post()) {
            $post = $this->input->post();
            $this->clientesmodel->update($post, $id);
            echo "<script>window.location.href = '" . site_url() . "/clientes/'</script>";
            return;
        } else {
            $this->dados['object'] = $this->clientesmodel->getById($id);
            $this->dados['id'] = $id;
            $this->dados['tab'] = 'editar_dados';
            $this->dados['pagina'] = 'clientes/clientes_home';
            $this->dados['pagina2'] = 'clientes/editar_dados';

            $this->dados['titulo'] = 'clientes ';
            $this->load->view($this->_tpl, $this->dados);
        }
    }

    public function delete($id) {
        $this->auth->check_logged($this->router->class, $this->router->method);
        $response = null;

        if ($_POST && isset($_POST['agree']) && $_POST['agree'] == 'Sim') {
            $response = $this->clientesmodel->delete($id);
            echo "<script>window.location.href = '" . site_url() . "/clientes/'</script>";
            return;
        } else {
            if ($_POST) {
                redirect('clientes');
                return;
            }
            $object = $this->clientesmodel->getById($id);
        }
        $this->dados['pagina'] = 'clientes/clientes_del';
        $this->dados['titulo'] = 'clientes ';
        $this->dados['object'] = $object;
        $this->dados['response'] = $response;
        $this->dados['id'] = $id;
        $this->load->view($this->_tpl, $this->dados);
    }

    public function check_cpf($cpf) {
        $this->auth->check_logged($this->router->class, $this->router->method);
        return $this->util->valida_cpf($cpf);
    }

    public function extrato($id) {
        $this->auth->check_logged($this->router->class, 'editar');

        $saldos = $this->financeiromodel->getAllSaldos($id);
        $this->dados['saldos'] = $saldos;

        $dados = $this->financeiromodel->getByCliente($id);
        $this->dados['dados'] = $dados;


        $this->dados['object'] = $this->clientesmodel->getById($id);
        $this->dados['id'] = $id;
        $this->dados['tab'] = 'extrato';
        $this->dados['pagina'] = 'clientes/clientes_home';
        $this->dados['pagina2'] = 'clientes/extrato';
        $this->dados['titulo'] = 'clientes ';
        $this->load->view($this->_tpl, $this->dados);
    }

    public function trades($id_cliente, $mes = '', $ano = '') {
        $this->dados['object'] = $this->clientesmodel->getById($id_cliente);
        $this->dados['id'] = $id_cliente;
        $this->dados['tab'] = 'trades';
        $this->dados['pagina'] = 'clientes/clientes_home';
        $this->dados['pagina2'] = 'clientes/cliente_trades';


        if ($mes == '') {
            $mes = date('m');
        }
        if ($ano == '') {
            $ano = date('Y');
        }

        $meses_anos = $this->mes_anomodel->getByCliente($id_cliente);
        $this->dados['meses_ano'] = $meses_anos;

        $mes_ano = $this->mes_anomodel->getByCliData($id_cliente, $mes, $ano);
        $this->dados['mes_ano'] = $mes_ano;

        $this->dados['dados'] = $this->tradesmodel->getByClienteMes($id_cliente, $mes, $ano);

        $this->dados['mes'] = $mes;
        $this->dados['ano'] = $ano;



        $this->dados['titulo'] = 'clientes ';
        $this->load->view($this->_tpl, $this->dados);
    }
}
