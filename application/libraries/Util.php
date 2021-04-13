<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Util {

    private $ci;

    public function __construct() {
        $this->ci = &get_instance();
    }

    public function moeda($valor) {
        return str_replace(',', '.', str_replace('.', '', $valor));
    }

    public function milhar($valor) {
        return number_format($valor, 0, '', '.');
    }

    public function prints($dado) {
        echo '<pre>';
        print_r($dado);
        echo '</pre>';
    }

    public function buscarCEP($cep) {
        $url = "https://viacep.com.br/ws/{$cep}/json/";
        $ch = curl_init();

        // define url
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // executa o post
        $json = curl_exec($ch);
        $resultado = json_decode($json, true);

        curl_close($ch);
        return $resultado;
    }

    function set_valor($valor, $post) {
        if ($this->ci->router->method == 'criar') {
            echo $post;
        } else {
            echo $valor;
        }
    }

    function mensagens() {
        return array(
            'required' => 'O campo <strong><i>{field}</i></strong> é Obrigatório',
            'valid_email' => 'O campo <strong><i>{field}</i></strong> nao é um e-mail válido',
            'is_unique' => 'Este <strong><i>{field}</i></strong> já está cadastrado',
            'xss_clean' => 'erro XSS',
            'min_length' => 'o campo <i>{field}</i> deve ter no mínimo {param} caracteres',
        );
    }

    function utf8Fix($msg) {
        $accents = array("á", "à", "â", "ã", "ä", "é", "è", "ê", "ë", "í", "ì", "î", "ï", "ó", "ò", "ô", "õ", "ö", "ú", "ù", "û", "ü", "ç", "Á", "À", "Â", "Ã", "Ä", "É", "È", "Ê", "Ë", "Í", "Ì", "Î", "Ï", "Ó", "Ò", "Ô", "Õ", "Ö", "Ú", "Ù", "Û", "Ü", "Ç", "Ã");
        $utf8 = array("Ã¡", "Ã ", "Ã¢", "Ã£", "Ã¤", "Ã©", "Ã¨", "Ãª", "Ã«", "Ã­", "Ã¬", "Ã®", "Ã¯", "Ã³", "Ã²", "Ã´", "Ãµ", "Ã¶", "Ãº", "Ã¹", "Ã»", "Ã¼", "Ã§", "Ã", "Ã€", "Ã‚", "Ãƒ", "Ã„", "Ã‰", "Ãˆ", "ÃŠ", "Ã‹", "Ã", "ÃŒ", "ÃŽ", "Ã", "Ã“", "Ã’", "Ã”", "Ã•", "Ã–", "Ãš", "Ã™", "Ã›", "Ãœ", "Ã‡", "Ã?");
        $fix = str_replace($utf8, $accents, $msg);
        return $fix;
    }

    function valida_cpf($cpf) {
        // Extrai somente os números
        $cpf = preg_replace('/[^0-9]/is', '', $cpf);

        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }
        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }
        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return true;
    }

    function soNumeros($str) {
        return preg_replace("/[^0-9]/", "", $str);
    }

    public function numOnly() {
        //echo "oninput=\"this.value = this.value.replace(/[^0-9,]/g, '').replace(/(\..*)\./g, '$1');\"";
        echo "oninput=\"this.value = this.value.replace(/[^0-9.,]/g, '').replace(/(\..*)\./g, '$1').replace(',','.');\"";
    }

    function dizima($valor, $casas = 8) {
        printf("%0.{$casas}f", $valor);
    }

    function moedaBrasil($valor = 0) {
        return 'R$ ' . number_format(round($valor, 2), 2, ',', '.');
    }

    function dizima8($valor, $casas = 8, $tamanho = 2, $sep1 = '.', $sep2 = '') {
        return number_format(round($valor, $casas), $tamanho, $sep1, $sep2);
    }

    function toDizima8($valor) {
        return $valor / 100000000;
    }

    function decorrido($data) {
        $libera = strtotime($data);
        $now = strtotime("now");

        $tempo = $libera - $now;

        $dias = (int) (($tempo / (24 * 60 * 60)));
        $horas = (int) ($tempo / (60 * 60));
        $minutos = (int) (($tempo - ($horas * 60 * 60)) / 60);
        $segundos = ($tempo - ($horas * 60 * 60) - ($minutos * 60));

        echo $dias . ' Dias, ' . $horas . ' Horas: ' . $minutos . ' Minutos, ' . $segundos;
    }

    public function idade($dataNasc) {

        list($dia, $mes, $ano) = explode('-', $dataNasc);
        $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
        $nascimento = mktime(0, 0, 0, $mes, $dia, $ano);
        return floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
    }

    public function setBaseUrl() {
        $parametros = $this->ci->parametrosmodel->getByid(1);
        $this->ci->config->set_item('base_url', $parametros->par_baseUrl);
    }

    public function statusPag() {
        return array(
            '1' => 'Aguardando pagamento', //: o comprador iniciou a transação, mas até o momento o PagSeguro não recebeu nenhuma informação sobre o pagamento.
            '2' => 'Em análise', //: o comprador optou por pagar com um cartão de crédito e o PagSeguro está analisando o risco da transação.
            '3' => 'Paga', //: a transação foi paga pelo comprador e o PagSeguro já recebeu uma confirmação da instituição financeira responsável pelo processamento.
            '4' => 'Disponível', //: a transação foi paga e chegou ao final de seu prazo de liberação sem ter sido retornada e sem que haja nenhuma disputa aberta.
            '5' => 'Em disputa', //: o comprador, dentro do prazo de liberação da transação, abriu uma disputa.
            '6' => 'Devolvida', //: o valor da transação foi devolvido para o comprador.
            '7' => 'Cancelada', //: a transação foi cancelada sem ter sido finalizada.
            '8' => 'Debitado', //: o valor da transação foi devolvido para o comprador.
            '9' => 'Retenção temporária', //: o comprador contestou o pagamento junto à operadora do cartão de crédito ou abriu uma demanda judicial ou administrativa (Procon).
        );
    }

    public function divideParcelas($valor, $parcelas) {

        $valorParcelas = round($valor / $parcelas);

        //echo $valorParcelas . ' - ';
        //echo ($valorParcelas * $parcelas) - $valor;

        $arrayParcelas = array();
        for ($i = 1; $i <= $parcelas; $i++) {
            $valorParcela = round($valor / $i);
            $arrayParcelas[$i] = $i . ' X DE ' . 'R$ ' . number_format($valorParcela, 2, ',', '.');
        }

        //print_r($arrayParcelas);
        return $arrayParcelas;
    }

    public function divideParcelas2($valor, $parcelas) {

        $valorParcelas = round($valor / $parcelas);

        //echo $valorParcelas . ' - ';
        //echo ($valorParcelas * $parcelas) - $valor;

        $arrayParcelas = array();
        for ($i = 1; $i <= $parcelas; $i++) {
            $valorParcela = round($valor / $i, 2);
            $arrayParcelas[$i] = number_format($valorParcela, 2, '.', '');
        }

        //print_r($arrayParcelas);
        return $arrayParcelas;
    }

    //Input tipo texto
    public function input($label = '', $name = '', $value = '', $class = '', $span = '4', $id = '', $extra = '', $smlabel = 2, $type = 'text') {

        if ($name != '') {
            $name = " name='$name'";
        }

        if ($value != '') {
            $value = " value='$value'";
        }
        if ($id != '') {
            $id = " id='$id'";
        }


        echo "
        <div class='form-group'>
            <label class='control-label col-sm-$smlabel' for='$name'>$label: </label>
            <div class='col-sm-$span'>
                <input $name $value $id  class='form4 $class' type='$type' $extra>
            </div>
        </div>";
    }

    public function input2($label = '', $name = '', $value = '', $class = '', $span = '4', $id = '', $extra = '', $smlabel = 3) {

        if ($name != '') {
            $name = " name='$name'";
        }

        if ($value != '') {
            $value = " value='$value'";
        }
        if ($id != '') {
            $id = " id='$id'";
        }


        echo "
        <div class='form-group'>
            <div class='col-sm-1'>
                <input $name $value $id  class='form $class' type='text' $extra>
            </div>
        </div>";
    }

    public function input3($label = '', $name = '', $value = '', $class = '', $span = '4', $id = '', $extra = '', $smlabel = 3, $tipo = 'text') {

        if ($name != '') {
            $name = " name='$name'";
        }

        if ($value != '') {
            $value = " value='$value'";
        }
        if ($id != '') {
            $id = " id='$id'";
        }

        //echo "<div class='col-sm-$span'><label class='label2'>$label</label><input $name " . $value . " $id  class='form $class' type='text' $extra> </div>";

        echo ""
            . "<div class='col-md-$span'>"
            . "  <label for='nome'>$label</label>"
            . "  <input type='$tipo' $name id='$id' class='$class form-control' $value $extra />"
            . "</div> ";
    }

    public function textArea($label = '', $name = '', $value = '', $rows = '7', $id = '', $class = '', $extra = '', $smlabel = 3) {
        if ($name != '') {
            $name = " name='$name'";
        }

        if ($id != '') {
            $id = " id='$id'";
        }
        echo "
        <div class='form-group'>
            <label class='control-label col-sm-2' for='$name'>$label: </label>
            <div class='col-sm-8'>
                <textarea $name $id class='form $class' rows='$rows'>$value</textarea>
            </div>
        </div>";
    }

    public function textArea2($label = '', $name = '', $value = '', $span = 4, $rows = '7', $id = '', $class = '', $extra = "", $smlabel = 3) {
        if ($name != '') {
            $name = " name='$name'";
        }

        if ($id != '') {
            $id = " id='$id'";
        }
        echo "<div class='col-sm-$span'><label>$label</label><textarea $name $id class='form $class' rows='$rows' type='text' $extra>$value</textarea></div>";
    }

    public function select($label = '', $name, $opcoes, $value, $rows = '7', $id = '', $class = '', $extra = '', $smlabel = 3) {

        if ($id != '') {
            $id = " id='$id'";
        }
?>
        <div class='form-group'>
            <label class='control-label col-sm-2'><?php echo $label ?>: </label>
            <div class='col-sm-<?php echo $rows; ?>'>
                <?php echo form_dropdown($name, $opcoes, $value, "class='form $class'");
                ?>
            </div>
        </div>
    <?php
    }

    public function select2($label = '', $name, $opcoes, $value, $rows = '7', $id = '', $class = '', $extra = '', $smlabel = 3) {

        if ($id != '') {
            $id = " id='$id'";
        }
    ?>
        <div class='col-md-<?php echo $rows; ?>'>
            <label class=''><?php echo $label ?> </label>
            <?php echo form_dropdown($name, $opcoes, $value, "class='form-control $class' $id $extra");
            ?>
        </div>
    <?php
    }

    function radios($label = '', $name = '', $valores, $valor = '', $class = '', $extra = '') {
    ?>
        <div style="margin-left: 10px;">
            <?php
            $valore = explode('|', $valores);
            foreach ($valore as $op) {
            ?>
                <label class="<?php echo $class; ?>">
                    <input type="radio" name="<?php echo $name; ?>" value="<?php echo $op; ?>" class=<?php echo $class; ?> <?php
                                                                                                                            if ($op == $valor)
                                                                                                                                echo "checked ";
                                                                                                                            echo $extra;
                                                                                                                            ?>> <?php echo $op; ?>
                </label>
                <br>

            <?php } ?>
        </div>
    <?php
    }

    function radios2($label = '', $name = '', $valores, $valor = '', $class = 'radio-inline', $extra = '') {
    ?>
        <div style="margin-left: 10px;">
            <?php
            $valore = explode('|', $valores);
            foreach ($valore as $op) {
            ?>
                <label class="<?php echo $class; ?>">
                    <input type="radio" name="<?php echo $name; ?>" value="<?php echo $op; ?>" <?php
                                                                                                if ($op == $valor)
                                                                                                    echo "checked ";
                                                                                                echo $extra;
                                                                                                ?>> <?php echo $op; ?>
                </label>

            <?php } ?>
        </div>
    <?php
    }

    public function checkbox($param) {
    ?>
        <div class='checkbox'>
            <label>
                <input type='checkbox' value="">
                teste
            </label>
        </div>
<?php
    }

    public function data($data) {
        $data = str_replace('/', '-', $data);
        $data = explode('-', $data);
        $data = array_reverse($data);
        $data = implode('-', $data);
        return $data;
    }

    public function data2($data) {
        $data = str_replace('-', '/', $data);
        $data = explode('/', $data);
        $data = array_reverse($data);
        $data = implode('/', $data);
        return $data;
    }

    public function data3($data) {
        $dh = explode(' ', $data);
        $data = str_replace('-', '/', $dh[0]);
        $data = explode('/', $data);
        $data = array_reverse($data);
        $data = implode("/", $data);
        return $data . ' - ' . $dh[1];
    }

    public function modal() {
        include 'Util-modal.php';
    }

    public function estados() {
        return array(
            "" => "", "AC" => "AC", "AL" => "AL", "AM" => "AM", "AP" => "AP", "BA" => "BA", "CE" => "CE", "DF" => "DF", "ES" => "ES", "GO" => "GO",
            "MA" => "MA", "MT" => "MT", "MS" => "MS", "MG" => "MG", "PA" => "PA", "PB" => "PB", "PR" => "PR", "PE" => "PE", "PI" => "PI", "RJ" => "RJ",
            "RN" => "RN", "RO" => "RO", "RS" => "RS", "RR" => "RR", "SC" => "SC", "SE" => "SE", "SP" => "SP", "TO" => "TO"
        );
    }

    public function remove_accent($str) {
        $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ', 'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę', 'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī', 'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ', 'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ', 'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ', 'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ');
        $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o');
        return str_replace($a, $b, $str);
    }

    public function mascara($val, $mask) {
        $maskared = '';
        $k = 0;
        for ($i = 0; $i <= strlen($mask) - 1; $i++) {
            if ($mask[$i] == '#') {
                if (isset($val[$k]))
                    $maskared .= $val[$k++];
            } else {
                if (isset($mask[$i]))
                    $maskared .= $mask[$i];
            }
        }
        return $maskared;
    }

    public function estadoCivil() {
        return array(
            "" => "",
            "SOLTEIRO(A)" => "SOLTEIRO(A) ",
            "CASADO(A)" => "CASADO(A)",
            "DIVORCIADO(A)" => "DIVORCIADO(A)",
            "VIÚVO(A)" => "VIÚVO(A)",
            "SEPARADO(A)" => "SEPARADO(A)",
            "UNIÃO ESTÁVEL" => "UNIÃO ESTÁVEL"
        );
    }

    function getIdade($data = '') {

        // Separa em dia, mês e ano
        list($dia, $mes, $ano) = explode('/', $data);

        // Descobre que dia é hoje e retorna a unix timestamp
        $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
        // Descobre a unix timestamp da data de nascimento do fulano
        $nascimento = mktime(0, 0, 0, $mes, $dia, $ano);

        // Depois apenas fazemos o cálculo já citado :)
        $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);

        return $idade;
    }

    function getNameMonthByDate($data) {
        switch (date('m', strtotime($data))) {
            case "01":
                $mes = 'Janeiro';
                break;
            case "02":
                $mes = 'Fevereiro';
                break;
            case "03":
                $mes = 'Março';
                break;
            case "04":
                $mes = 'Abril';
                break;
            case "05":
                $mes = 'Maio';
                break;
            case "06":
                $mes = 'Junho';
                break;
            case "07":
                $mes = 'Julho';
                break;
            case "08":
                $mes = 'Agosto';
                break;
            case "09":
                $mes = 'Setembro';
                break;
            case "10":
                $mes = 'Outubro';
                break;
            case "11":
                $mes = 'Novembro';
                break;
            case "12":
                $mes = 'Dezembro';
                break;
        }

        return $mes;
    }

    function getNameMonthByIndex($index) {
        switch ($index) {
            case "01":
                $mes = 'Janeiro';
                break;
            case "02":
                $mes = 'Fevereiro';
                break;
            case "03":
                $mes = 'Março';
                break;
            case "04":
                $mes = 'Abril';
                break;
            case "05":
                $mes = 'Maio';
                break;
            case "06":
                $mes = 'Junho';
                break;
            case "07":
                $mes = 'Julho';
                break;
            case "08":
                $mes = 'Agosto';
                break;
            case "09":
                $mes = 'Setembro';
                break;
            case "10":
                $mes = 'Outubro';
                break;
            case "11":
                $mes = 'Novembro';
                break;
            case "12":
                $mes = 'Dezembro';
                break;
        }

        return $mes;
    }

    public function meses() {
        return [
            1 => 'Janeiro',
            2 => 'Fevereiro',
            3 => 'Março',
            4 => 'Abril',
            5 => 'Maio',
            6 => 'Junho',
            7 => 'Julho',
            8 => 'Agosto',
            9 => 'Setembro',
            10 => 'Outubro',
            11 => 'Novembro',
            12 => 'Dezembro',
        ];
    }

    function encode_url($string) {
        return strtr($string, array('+' => '.', '=' => '-', '/' => '~'));
    }

    function decode_url($string) {
        return strtr($string, array('.' => '+', '-' => '=', '~' => '/'));
    }

    public function responseOk($dados) {
        return $this->ci->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($dados));
    }

    public function responseNok($dados) {
        return $this->ci->output
            ->set_content_type('application/json')
            ->set_status_header(400)
            ->set_output(json_encode($dados));
    }

    public static function gera_cpf($mascara = "1") {
        $n1 = rand(0, 9);
        $n2 = rand(0, 9);
        $n3 = rand(0, 9);
        $n4 = rand(0, 9);
        $n5 = rand(0, 9);
        $n6 = rand(0, 9);
        $n7 = rand(0, 9);
        $n8 = rand(0, 9);
        $n9 = rand(0, 9);
        $d1 = $n9 * 2 + $n8 * 3 + $n7 * 4 + $n6 * 5 + $n5 * 6 + $n4 * 7 + $n3 * 8 + $n2 * 9 + $n1 * 10;
        $d1 = 11 - (self::mod($d1, 11));
        if ($d1 >= 10) {
            $d1 = 0;
        }
        $d2 = $d1 * 2 + $n9 * 3 + $n8 * 4 + $n7 * 5 + $n6 * 6 + $n5 * 7 + $n4 * 8 + $n3 * 9 + $n2 * 10 + $n1 * 11;
        $d2 = 11 - (self::mod($d2, 11));
        if ($d2 >= 10) {
            $d2 = 0;
        }
        $retorno = '';
        if ($mascara == 1) {
            $retorno = '' . $n1 . $n2 . $n3 . "." . $n4 . $n5 . $n6 . "." . $n7 . $n8 . $n9 . "-" . $d1 . $d2;
        } else {
            $retorno = '' . $n1 . $n2 . $n3 . $n4 . $n5 . $n6 . $n7 . $n8 . $n9 . $d1 . $d2;
        }
        return $retorno;
    }

    private static function mod($dividendo, $divisor) {
        return round($dividendo - (floor($dividendo / $divisor) * $divisor));
    }
}
