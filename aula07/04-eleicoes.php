<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
    $ano = $_GET["an"];
    $idade = 2021 - $ano;
    echo "Quem nasceu em $ano tem idade de $idade anos";
    $tipo = ($idade>=18 && $idade<65)? "Voto obrigatório":"Voto não obrigatório";
    echo "<br/>E dessa forma seu voto é: $tipo";
?>
</body>
</html>