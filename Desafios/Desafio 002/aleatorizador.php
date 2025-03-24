<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 002</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1>Gerador de Números Alatórios</h1>
    <p>Gerando número entre 0 e 100...</p>

    <?php 
    
            $numero = mt_rand(0,100);
            echo "<p>O valor gerado foi: <strong>$numero</strong></p>";
            
    ?>

    <form method="post">
        <button type="submit">Gerar outro</button>
    </form>

</body>
</html>