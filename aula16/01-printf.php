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
    $p = "Leite";
    $pr = 4.5;
    echo "O $p custa R$ ". number_format($pr,2);
    printf ("<br>O %s custa R$ %.2f", $p, $pr);
    ?>
</div>
</body>
</html>