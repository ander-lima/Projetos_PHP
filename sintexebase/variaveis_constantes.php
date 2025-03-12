<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo de Variáveis e Constantes</title>
</head>
<body>
    <?php
        $nome = "Ander";
        $sobrenome = "Lima";
        const PAIS = "Brasil";
        
        //Alteração de valor da variável com o decorrer do código
        $nome = "Gabryel";

        //Tentativa de alteração de constante
        //const PAIS = "EUA";

        echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS;

        //Tipos de case recomendadas
        $CamelCase = "CamelCase";
        $snake_case = "snake_case";
    ?>
</body>
</html>