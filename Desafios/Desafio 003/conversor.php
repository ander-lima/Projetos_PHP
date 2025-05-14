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
        <!-- Versão Ander
        <?php 
        
            $preco = $_GET["preco"];
            $preco = str_replace(",", ".", $preco); // Substituindo virgula por ponto
            $preco = (float) $preco; // Converter o valor de 'preco' para float
            $convertido = $preco / 5.74;

            echo "Seus R$" . number_format($preco, 2) . " equivalem a US$" . number_format($convertido, 2) . " em dólar";
            
        ?>
        -->
    
        <?php 
        //Versão Professor
     
            $preco = $_GET["preco"];
            //$preco = str_replace(",", ".", $preco); // Substituindo virgula por ponto
            $preco = (float) $preco; // Converter o valor de 'preco' para float
            $convertido = $preco / 5.00;

            //echo "Seus R\$" . number_format($preco, 2, ",",  ".") . " equivalem a US\$" . number_format($convertido, 2, ",", ".");                
    
            
            //Formatação de moedas com internalização!
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Seus " . numfmt_format_currency($padrao, $preco, "BRL") . " valem " . numfmt_format_currency($padrao, $preco, "USD") . " em dólar";

        ?>
        <button onclick="javascript:window.location.href='index.php'">Voltar</button>
    </main>
</body>
</html>