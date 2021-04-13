<?php

/** CRUD Controller para alunos* */
class Backups extends CI_Controller {

    private $_tpl = 'painel/indexPainel.php';
    private $dados = array();
    private $pasta;

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('Util', 'pagination'));
        $this->auth->check_logged($this->router->class, $this->router->method);
        $this->pasta = APPPATH . 'third_party/bkps/';
        $this->dados['pasta'] = $this->pasta;
    }

    public function index() {
        $this->dados['pagina'] = 'painel/backups';
        $this->dados['titulo'] = 'Backups';
        $this->load->view($this->_tpl, $this->dados);
    }

    public function fazerBackup() {
        $this->load->dbutil();
        $prefs = array(
            'format' => 'zip',
            'filename' => 'my_db_backup.sql'
        );
        $backup = $this->dbutil->backup($prefs);
        $db_name = 'backup-' . date("Y-m-d-H-i-s") . '.zip';
        $this->load->helper('file');
        if (!write_file($this->pasta . $db_name, $backup)) {
            echo 'Unable to write the file';
        } else {
            echo 'Backup Realizado!';
        }
        echo ""
        . "<hr><a href='" . site_url('painel/backups') . "' class='btn btn-primary btn-lg'>"
        . "    Voltar"
        . "</a>";
    }

    public function download($arquivo) {
        $this->load->helper('download');
        force_download($this->pasta . $arquivo, $backup);
    }

    public function excluir($arquivo) {
        //$this->load->helper('download');
        //force_download($this->pasta . $arquivo, $backup);
        unlink($this->pasta . $arquivo);
        echo "<script>window.location.href='" . site_url('painel/backups') . "'</script>";
    }

}
