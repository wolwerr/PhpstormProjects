<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];
    echo "Os valores passados foram $n1 e $n2<br/>";
    $r = ($tipo == "s") ? $n1+$n2 : $n1*$n1;
    echo "O resultado sera $r";

?>
</body>
</html>