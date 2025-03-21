<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retorno</title>
    <link rel ="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "Sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";
            echo "Olá <strong> $nome $sobrenome! </strong> Bem vindo ao meu site \u{1F58A}";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
    </main>    
</body>
</html>