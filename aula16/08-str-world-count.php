<!DOCTYPE html>
<html lang="br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
<div>
    <?php
        $frase = "Eu vou estudar PHP agora";
        $cont = str_word_count($frase, 2);
        print_r($cont);
    ?>
</div>
</body>
</html>