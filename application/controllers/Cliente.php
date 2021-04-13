<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cliente extends CI_Controller {

    private $tpl = 'cliente/indexCliente.php';
    private $dados = array();
    private $idCliente;
    private $parametros;

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('Util', 'pagination', 'form_validation', 'upload'));

        $this->auth->check_cliente();

        $this->idCliente = $this->session->userdata('id');
        $this->dados['dadosCliente'] = array(
            'id' => $this->session->userdata('id'),
            'nome' => $this->session->userdata('nome'),
            'tipo' => 'cliente',
        );

        $this->load->model('parametrosmodel', '', true);
        $this->load->model('clientesmodel', '', true);
        $this->load->model('tradesmodel', '', true);
        $this->load->model('mes_anomodel', '', true);
        $this->load->model('materiaismodel', '', true);
        $this->load->model('diariomodel', '', true);
        $this->load->model('corretorasmodel', '', true);
        $this->load->model('videosmodel', '', true);

        $this->parametros = $this->parametrosmodel->getById(1);
        $this->dados['parametros'] = $this->parametros;
    }

    public function index() {
        $this->dados['titulo'] = 'home';
        $this->dados['pagina'] = 'cliente/home';
        $this->load->view($this->tpl, $this->dados);
    }

    function sair() {
        $this->session->sess_destroy();
        echo "<script>window.location.href='" . site_url('site/login') . "'</script>";
        exit;
    }


    public function pagarMp($idCript) {
        $id_compra = $this->encryption->decrypt($this->util->decode_url(($idCript)));
        if (!$id_compra) {
            echo "<script>window.location.href='" . site_url('cliente') . "'</script>";
            return;
        }

        $this->dados['idCript'] = $idCript;
        $compra = $this->comprasmodel->getById($id_compra);

        include_once APPPATH . 'third_party/autoload.php';

        $parametros = $this->parametrosmodel->getById(1);
        MercadoPago\SDK::setAccessToken($parametros->par_tokenMercadoPago);

        $preference = new MercadoPago\Preference();

        $valor = $compra->com_valor;

        //$valor = (5 / 100 * $valor) + $valor; // Taxa de 1 por cento do mercado pago

        // Cria um item na preferência
        $item = new MercadoPago\Item();
        $item->title = 'Rifas';
        $item->quantity = 1;
        $item->unit_price = $valor;
        $preference->items = array($item);
        $preference->external_reference = $id_compra;


        $preference->back_urls = array(
            "success" => site_url('cliente'),
            "failure" => site_url('cliente'),
            "pending" => site_url('cliente')
        );
        $preference->auto_return = "approved";

        $preference->save();

        $dadosBoleto = [
            'com_tipoPagamento' => 'mercado_pago',
            'com_json' => $preference->init_point,
        ];
        $this->comprasmodel->update($dadosBoleto, $id_compra);

        echo " <a class='btn btn-success' target='_blank' href=" . $preference->init_point . ">Pagar com Mercado Pago</a>";


        echo "<script>window.location.href = '" . $preference->init_point . "'</script>";
        return;
    }

    public function gestao($ano = '', $mes = '') {
        if ($ano == '') {
            $ano = date('Y');
        }

        if ($mes == '') {
            $mes = 1;
        }

        $mes_ano = $this->mes_anomodel->getByCliData($this->idCliente, $mes, $ano);
        $this->dados['mes_ano'] = $mes_ano;

        $dados = $this->tradesmodel->getByClienteMes($this->idCliente, $mes, $ano);
        $this->dados['dados'] = $dados;

        // $this->util->prints($dados);

        $this->dados['mes'] = $mes;
        $this->dados['ano'] = $ano;
        $this->dados['titulo'] = 'Gestao';
        $this->dados['pagina'] = 'cliente/gestao';
        $this->load->view($this->tpl, $this->dados);
    }

    public function plano() {
        $this->dados['cliente'] = $this->clientesmodel->getById($this->idCliente);
        $this->dados['titulo'] = 'Plano de Trader';
        $this->dados['pagina'] = 'cliente/plano';
        $this->load->view($this->tpl, $this->dados);
    }

    public function imposto($ano = '', $mes = '') {
        if ($ano == '') {
            $ano = date('Y');
        }
        $this->dados['ano'] = $ano;

        if ($mes == '') {
            $mes = 1;
        }
        $this->dados['mes'] = $mes;

        $dados = $this->mes_anomodel->getByCliAno($this->idCliente, $ano);
        $this->dados['dados'] = $dados;

        $this->dados['titulo'] = "GESTÃO TRIBUTÁRIA ANUAL - {$ano}";
        $this->dados['pagina'] = 'cliente/imposto';
        $this->load->view($this->tpl, $this->dados);
    }

    public function diario() {
        $this->dados['dados'] = $this->diariomodel->getByCliente($this->idCliente);
        $this->dados['titulo'] = 'Diário do Trader';
        $this->dados['pagina'] = 'cliente/diario';
        $this->load->view($this->tpl, $this->dados);
    }

    public function sala() {
        $this->dados['dados'] = $this->parametros->par_salaCouth;
        $this->dados['titulo'] = 'Sala de Coach';
        $this->dados['pagina'] = 'cliente/sala';
        $this->load->view($this->tpl, $this->dados);
    }

    public function materiais() {
        $this->dados['dados'] = $this->materiaismodel->getAll();
        $this->dados['titulo'] = 'Materiais';
        $this->dados['pagina'] = 'cliente/materiais';
        $this->load->view($this->tpl, $this->dados);
    }

    public function mat_baixar($id) {
        $material = $this->materiaismodel->getById($id);
        $this->load->helper('download');
        $caminho_imagem = FCPATH . "assets/materiais/" . $material->mat_link;
        //echo $arquivo;

        force_download($caminho_imagem, NULL);
        return;
    }

    public function meus_dados() {
        $this->dados['titulo'] = 'Meus Dados';
        $this->dados['pagina'] = 'cliente/meus_dados';
        $this->load->view($this->tpl, $this->dados);
    }

    public function trades($mes = '', $ano = '') {
        if ($mes == '') {
            $mes = date('m');
        }
        if ($ano == '') {
            $ano = date('Y');
        }

        $meses_anos = $this->mes_anomodel->getByCliente($this->idCliente);
        $this->dados['meses_ano'] = $meses_anos;

        $mes_ano = $this->mes_anomodel->getByCliData($this->idCliente, $mes, $ano);
        $this->dados['mes_ano'] = $mes_ano;

        $this->dados['dados'] = $this->tradesmodel->getByClienteMes($this->idCliente, $mes, $ano);

        $this->dados['mes'] = $mes;
        $this->dados['ano'] = $ano;
        $this->dados['titulo'] = 'Meus Trades';
        $this->dados['pagina'] = 'cliente/trades';
        $this->load->view($this->tpl, $this->dados);
    }

    public function add_trade() {
        if ($this->input->post()) {
            $post = $this->input->post();

            $post['tra_ganhos'] = $this->util->moeda($post['tra_ganhos']);
            $post['tra_perdas'] = $this->util->moeda($post['tra_perdas']);

            $id_corretora = $post['tra_idCorretora'];
            $corretora = $this->corretorasmodel->getById($id_corretora);

            $inserir = [
                'tra_idCliente' => $this->idCliente,
                'tra_data' => $post['tra_data'],
                'tra_tickt' => $post['tra_tickt'],
                'tra_quantOperacoesV' => $post['tra_quantOperacoesV'] != '' ? $post['tra_quantOperacoesV'] : null,
                'tra_quantOperacoesP' => $post['tra_quantOperacoesP'] != '' ? $post['tra_quantOperacoesP'] : null,
                'tra_quantContatos' => $post['tra_quantContatos'] != '' ? $post['tra_quantContatos'] : null,
                'tra_ganhos' => $post['tra_ganhos'] != '' ? $post['tra_ganhos'] : null,
                'tra_perdas' => $post['tra_perdas'] != '' ? $post['tra_perdas'] : null,
                'tra_idCorretora' => $id_corretora,
                'tra_taxaCorretagem' => $corretora->cor_valor * 2,
            ];

            (int) $mes = substr($post['tra_data'], 5, 2);
            (int) $ano = substr($post['tra_data'], 0, 4);
            $this->mes_anomodel->getByCliData($this->idCliente, $mes, $ano);

            $this->tradesmodel->inserir($inserir);
            $this->tradesmodel->processa($this->idCliente,  $mes, $ano);

            echo "<script>window.location.href='" . site_url('cliente/trades') . "'</script>";
            return;
        } else {
            $this->dados['corretoras'] = $this->corretorasmodel->getArray();
            $this->dados['object'] = $this->tradesmodel;
            $this->dados['pagina'] = 'cliente/trades_novo';
            $this->dados['titulo'] = 'Lançar trade';
            $this->load->view($this->tpl, $this->dados);
        }
    }

    public function edit_trade($id_trad) {
        if ($this->input->post()) {
            $post = $this->input->post();

            $post['tra_ganhos'] = $this->util->moeda($post['tra_ganhos']);
            $post['tra_perdas'] = $this->util->moeda($post['tra_perdas']);
            $tra_quantOperacoesV = $post['tra_quantOperacoesV'] != '' ? $post['tra_quantOperacoesV'] : 0;
            $tra_quantOperacoesP = $post['tra_quantOperacoesP'] != '' ? $post['tra_quantOperacoesP'] : 0;
            $tra_quantContatos = $post['tra_quantContatos'] != '' ? $post['tra_quantContatos'] : 0;
            $tra_ganhos = $post['tra_ganhos'] != '' ? $post['tra_ganhos'] : 0;
            $tra_perdas = $post['tra_perdas'] != '' ? $post['tra_perdas'] : 0;
            $tra_saldoBruto = $tra_ganhos - $tra_perdas;

            $id_corretora = $post['tra_idCorretora'];
            $corretora = $this->corretorasmodel->getById($id_corretora);

            $inserir = [
                'tra_idCliente' => $this->idCliente,
                'tra_data' => $post['tra_data'],
                'tra_tickt' => $post['tra_tickt'],
                'tra_quantOperacoesV' => $tra_quantOperacoesV,
                'tra_quantOperacoesP' => $tra_quantOperacoesP,
                'tra_quantContatos' => $tra_quantContatos,
                'tra_ganhos' => $tra_ganhos,
                'tra_perdas' => $tra_perdas,
                'tra_saldoBruto' => $tra_saldoBruto,
                'tra_idCorretora' => $id_corretora,
                'tra_taxaCorretagem' => $corretora->cor_valor * 2,
            ];

            (int) $mes = substr($post['tra_data'], 5, 2);
            (int) $ano = substr($post['tra_data'], 0, 4);

            $this->tradesmodel->update($inserir, $id_trad);
            $this->tradesmodel->processa($this->idCliente,  $mes, $ano);

            echo "<script>window.location.href='" . site_url('cliente/trades') . "'</script>";
            return;
        } else {
            $this->dados['corretoras'] = $this->corretorasmodel->getArray();
            $this->dados['object'] = $this->tradesmodel->getById($id_trad);
            $this->dados['pagina'] = 'cliente/trades_novo';
            $this->dados['titulo'] = 'Lançar trade';
            $this->load->view($this->tpl, $this->dados);
        }
    }

    public function plano_edit() {
        if ($this->input->post()) {

            $post = $this->input->post();
            $this->clientesmodel->update2($post, $this->idCliente);
            echo "<script>window.location.href='" . site_url('cliente/plano') . "'</script>";
            return;
        } else {
            $this->dados['object'] = $this->clientesmodel->getById($this->idCliente);
            $this->dados['pagina'] = 'cliente/plano_edit';
            $this->dados['titulo'] = 'Alterar Plano de Trader';
            $this->load->view($this->tpl, $this->dados);
        }
    }

    public function mes_edit($mes, $ano) {
        $dados = $this->mes_anomodel->getByCliData($this->idCliente, $mes, $ano);
        if ($this->input->post()) {
            $post = $this->input->post();

            $inserir = [
                'ma_capitalInicial' => $this->util->moeda($post['ma_capitalInicial']),
                'ma_metaDIaria' => $this->util->moeda($post['ma_metaDIaria']),
            ];
            $this->mes_anomodel->update($inserir, $dados->ma_id);
            echo "<script>window.location.href='" . site_url("cliente/trades/{$mes}/{$ano}") . "'</script>";
            return;
        } else {
            $this->dados['dados'] = $dados;

            $this->dados['mes'] = $mes;
            $this->dados['ano'] = $ano;
            $this->dados['pagina'] = 'cliente/mes_edit';
            $this->dados['titulo'] = 'Alterar Plano de Trader';
            $this->load->view($this->tpl, $this->dados);
        }
    }

    public function add_diario() {
        if ($this->input->post()) {
            $post = $this->input->post();

            $post['dia_idCliente'] = $this->idCliente;
            $post['dia_valor'] = $this->util->moeda($post['dia_valor']);

            $this->diariomodel->inserir($post);
            echo "<script>window.location.href='" . site_url("cliente/diario") . "'</script>";
            return;
        } else {
            $this->dados['object'] = $this->diariomodel;
            $this->dados['pagina'] = 'cliente/add_diario';
            $this->dados['titulo'] = 'Diário';
            $this->load->view($this->tpl, $this->dados);
        }
    }

    public function calend() {
        $this->dados['pagina'] = 'cliente/calendario';
        $this->dados['titulo'] = 'Calendário Econômico Mundial';
        $this->load->view($this->tpl, $this->dados);
    }


    public function videos() {
        $this->dados['videos'] = $this->videosmodel->get();
        $this->dados['pagina'] = 'cliente/videos';
        $this->dados['titulo'] = 'Vídeos';
        $this->load->view($this->tpl, $this->dados);
    }

    public function diario_edit($id) {
        if ($this->input->post()) {
            $post = $this->input->post();

            $post['dia_valor'] = $this->util->moeda($post['dia_valor']);

            $this->diariomodel->update($post, $id);
            echo "<script>window.location.href='" . site_url('cliente/diario') . "'</script>";
            return;
        } else {
            $this->dados['object'] = $this->diariomodel->getById($id);
            $this->dados['pagina'] = 'cliente/add_diario';
            $this->dados['titulo'] = 'Alterar Diário';
            $this->load->view($this->tpl, $this->dados);
        }
    }
}
