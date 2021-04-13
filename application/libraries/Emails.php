<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Emails {

    private $ci;
    private $parametros;

    public function __construct() {
        $this->ci = &get_instance();
        $this->ci->load->library('email');

        $this->parametros = $this->ci->db->get('parametros')->row();

        $config['protocol'] = "smtp";
        $config['smtp_crypto'] = 'ssl';
        $config['smtp_host'] = $this->parametros->par_smtpHost;
        $config['smtp_port'] = $this->parametros->par_smtpPorta;
        $config['smtp_user'] = $this->parametros->par_smtpUsuario;
        $config['smtp_pass'] = $this->parametros->par_smtpSenha;
        $config['newline'] = "\r\n";
        $config['charset'] = 'utf-8';
        $config['mailtype'] = 'html';

        $this->ci->email->initialize($config);

        $this->ci->email->from($this->parametros->par_smtpSetFrom, $this->parametros->par_titulo);
    }


    public function enviar($destinatario, $assunto, $mensagem, $copia_oculta = 'nao') {

        if ($this->parametros->par_smtpHost == '') {
            return;
        }

        $this->ci->email->to($destinatario);

        if ($copia_oculta == 'sim') {
            $this->ci->email->bcc($this->parametros->par_smtpSetFrom);
        }

        $this->ci->email->subject($assunto);
        $this->ci->email->message($mensagem);

        $this->ci->email->send(FALSE);

        //$this->ci->util->prints($this->ci->email->print_debugger());

        return;
    }
}
