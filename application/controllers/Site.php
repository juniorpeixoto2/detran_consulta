<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller {

    private $tpl = 'site/indexSite.php';
    private $tpl_login = 'site/indexLogin.php';
    private $dados = array();
    private $parametros;

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('Util', 'pagination', 'form_validation', 'email'));

        $this->load->model('clientesmodel', '', true);
        $this->load->model('parametrosmodel', '', true);

        $this->parametros = $this->parametrosmodel->getById(1);
        $this->dados['parametros'] = $this->parametros;
    }

    public function index() {
        $this->dados['titulo'] = 'home';
        $this->dados['pagina'] = 'site/home';
        $this->load->view($this->tpl, $this->dados);
    }


    public function cursos() {
        $this->dados['titulo'] = 'quem_somos';
        $this->dados['pagina'] = 'site/invest';
        $this->load->view('site/cursos', $this->dados);
    }

    public function invest() {
        $this->dados['titulo'] = 'quem_somos';
        $this->dados['pagina'] = 'site/invest';
        $this->load->view('site/invest', $this->dados);
    }


    public function bolsa() {
        $this->dados['titulo'] = 'quem_somos';
        $this->dados['pagina'] = 'site/bolsa';
        $this->load->view('site/bolsa', $this->dados);
    }


    public function quem_somos() {
        $this->dados['titulo'] = 'quem_somos';
        $this->dados['pagina'] = 'site/quem_somos';
        $this->load->view('site/quem_somos', $this->dados);
    }

    public function cadastro() {
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
                'cli_status' => 'pendente',
            ];
            $this->clientesmodel->inserir($dados_usuario);

            $this->load->library('emails');

            $destinatario = $post['email'];
            $assunto = 'Realize Invest - Cadastro';

            $mensagem = ""
                . "Cadastro Realizado"
                . "<br>"
                . "<br>Nome: " . $post['nome']
                . "<br>E-mail: " . $post['email']
                . "<br>"
                . "<br>"
                . "";

            $this->emails->enviar($destinatario, $assunto, $mensagem);

            echo "<script>alert('CADASTRO REALIZADO');window.location.href='" . site_url('site/login') . "'</script>";
            return;
        } else {
            // $this->dados['nome_indicado'] = $nome_indicado;
            $this->dados['object'] = $this->clientesmodel;
            $this->dados['pagina'] = 'site/cadastro';
            $this->dados['titulo'] = 'clientes ';
            $this->load->view('site/cadastro', $this->dados);
        }
    }

    public function login() {
        $this->form_validation->set_rules('email', 'E-MAIL', 'required', $this->util->mensagens());
        $this->form_validation->set_rules('senha', 'SENHA', 'required', $this->util->mensagens());
        if ($this->form_validation->run() == TRUE) {
            $this->logaCliente();
        } else {
            $this->dados['titulo'] = 'login cliente';
            $this->dados['pagina'] = 'site/login';
            $this->load->view('site/login', $this->dados);
        }
    }

    private function logaCliente() {
        $email = addslashes($this->input->post('email', true));
        $senha = addslashes($this->input->post('senha', true));

        if ($email == "" || $senha == "") {
            //echo 'erro1';
            $this->session->sess_destroy();
            echo "<script>alert('Dados Incorretos');window.location.href='" . site_url('site/login') . "'</script>";
            exit();
        }

        $usuarios = $this->db
            ->where('cli_email', $email)
            //->or_where('cli_usuario', $email)
            ->get('clientes');
        if ($usuarios->num_rows() == 0) {
            //echo 'nao existe';
            $this->session->sess_destroy();
            echo "<script>alert('E-mail ou Senha Incorretos');window.location.href='" . site_url('site/login') . "'</script>";
            exit();
        } else {
            $usuario = $usuarios->row();
            $idUsuario = $usuario->cli_id;
            $senhaBanco = $this->encryption->decrypt($usuario->cli_senha);
            $tentativas = $usuario->cli_erroLogin;
            $tempoBloquei = 300;

            if ($usuario->cli_status != 'ativo') {
                $this->session->sess_destroy();
                echo "<script>alert('Sua conta não está ativada.');window.location.href='" . site_url('site/login') . "'</script>";
                exit();
            }
            //echo '1';
            //echo 'Tentativas: ' . $tentativas . '<hr>';
            $maxTentativas = 4;
            if ($tentativas > $maxTentativas) {
                $agora = strtotime('NOW');
                $dataBloqueio = strtotime($usuario->cli_dataBloqueio);
                $decorrido = $agora - $dataBloqueio;

                //echo 'Decorrido: ' . $decorrido . ' -' . $tempoBloquei . '<hr>';
                if ($decorrido < $tempoBloquei) {
                    echo 'erro';
                    $this->session->sess_destroy();
                    echo "<script>alert('Muitas tentativas de acesso. Tente novamente em " . ($tempoBloquei - $decorrido) . " segundos.');window.location.href='" . site_url('site/login') . "'</script>";
                    exit();
                } else {
                    //echo 'resetado<hr>';
                    $dados = array(
                        'cli_erroLogin' => 3,
                        'cli_dataBloqueio' => NULL,
                    );
                    $this->db->where('cli_id', $idUsuario)->set($dados)->update('clientes');
                    $tentativas = 3;
                }
            }

            //echo $senhaBanco . ' == ' . $senha . '<hr>';
            if (trim($senhaBanco) == trim($senha)) {

                $dados = array(
                    'cli_erroLogin' => 0,
                    'cli_dataBloqueio' => NULL,
                );
                $this->db->where('cli_id', $idUsuario)->set($dados)->update('clientes');

                $login = array(
                    'logado' => 'logado',
                    'tipoCliente' => 'cliente',
                    'id' => $idUsuario,
                    'nome' => $usuario->cli_nome,
                    'email' => $usuario->cli_email,
                    //'usuario' => $usuario->cli_usuario,
                );

                $this->mes_anomodel->gera_ano($idUsuario, date('Y'));

                $this->session->set_userdata($login);
                echo "<script>window.location.href='" . site_url('cliente') . "'</script>";
                return;
            } else {
                //echo 'senha errada';

                $this->session->sess_destroy();
                $dados = array(
                    'cli_erroLogin' => $tentativas + 1,
                    'cli_dataBloqueio' => $tentativas + 1 > $maxTentativas ? date('Y-m-d H:i:s') : NULL,
                );
                $this->db->where('cli_id', $idUsuario)->set($dados)->update('clientes');
                echo "<script>alert('E-mail ou Senha Incorretos');window.location.href='" . site_url('site/login') . "'</script>";
                exit();
            }
        }
    }

    public function getCep($cep) {
        header('Content-type: application/json');
        $cep = str_replace('.', '', $cep);
        $cep = str_replace('-', '', $cep);
        $result = ($this->util->buscarCEP($cep));
        echo json_encode($result);
    }

    public function recupera() {
        if ($this->input->post()) {
            $email = $this->input->post('email');

            $cliente = $this->clientesmodel->getByEmail($email);

            if (!$cliente) {
                echo "<script>alert('E-mail Não Encontrado');window.location.href='" . site_url('site/recupera') . "'</script>";
                return;
            }

            $this->load->library('emails');

            $destinatario = $cliente->cli_email;
            $assunto = 'Realize Invest - Recuperação de Senha';

            $mensagem = ""
                . "Você Solicitou a Recuperação de Senha"
                . "<br>"
                . "<br>Nome: " . $cliente->cli_nome
                . "<br>E-mail: " . $cliente->cli_email
                . "<br>"
                . "<br>Senha: " . $this->encryption->decrypt($cliente->cli_senha)
                . "<br>"

                . "<br>"
                . "";

            $this->emails->enviar($destinatario, $assunto, $mensagem);
            echo "<script>alert('Verifique o Seu E-mail');window.location.href='" . site_url() . "'</script>";
            return;
        } else {
            $this->dados['titulo'] = 'home';
            $this->dados['pagina'] = 'site/recupera';
            $this->load->view($this->tpl, $this->dados);
        }
    }

    public function check_cpf($cpf) {
        return true;
        return $this->util->valida_cpf($cpf);
    }

    public function check_usuario($usuario) {
        if (preg_match('/[^a-z_\-0-9]/i', $usuario)) {
            return false;
        } else {
            return true;
        }
    }

    public function contato() {
        if ($this->input->post()) {
            $post = $this->input->post();
            $this->load->library('emails');

            $destinatario = $post['email'];
            $assunto = $post['assunto'];

            $mensagem = ""
                . "Você entrou em Contato"
                . "<br>"
                . "<br>Nome: " . $post['nome']
                . "<br>E-mail: " . $post['email']
                . "<br>Assunto: " . $post['assunto']
                . "<br>Mensagem: " . $post['mensagem']
                . "<br>"
                . "";

            $this->emails->enviar($destinatario, $assunto, $mensagem);

            echo "<script>alert('E-mail enviado');window.location.href='" . site_url() . "'</script>";
            return;
        } else {
            $this->dados['pagina'] = 'site/contato';
            $this->dados['titulo'] = 'clientes ';
            $this->load->view($this->tpl, $this->dados);
        }
    }
}
