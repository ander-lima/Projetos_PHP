<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Valor em Dolar</h1>
    </header>
    <main>
    
        <?php 
        //Versão Professor
     
            $preco = $_GET["preco"];
           
            $preco = (float) $preco; // Converter o valor de 'preco' para float

            //Cotação vinda da API
                //Guardar período da busca
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            //REQUIIÇÃO DE API
            //Guardar dados do site do banco central
            // URL gerada no site do banco central
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);
            
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            //Conversão
            $convertido = $preco / $cotacao;
            
            //Formatação de moedas com internalização!
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Seus " . numfmt_format_currency($padrao, $preco, "BRL") . " valem " . numfmt_format_currency($padrao, $convertido, "USD") . " em dólar";

        ?>
        <button onclick="javascript:window.location.href='index.php'">Voltar</button>
    </main>
</body>
</html>