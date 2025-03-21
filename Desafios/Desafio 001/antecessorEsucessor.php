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
            $numero = (int) $_GET["numero"];
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;

            echo "O número escolhido foi: $numero <br>";
            echo "O seu antecessor é: $antecessor <br>";
            echo "O seu sucessor é: $sucessor";
        ?>
        <p><a href="javascript:history.go(-1)">← Voltar</a></p>
    </main>        
</body>
</html>
