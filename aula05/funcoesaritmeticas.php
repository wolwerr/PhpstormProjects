<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <title>Funções Aritimeticas em PHP</title>
    <style>
        h2 {
            font: 12pt Arial;
            color: blue;
        }
    </style>
</head>
<body>
<div>
<?php
    $v1 = $_GET["x"];
    $v2 = $_GET["y"];


    echo "<h2>Valores recebidos: $v1 e $v2</h2>";
    echo "O valor absoluto de $v2 é ". abs($v2);
    echo "<br/>O valor de $v1<sup>$v2</sup> é: ". pow($v1, $v2);
    echo "<br/>A raiz quadrada de $v1 é: ". sqrt($v1);
    echo "<br/>O valor de $v2 arredondado é: ". round($v2); // ceil = arredonda sempre para cima e o floor arredonda sempre para baixo
    echo "<br/>A parte inteira de $v2 é: ". intval($v2);
    echo "<br/>O valor de $v1 em moeda é R$ ". number_format($v1,2,",", ".");
?>
</div>
</body>
</html>