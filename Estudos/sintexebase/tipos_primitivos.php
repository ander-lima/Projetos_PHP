<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Alinha no topo */
            height: 100vh; /* Altura total da tela */
            margin: 0;
            text-align: center;
        }
        h1 {
            margin-top: 20px; /* Ajuste a altura conforme necessário */
        }

        .content {
            text-align: center;
            margin-top: 10px;
        }
    </style>
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Teste de Tipos Primitivos</h1>
    <div class="content">
    <?php
    // 0x = hexadeximal; 0b = binario; 0 = octal
        $hexadecimal = 0x10;
        echo "O valor 10 em hexeadecimal é: $hexadecimal <br>";
        var_dump ($hexadecimal);

        $binario = 0b10;
        echo "O valor 10 em binario é: $binario <br>";
        var_dump ($binario);

        $octal = 010;
        echo "O valor 10 em octal é: $octal <br>";
        var_dump ($octal);



        echo "<br>";
        $string = "Ander";
        var_dump ($string);



        echo "<br>";
        $numero = 3e2; // Lê como: 3 x 10 elevado a 2 
        echo "O valor é $numero";
        var_dump ($numero);

        echo "<br>";
        $coercao = (integer) 3e2; // Força a variavel a ser de outro tipo, é chamado Coerção
        echo "O valor é $coercao";
        var_dump ($coercao);



        echo "<br>";
        $array = [1, 2, 3, 4, 5, true, 1.2, "Ander"];   
        var_dump ($array)

    ?>
</body>
</html>