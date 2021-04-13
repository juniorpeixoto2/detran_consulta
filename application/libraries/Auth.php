<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth {

    private $ci;
    private $dadosUsuario;

    public function __construct() {
        $this->ci = &get_instance();
        $this->dadosUsuario = $this->ci->session->userdata();
    }

    //$this->auth->check_logged($this->router->class , $this->router->method);
    function check_logged($classe, $metodo) {
        if ($this->ci->session->userdata('logado') == 'logado' && $this->ci->session->userdata('tipo') == 'usuario') {
            $this->CI = &get_instance();

            $result = $this->CI->db->where(array('met_classe' => $classe, 'met_metodo' => $metodo))->get('metodos');
            if ($result->num_rows() == 0) {
                $data = array(
                    'met_classe' => $classe,
                    'met_metodo' => $metodo,
                    'met_apelido' => $classe . '/' . $metodo,
                    'met_privado' => 1
                );
                $this->CI->db->insert('metodos', $data);
                //echo '4';
                echo "<script>window.location.href='" . site_url('painel/painel/acesso') . "/$classe/$metodo'</script>";
                exit();
            } else {
                //Se ja existir tras as informacoes de publico ou privado
                if ($result->row('met_privado') == 0) {
                    // Escapa da validacao e mostra o metodo.
                    return false;
                } else {
                    $metodo = $result->row();

                    // Se for privado, verifica o login
                    $nome = $this->ci->session->userdata('nome');
                    $logged_in = $this->ci->session->userdata('logado');
                    $id_usuario = $this->ci->session->userdata('id');
                    $idMetodo = $metodo->met_id;
                    $idPerfil = $this->ci->session->userdata('idPerfil');

                    // Se o usuario estiver logado vai verificar se tem permissao na tabela.
                    if ($nome && $logged_in && $id_usuario && $idPerfil) {
                        $dadosPerfil = $this->CI->db->select('pp_idMetodo')->get_where('perfil_permissoes', array('pp_idPerfil' => $idPerfil))->result_array();
                        $permitidos = array_column($dadosPerfil, 'pp_idMetodo');
                        if (in_array($idMetodo, $permitidos)) {
                            //echo 'ok';
                            //exit();
                            return true;
                        } else {
                            echo '3';
                            echo "<script>window.location.href='" . site_url('painel/painel/acesso/' . $classe . '/' . $metodo->met_metodo) . "'</script>";
                            exit();
                        }
                    } else {  // Se nao estiver logado, sera redirecionado para o login.
                        //echo '2';
                        echo "<script>window.location.href='" . site_url() . "'</script>";
                        exit();
                    }
                }
            }
        } else {
            //echo '1';
            echo "<script>window.location.href='" . site_url() . "'</script>";
            exit();
        }
    }

    public function check_cliente() {
        $dadosUsuario = $this->ci->session->userdata();
        if (isset($dadosUsuario['logado'])) {
            $logado = $this->dadosUsuario['logado'];
            $tipo = $this->dadosUsuario['tipoCliente'];
            if ($logado === 'logado' && $tipo === 'cliente') {
                //echo 'ok';
            } else {
                //echo 'erro1';
                $this->ci->session->sess_destroy();
                echo "<script>window.location.href='" . site_url('site/login') . "'</script>";
                exit();
            }
        } else {
            //echo 'erro2';
            //$this->ci->session->sess_destroy();
            echo "<script>window.location.href='" . site_url('site/login') . "'</script>";
            exit();
        }
    }

    function check_menu($classe, $metodo) {
        $this->CI = &get_instance();
        $sql = "SELECT SQL_CACHE
                count(sys_permissoes.id) as found
                FROM
                sys_permissoes
                INNER JOIN sys_metodos
                ON sys_metodos.id = sys_permissoes.id_metodo
                WHERE id_usuario = '" . $this->ci->session->userdata('id_usuario') . "'
                AND classe = '" . $classe . "'
                AND metodo = '" . $metodo . "'";
        $query = $this->CI->db->query($sql);
        $result = $query->result();
        return $result[0]->found;
    }
}
