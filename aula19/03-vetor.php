<!DOCTYPE html>
<html lang="br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
<div>
    <pre>
    <?php
    $v = array("A", "J", "M", "X", "K");
    print_r($v);
    //array_unshift($v,"O"); // usado para incluir um elemento no começo da fila
    array_shift($v); // usado para retirar um elemento no final da fila
    print_r($v);
    ?>
    </pre>
</div>
</body>
</html>