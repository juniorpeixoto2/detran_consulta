<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Adm extends CI_Controller {

    private $_tpl = 'site/indexSite.php';
    private $dados = array();

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('Util', 'pagination'));
        $this->load->model('usuariosmodel', '', true);
    }

    public function index() {
        if ($this->input->post()) {
            $this->logaAdm();
            /*
              $post = $this->input->post();
              $perfil = $post['perfil'];
              if ($perfil == 'administrador') {
              $this->logaAdm();
              } elseif ($perfil == 'cliente') {
              $this->logaCliente();
              }
             *
             */
        } else {
            $this->dados['titulo'] = 'login';
            $this->dados['pagina'] = 'login';
            $this->load->view('login', $this->dados);
        }
    }

    private function logaAdm() {
        $email = addslashes($this->input->post('email', true));
        $senha = addslashes($this->input->post('senha', true));

        if ($email == "" || $senha == "") {
            //echo 'erro1';
            $this->session->sess_destroy();
            echo "<script>alert('Dados Incorretos');window.location.href='" . site_url('adm') . "'</script>";
            exit();
        }


        $usuarios = $this->db->where('usu_email', $email)->get('usuarios');
        if ($usuarios->num_rows() == 0) {
            //echo 'nao existe';
            $this->session->sess_destroy();
            echo "<script>alert('E-mail ou Senha Incorretos');window.location.href='" . site_url('adm') . "'</script>";
            exit();
        } else {
            $usuario = $usuarios->row();
            $idUsuario = $usuario->usu_id;
            $senhaBanco = $this->encryption->decrypt($usuario->usu_senha);
            $tentativas = $usuario->usu_erroLogin;
            $tempoBloquei = 10;

            if ($usuario->usu_status != 'ATIVO') {
                $this->session->sess_destroy();
                echo "<script>alert('E-mail ou Senha Incorretos.');window.location.href='" . site_url('adm') . "'</script>";
                exit();
            }

            //echo 'Tentativas: ' . $tentativas . '<hr>';
            if ($tentativas > 5) {
                $agora = strtotime('NOW');
                $dataBloqueio = strtotime($usuario->usu_dataBloqueio);
                $decorrido = $agora - $dataBloqueio;

                //echo 'Decorrido: ' . $decorrido . '<hr>';
                //var_dump($dataBloqueio);
                if ($decorrido < $tempoBloquei) {
                    //echo 'erro';
                    $this->session->sess_destroy();
                    echo "<script>alert('Muitas tentativas de acesso. Tente novamente em " . ($tempoBloquei - $decorrido) . " segundos.');window.location.href='" . site_url() . "'</script>";
                    exit();
                } else {
                    //echo 'resetado<hr>';
                    $dados = array(
                        'usu_erroLogin' => 3,
                        'usu_dataBloqueio' => NULL,
                    );
                    $this->usuariosmodel->update2($dados, $idUsuario);
                    $tentativas = 3;
                }
            }

            //echo $senhaBanco . ' == ' . $senha . '<hr>';
            if (trim($senhaBanco) == trim($senha)) {

                $dados = array(
                    'usu_erroLogin' => 0,
                    'usu_dataBloqueio' => NULL,
                );
                $this->usuariosmodel->update2($dados, $idUsuario);

                $perfil = $this->usuariosmodel->getPerfUsuario($idUsuario);
                $login = array(
                    'logado' => 'logado',
                    'tipo' => 'usuario',
                    'id' => $idUsuario,
                    'nome' => $usuario->usu_nome,
                    'email' => $usuario->usu_email,
                    'idPerfil' => $perfil->up_idPerfil,
                );
                $this->session->set_userdata($login);
                echo "<script>window.location.href='" . site_url('painel/painel') . "'</script>";
            } else {
                //echo 'senha errada';
                $this->session->sess_destroy();
                $dados = array(
                    'usu_erroLogin' => $tentativas + 1,
                    'usu_dataBloqueio' => $tentativas + 1 > 5 ? date('Y-m-d H:i:s') : NULL,
                );
                $this->usuariosmodel->update2($dados, $idUsuario);
                echo "<script>alert('E-mail ou Senha Incorretos');window.location.href='" . site_url() . "'</script>";
                exit();
            }
        }
    }
}
