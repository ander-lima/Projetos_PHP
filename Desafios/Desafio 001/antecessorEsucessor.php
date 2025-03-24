<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php
            // VERSÃO: ANDER E PROFESSOR SÃO IDENTICAS
            $numero = $_REQUEST["numero"] ?? 0;
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;

            echo "O número escolhido foi: $numero <br>";
            echo "O seu antecessor é: $antecessor <br>";
            echo "O seu sucessor é: $sucessor";

            //OBS: É possível fazer sem variáveis antecessor ou sucessor dessa forma:
            //echo "O seu antecessor é ". $numero -1 ." <br>"

        ?>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
        <!-- <button onclick="javascript:history.go(-1)"> Voltar</button> -->

    </main>        
</body>
</html>
