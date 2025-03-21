<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Manipulando Strings </title>
</head>
<body>
    <?php
        $nome = "Ander";
        $sobrenome = 'Lima';
        echo "$nome $sobrenome \u{1F418}";

        echo "<br>";
        echo '$nome $sobrenome \u{1F418}';

        echo "<br>";
        const ESTADO = "Paraná";
        echo "Moro no " . ESTADO;

        echo "<br>";
        echo "Estou no ano de " . date('Y');
        
        echo "<br>";
        echo "$nome  \"Programador\" $sobrenome"; //Sequencia de escape é a unica forma de inserir aspas duplas dentro de duplas

    ?>
</body>
</html>