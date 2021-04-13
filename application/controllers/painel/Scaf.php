<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Scaf extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library(array('Util', 'Scafn'));
        //$this->load->database($this->util->base());
        $this->load->helper(array('form', 'url'));
        $this->load->helper('file');
        $this->load->helper('directory');
        $this->load->model('modelscaf');
    }

    public function index($db = '') {
    	$this->auth->check_logged($this->router->class, $this->router->method);
        $dados['db'] = $db;
        $this->load->view('painel/scaf', $dados);
    }

    public function gerar($tabela) {
    	$this->auth->check_logged($this->router->class, 'index');
        $db = '';
        $pasta = BASEPATH . '../application/';

        $tabelaUcf = ucfirst($tabela);
        $campos = $this->db->list_fields($tabela);

        $dadosController = $this->scafn->controller($tabela, $campos);
        if (!write_file($pasta . 'controllers/' . $tabelaUcf . '.php', $dadosController)) {
            echo 'Unable to write the file - controller<hr>';
        } else {
            echo 'Controller - Ok!<hr>';
        }

        $dadosModel = $this->scafn->model($tabela, $campos);
        if (!write_file($pasta . 'models/' . $tabelaUcf . 'model.php', $dadosModel)) {
            echo 'Unable to write the file<hr>';
        } else {
            echo 'Model Ok!<hr>';
        }

        $pastaView = $pasta . "views/" . strtolower($tabela);
        if (!is_dir($pastaView)) {
            mkdir($pasta . "views/" . strtolower($tabela), 0777, TRUE);
        }

        $dadosVlist = $this->scafn->vList($tabela, $campos);
        if (!write_file($pastaView . '/' . $tabela . "_list.php", $dadosVlist)) {
            echo 'Unable to write the file - View Lista<hr>';
        } else {
            echo 'View - Lista ok !<hr>';
        }

        $dadosVForm = $this->scafn->vForm($tabela, $campos);
        if (!write_file($pastaView . '/' . $tabela . "_edit.php", $dadosVForm)) {
            echo 'Unable to write the file - View<hr>';
        } else {
            echo 'File written - View!<hr>';
        }

        if (!write_file($pastaView . '/' . $tabela . "_novo.php", $dadosVForm)) {
            echo 'Unable to write the file - View<hr>';
        } else {
            echo 'File written - View!<hr>';
        }

        $dadosVDelete = $this->scafn->vDelete($tabela, $campos);
        if (!write_file($pastaView . '/' . $tabela . "_del.php", $dadosVDelete)) {
            echo 'Unable to write the file - View<hr>';
        } else {
            echo 'File written - View!<hr>';
        }

        echo "<a href='" . site_url('scaf') . "'>Voltar</a>";
    }

}
