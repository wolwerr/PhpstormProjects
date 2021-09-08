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
    function soma ($a, $b){
        return $a+$b;
    }
    $x = 3;
    $y = 8;
    $r = soma($x,$y);
    echo "A soma entre $x e $y é igual a $r";
    ?>
</div>
</body>
</html>