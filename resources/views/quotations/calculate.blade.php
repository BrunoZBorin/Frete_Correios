<?php

//Origem e destino
$cep_destino=$order->CEP_Destino;
$cep_origem=$order->CEP_Origem;

 /* DADOS DO PRODUTO A SER ENVIADO */
 $peso          = $product->weight;
 $valor         = 0;
 $tipo_do_frete = $code; //Sedex: 40010   |  Pac: 41106
 $altura        = $product->height;
 $largura       = $product->width;
 $comprimento   = $product->length;


 $url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?";
 $url .= "nCdEmpresa=";
 $url .= "&sDsSenha=";
 $url .= "&sCepOrigem=" . $cep_origem;
 $url .= "&sCepDestino=" . $cep_destino;
 $url .= "&nVlPeso=" . $peso;
 $url .= "&nVlLargura=" . $largura;
 $url .= "&nVlAltura=" . $altura;
 $url .= "&nCdFormato=1";
 $url .= "&nVlComprimento=" . $comprimento;
 $url .= "&sCdMaoProria=n";
 $url .= "&nVlValorDeclarado=" . $valor;
 $url .= "&sCdAvisoRecebimento=n";
 $url .= "&nCdServico=" . $tipo_do_frete;
 $url .= "&nVlDiametro=0";
 $url .= "&StrRetorno=xml";


 $xml = simplexml_load_file($url);

 $frete =  $xml->cServico;
 $freight=(string)$frete->Valor;
 $deadline=(string)$frete->PrazoEntrega;
 
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Cotação</title>
 </head>
 <body>
 
 <form method="post" action='/quotations/add' id='dateForm'>
 {{ csrf_field() }} 
    
    <input type="hidden" name="code" value="{{$code}}" id="code">
    <input type="hidden" name="order_id" value="{{$order->id}}" id="code">
    <input type="hidden" name="freight" value="{{$freight}}" id="freight">
    <input type="hidden" name="deadline" value="{{$deadline}}" id="deadline">
 
 </form>   
<script>
    document.getElementById('dateForm').submit()
</script>
    
 </body>
 </html>-->
 