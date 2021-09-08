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
    $v[] = "O";
    // array_push($v,7); para incluir um elemento usando pilha
    // array_pop($v);   para retirar o ultimo elemento usando pilha
    print_r($v);
    ?>
    </pre>
</div>
</body>
</html>