<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Detran {


    public function post($xml, $headers) {

        $soapUrl = "http://200.187.13.80/wsdetranprefeitura/wsdetranprefeitura.asmx?WSDL"; // asmx URL of WSDL





        $url = $soapUrl;

        // PHP cURL  for https connection with auth
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xml); // the SOAP request
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // converting
        $response = curl_exec($ch);
        curl_close($ch);


        // converting
        $response1 = str_replace("<soap:Body>", "", $response);
        $response2 = str_replace("</soap:Body>", "", $response1);

        // convertingc to XML
        $parser = simplexml_load_string($response2);

        $xml = simplexml_load_string($response2, "SimpleXMLElement", LIBXML_NOCDATA);
        $json = json_encode($xml);
        $array = json_decode($json, TRUE);


        return $array;
    }
}

/*
<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:myc="http://www.MyCompany.com/">
   <soap:Header/>
   <soap:Body>
      <myc:consultaCRLVeLocal>
         <!--Optional:-->
         <myc:consultaCRLVeLocalRequest>
            <!--Optional:-->
            <myc:codigoUsuario>?</myc:codigoUsuario>
            <!--Optional:-->
            <myc:senhaUsuario>?</myc:senhaUsuario>
            <!--Optional:-->
            <myc:codigoOperacao>?</myc:codigoOperacao>
            <!--Optional:-->
            <myc:matricAtendente>?</myc:matricAtendente>
            <!--Optional:-->
            <myc:tipoServicoWeb>?</myc:tipoServicoWeb>
            <!--Optional:-->
            <myc:codigoEstacao>?</myc:codigoEstacao>
            <!--Optional:-->
            <myc:placaVeiculo>?</myc:placaVeiculo>
            <!--Optional:-->
            <myc:tipoConsulta>?</myc:tipoConsulta>
            <!--Optional:-->
            <myc:idCRLVe>?</myc:idCRLVe>
         </myc:consultaCRLVeLocalRequest>
      </myc:consultaCRLVeLocal>
   </soap:Body>
</soap:Envelope>



<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:myc="http://www.MyCompany.com/">
   <soap:Header/>
   <soap:Body>
      <myc:consultaHistoricoDeMultas>
         <!--Optional:-->
         <myc:consultaHistoricoDeMultasRequest>
            <!--Optional:-->
            <myc:codigoUsuario>?</myc:codigoUsuario>
            <!--Optional:-->
            <myc:senhaUsuario>?</myc:senhaUsuario>
            <!--Optional:-->
            <myc:codigoOperacao>?</myc:codigoOperacao>
            <!--Optional:-->
            <myc:matricAtendente>?</myc:matricAtendente>
            <!--Optional:-->
            <myc:tipoServicoWeb>?</myc:tipoServicoWeb>
            <!--Optional:-->
            <myc:codigoEstacao>?</myc:codigoEstacao>
            <!--Optional:-->
            <myc:numeroControle>?</myc:numeroControle>
            <!--Optional:-->
            <myc:diaInicio>?</myc:diaInicio>
            <!--Optional:-->
            <myc:mesInicio>?</myc:mesInicio>
            <!--Optional:-->
            <myc:anoInicio>?</myc:anoInicio>
            <!--Optional:-->
            <myc:tipoConsulta>?</myc:tipoConsulta>
            <!--Optional:-->
            <myc:idConsulta>?</myc:idConsulta>
         </myc:consultaHistoricoDeMultasRequest>
      </myc:consultaHistoricoDeMultas>
   </soap:Body>
</soap:Envelope>



<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:myc="http://www.MyCompany.com/">
   <soap:Header/>
   <soap:Body>
      <myc:consultaInfracaoBin>
         <!--Optional:-->
         <myc:consultaInfracaoBinRequest>
            <!--Optional:-->
            <myc:codigoUsuario>?</myc:codigoUsuario>
            <!--Optional:-->
            <myc:senhaUsuario>?</myc:senhaUsuario>
            <!--Optional:-->
            <myc:codigoOperacao>?</myc:codigoOperacao>
            <!--Optional:-->
            <myc:matricAtendente>?</myc:matricAtendente>
            <!--Optional:-->
            <myc:tipoServicoWeb>?</myc:tipoServicoWeb>
            <!--Optional:-->
            <myc:codigoEstacao>?</myc:codigoEstacao>
            <!--Optional:-->
            <myc:codigoOrgAutuado>?</myc:codigoOrgAutuado>
            <!--Optional:-->
            <myc:numeroAIT>?</myc:numeroAIT>
            <!--Optional:-->
            <myc:codigoInfracao>?</myc:codigoInfracao>
            <!--Optional:-->
            <myc:cdRetorno2>?</myc:cdRetorno2>
         </myc:consultaInfracaoBinRequest>
      </myc:consultaInfracaoBin>
   </soap:Body>
</soap:Envelope>



<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:myc="http://www.MyCompany.com/">
   <soap:Header/>
   <soap:Body>
      <myc:consultaInfracoesPorPlacaBin>
         <!--Optional:-->
         <myc:consultaInfracoesPorPlacaBinRequest>
            <!--Optional:-->
            <myc:codigoUsuario>?</myc:codigoUsuario>
            <!--Optional:-->
            <myc:senhaUsuario>?</myc:senhaUsuario>
            <!--Optional:-->
            <myc:codigoOperacao>?</myc:codigoOperacao>
            <!--Optional:-->
            <myc:matricAtendente>?</myc:matricAtendente>
            <!--Optional:-->
            <myc:tipoServicoWeb>?</myc:tipoServicoWeb>
            <!--Optional:-->
            <myc:codigoEstacao>?</myc:codigoEstacao>
            <!--Optional:-->
            <myc:placaVeiculo>?</myc:placaVeiculo>
            <!--Optional:-->
            <myc:unidadeFederacao>?</myc:unidadeFederacao>
            <!--Optional:-->
            <myc:dataInicial>?</myc:dataInicial>
            <!--Optional:-->
            <myc:dataFinal>?</myc:dataFinal>
            <!--Optional:-->
            <myc:cdRetorno2>?</myc:cdRetorno2>
         </myc:consultaInfracoesPorPlacaBinRequest>
      </myc:consultaInfracoesPorPlacaBin>
   </soap:Body>
</soap:Envelope>



<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:myc="http://www.MyCompany.com/">
   <soap:Header/>
   <soap:Body>
      <myc:consultaPagtoInfracaoBin>
         <!--Optional:-->
         <myc:consultaPagtoInfracaoBinRequest>
            <!--Optional:-->
            <myc:codigoUsuario>?</myc:codigoUsuario>
            <!--Optional:-->
            <myc:senhaUsuario>?</myc:senhaUsuario>
            <!--Optional:-->
            <myc:codigoOperacao>?</myc:codigoOperacao>
            <!--Optional:-->
            <myc:matricAtendente>?</myc:matricAtendente>
            <!--Optional:-->
            <myc:tipoServicoWeb>?</myc:tipoServicoWeb>
            <!--Optional:-->
            <myc:codigoEstacao>?</myc:codigoEstacao>
            <!--Optional:-->
            <myc:codigoOrgAutuado>?</myc:codigoOrgAutuado>
            <!--Optional:-->
            <myc:numeroAIT>?</myc:numeroAIT>
            <!--Optional:-->
            <myc:codigoInfracao>?</myc:codigoInfracao>
            <!--Optional:-->
            <myc:dataInicial>?</myc:dataInicial>
            <!--Optional:-->
            <myc:dataFinal>?</myc:dataFinal>
            <!--Optional:-->
            <myc:cdRetorno2>?</myc:cdRetorno2>
         </myc:consultaPagtoInfracaoBinRequest>
      </myc:consultaPagtoInfracaoBin>
   </soap:Body>
</soap:Envelope>



<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:myc="http://www.MyCompany.com/">
   <soap:Header/>
   <soap:Body>
      <myc:consultarPagamento>
         <!--Optional:-->
         <myc:consultarPagamentoRequest>
            <!--Optional:-->
            <myc:codigoUsuario>?</myc:codigoUsuario>
            <!--Optional:-->
            <myc:senhaUsuario>?</myc:senhaUsuario>
            <!--Optional:-->
            <myc:codigoOperacao>?</myc:codigoOperacao>
            <!--Optional:-->
            <myc:matricAtendente>?</myc:matricAtendente>
            <!--Optional:-->
            <myc:tipoServicoWeb>?</myc:tipoServicoWeb>
            <!--Optional:-->
            <myc:codigoEstacao>?</myc:codigoEstacao>
            <!--Optional:-->
            <myc:numProtocolo>?</myc:numProtocolo>
            <!--Optional:-->
            <myc:codigoBarra>?</myc:codigoBarra>
         </myc:consultarPagamentoRequest>
      </myc:consultarPagamento>
   </soap:Body>
</soap:Envelope>



<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:myc="http://www.MyCompany.com/">
   <soap:Header/>
   <soap:Body>
      <myc:consultaValoresLiencimento>
         <!--Optional:-->
         <myc:consultaValoresLiencimentoRequest>
            <!--Optional:-->
            <myc:codigoUsuario>?</myc:codigoUsuario>
            <!--Optional:-->
            <myc:senhaUsuario>?</myc:senhaUsuario>
            <!--Optional:-->
            <myc:codigoOperacao>?</myc:codigoOperacao>
            <!--Optional:-->
            <myc:paramPlaca>?</myc:paramPlaca>
            <!--Optional:-->
            <myc:paramChassi>?</myc:paramChassi>
            <!--Optional:-->
            <myc:paramRenavam>?</myc:paramRenavam>
         </myc:consultaValoresLiencimentoRequest>
      </myc:consultaValoresLiencimento>
   </soap:Body>
</soap:Envelope>



<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:myc="http://www.MyCompany.com/">
   <soap:Header/>
   <soap:Body>
      <myc:ConsultaVeicMotorCambioBIN>
         <!--Optional:-->
         <myc:ConsultaVeicMotorCambioBINRequest>
            <!--Optional:-->
            <myc:codigoUsuario>?</myc:codigoUsuario>
            <!--Optional:-->
            <myc:senhaUsuario>?</myc:senhaUsuario>
            <!--Optional:-->
            <myc:codigoOperacao>?</myc:codigoOperacao>
            <!--Optional:-->
            <myc:tipoArgumento>?</myc:tipoArgumento>
            <!--Optional:-->
            <myc:ARGUMENT>?</myc:ARGUMENT>
            <!--Optional:-->
            <myc:NUMERO_DO_LOTE>?</myc:NUMERO_DO_LOTE>
         </myc:ConsultaVeicMotorCambioBINRequest>
      </myc:ConsultaVeicMotorCambioBIN>
   </soap:Body>
</soap:Envelope>


<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:myc="http://www.MyCompany.com/">
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
            <myc:paramPlaca>OKS1E19</myc:paramPlaca>
            <!--Optional:-->
            <myc:paramUF></myc:paramUF>
            <!--Optional:-->
            <myc:paramChassi></myc:paramChassi>
            <!--Optional:-->
            <myc:paramRenavam></myc:paramRenavam>
         </myc:consultaVeiculoBaseBinRequest>
      </myc:consultaVeiculoBaseBin>
   </soap:Body>
</soap:Envelope>



<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:myc="http://www.MyCompany.com/">
   <soap:Header/>
   <soap:Body>
      <myc:consultaVeiculoBaseDetran>
         <!--Optional:-->
         <myc:consultaVeiculoBaseDetranRequest>
            <!--Optional:-->
            <myc:codigoUsuario>?</myc:codigoUsuario>
            <!--Optional:-->
            <myc:senhaUsuario>?</myc:senhaUsuario>
            <!--Optional:-->
            <myc:codigoOperacao>?</myc:codigoOperacao>
            <!--Optional:-->
            <myc:paramPlaca>?</myc:paramPlaca>
            <!--Optional:-->
            <myc:paramUF>?</myc:paramUF>
            <!--Optional:-->
            <myc:paramChassi>?</myc:paramChassi>
            <!--Optional:-->
            <myc:paramRenavam>?</myc:paramRenavam>
         </myc:consultaVeiculoBaseDetranRequest>
      </myc:consultaVeiculoBaseDetran>
   </soap:Body>
</soap:Envelope>


<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:myc="http://www.MyCompany.com/">
   <soap:Header/>
   <soap:Body>
      <myc:consultaVeiculoDadosPropriet>
         <!--Optional:-->
         <myc:consultaVeiculoDadosProprietRequest>
            <!--Optional:-->
            <myc:codigoUsuario>?</myc:codigoUsuario>
            <!--Optional:-->
            <myc:senhaUsuario>?</myc:senhaUsuario>
            <!--Optional:-->
            <myc:codigoOperacao>?</myc:codigoOperacao>
            <!--Optional:-->
            <myc:paramPlaca>?</myc:paramPlaca>
            <!--Optional:-->
            <myc:paramUF>?</myc:paramUF>
            <!--Optional:-->
            <myc:paramChassi>?</myc:paramChassi>
            <!--Optional:-->
            <myc:paramRenavam>?</myc:paramRenavam>
         </myc:consultaVeiculoDadosProprietRequest>
      </myc:consultaVeiculoDadosPropriet>
   </soap:Body>
</soap:Envelope>



<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:myc="http://www.MyCompany.com/">
   <soap:Header/>
   <soap:Body>
      <myc:listarMulta>
         <!--Optional:-->
         <myc:listarMultaRequest>
            <!--Optional:-->
            <myc:codigoUsuario>?</myc:codigoUsuario>
            <!--Optional:-->
            <myc:senhaUsuario>?</myc:senhaUsuario>
            <!--Optional:-->
            <myc:codigoOperacao>?</myc:codigoOperacao>
            <!--Optional:-->
            <myc:placaVeiculo>?</myc:placaVeiculo>
            <!--Optional:-->
            <myc:placaVeiculo1>?</myc:placaVeiculo1>
         </myc:listarMultaRequest>
      </myc:listarMulta>
   </soap:Body>
</soap:Envelope>



<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:myc="http://www.MyCompany.com/">
   <soap:Header/>
   <soap:Body>
      <myc:listarTaxasPagas>
         <!--Optional:-->
         <myc:listarTaxasPagasRequest>
            <!--Optional:-->
            <myc:codigoUsuario>?</myc:codigoUsuario>
            <!--Optional:-->
            <myc:senhaUsuario>?</myc:senhaUsuario>
            <!--Optional:-->
            <myc:codigoOperacao>?</myc:codigoOperacao>
            <!--Optional:-->
            <myc:indEntiExterna>?</myc:indEntiExterna>
            <!--Optional:-->
            <myc:Numero_CNPJ>?</myc:Numero_CNPJ>
         </myc:listarTaxasPagasRequest>
      </myc:listarTaxasPagas>
   </soap:Body>
</soap:Envelope>




*/