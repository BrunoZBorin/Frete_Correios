<?php

echo $order->id;
echo '<br/>';
echo $quotation->id;
echo '<br/>';
echo $product->name;
echo '<br/>';

//Origem e destino
$cep_destino=$order->CEP_Destino;
$cep_origem=$order->CEP_Origem;

 /* DADOS DO PRODUTO A SER ENVIADO */
 $peso          = $product->weight;
 $valor         = 0;
 $tipo_do_frete = $quotation->code; //Sedex: 40010   |  Pac: 41106
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
 echo gettype($frete->Valor), " valor";
 echo '<br/>';
 echo gettype($frete->PrazoEntrega), " prazo entrega";
 echo '<br/>';
 $freight=(string)$frete->Valor;
 $deadline=(string)$frete->PrazoEntrega;
 echo gettype($freight), " valor";
 echo '<br/>';
 echo gettype($deadline), " prazo entrega";
 echo '<br/>';
 
 echo "<h1>Valor: R$ ".$freight."<br />Prazo: ".$deadline." dias</h1>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="hidden" id="product_id" name="product_id" value={{$product->id}}>
</body>
</html>