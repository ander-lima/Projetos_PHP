<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 003</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <form action="conversor.php" method="get">
            <label for="preco">Valor R$: </label>
            <input type="text" id="preco" name="preco" placeholder="0,00" pattern="\d+(\,\d{1,2})?" required>
            <input type="submit" value="Converter">
    </main>
</body>
</html>