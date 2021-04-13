<?php

/** CRUD Controller para consultas**/
class Consultar extends CI_Controller {

    private $_tpl = 'painel/indexPainel.php';
    private $dados = array();

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('Util', 'pagination', 'form_validation', 'detran'));


        $this->load->model('consultasmodel', '', true);
    }


    public function consulta1() {
        $this->auth->check_logged($this->router->class, 'consulta1');
        if ($this->input->post()) {
            $post = $this->input->post();

            $headers = array(
                'Content-type:  application/soap+xml;charset=UTF-8;action="http://www.MyCompany.com/consultaVeiculoBaseBin"',
                'Connection : Keep-Alive'
            );

            $xml = '<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:myc="http://www.MyCompany.com/">
   <soap:Header/>
   <soap:Body>
      <myc:consultaVeiculoBaseBin>
         <!--Optional:-->
         <myc:consultaVeiculoBaseBinRequest>
            <!--Optional:-->
            <myc:codigoUsuario>100425</myc:codigoUsuario>
            <!--Optional:-->
            <myc:senhaUsuario>SENHA</myc:senhaUsuario>
            <!--Optional:-->
            <myc:codigoOperacao>CON</myc:codigoOperacao>
            <!--Optional:-->
            <myc:paramPlaca>' . $post['placa'] . '</myc:paramPlaca>
            <!--Optional:-->
            <myc:paramUF></myc:paramUF>
            <!--Optional:-->
            <myc:paramChassi></myc:paramChassi>
            <!--Optional:-->
            <myc:paramRenavam></myc:paramRenavam>
         </myc:consultaVeiculoBaseBinRequest>
      </myc:consultaVeiculoBaseBin>
   </soap:Body>
</soap:Envelope>';   // data from the form, e.g. some ID number


            $consulta = $this->detran->post($xml, $headers);


            $this->util->prints($consulta);


            // $this->consultasmodel->inserir($post);
            // echo "<script>window.location.href='" . site_url() . "/consultas/'</script>";
        } else {
            $this->dados['object'] = $this->consultasmodel;
            $this->dados['pagina'] = 'consultar/consulta1';
            $this->dados['titulo'] = 'Consulta 1';
            $this->load->view($this->_tpl, $this->dados);
        }
    }
}
