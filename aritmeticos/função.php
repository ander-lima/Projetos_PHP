<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas</title>
</head>
<body>
    <?php
   
    //abs - Valor Absoluto (distância até o zero na reta numérica)
    $abs = abs(-2000);
    echo "Valor absoluto de -2000 é: $abs  <br>"; //resultado = 2000   

    //base_convert - Converter para outra base 
    $baseConvert = base_convert(250, 10, 2);
    echo "Convertendo 250 da base 10 para 2: $baseConvert <br>";

    //ceil(), floor(), round() - Arredondamento 

    //hypot() - Calcula hipotenusa ao receber cateto 

    //intdiv() - divisão inteira
    $intdiv = intdiv(5, 2);
    echo "A divisão inteira de 5 por 2 é: $intdiv <br>";

    //min(), max() - Valor minimo e máximo de uma sequencia

    //pi() - Mostra valor de pi

    //sin(), con(), tan() - Seno, Cosseno e Tangente

    //sqrt() - Raiz quadrada


    ?>    
</body>
</html>