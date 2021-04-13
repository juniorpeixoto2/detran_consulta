<?php
if ($_POST) {

    $client = new SoapClient('http://200.187.13.80/wsdetranprefeitura/wsdetranprefeitura.asmx?WSDL');

    $function = 'consultaVeiculoBaseBin';

    $arguments = array('ConvertTemp' => array(
        'NRUSUARIO'   => 31321231,
        'SENHAUSU'      => '32231231',
        'CDOPERACAO'        => $_POST['CDOPERACAO'],
        'P-PLACA'        => $_POST['P-PLACA'],
        'P-UF'        => $_POST['P-UF'],
        'P-CHASSI'        => $_POST['P-CHASSi'],
        'P-RENAVAM'        => $_POST['P-RENAVAM'],
    ));

    $options = array('location' => 'http://200.187.13.80/wsdetranprefeitura/wsdetranprefeitura.asmx?WSDL');

    $result = $client->__soapCall($function, $arguments, $options);

    echo 'Response: ';
    print_r($result);

    $clean_xml = str_ireplace(['SOAP-ENV:', 'SOAP:'], '', $result);
    $array = simplexml_load_string($clean_xml);

    print_r($array);

    foreach ($result as $key => $value) {
        echo $value;
    }
}
?>

<div class='col-md-8'>
    <div class='form-horizontal'>

        <form action="" method="post">

            <div class='form-row'>
                <div class="col-md-4">
                    <label for="">CDOPERACAO</label>
                    <input type="text" name="CDOPERACAO" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="">PLACA</label>
                    <input type="text" name="P-PLACA" class="form-control">
                </div>
            </div>

            <div class='form-row'>
                <div class="col-md-4">
                    <label for="">UF</label>
                    <input type="text" name="P-UF" class="form-control">
                </div>

                <div class="col-md-4">
                    <label for="">RENAVAM</label>
                    <input type="text" name="P-PLRENAVAMACA" class="form-control">
                </div>

            </div>


            <input type="submit" value="Consultar">

        </form>
    </div>
</div>