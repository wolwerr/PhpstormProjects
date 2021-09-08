<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $m = ($nota1+$nota2)/2;
    echo "A media entre $nota1 e $nota2 e $m <br/> ";

    echo "A Situação do aluno é " . (($m<6)?"REPROVADO":"APROVADO");
?>
</body>
</html>