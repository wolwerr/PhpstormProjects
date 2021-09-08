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
    krsort($v);   //sort para ordem crescente e rsort para ordem descrescente
    print_r($v);        // asort é usado para ordenar os elementos, porém não modifica o índice.
                        // arsorte inverte a ordem
                        // ksort ordena os indices em crescente
                        // krsort ordena os indices em descrescente
    ?>
    </pre>
</div>
</body>
</html>