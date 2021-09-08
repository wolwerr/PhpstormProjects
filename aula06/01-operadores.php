<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>
<?php
    $preco = $_GET["p"];
    echo "o preço do produto é R$ ". number_format($preco,2,",",".");
    $preco += ($preco*10/100);
    echo "<br/>O novo preço com 10% de aumento será R$". number_format($preco,2,",",".");
?>
</body>
</html>