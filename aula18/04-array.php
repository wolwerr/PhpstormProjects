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
    $v = array(3=>5,
               1=>9,
               0=>8,
               7=>7);
    $v[] = 8;
    unset($v[0]);
    print_r($v);
    ?>
    </pre>
</div>
</body>
</html>