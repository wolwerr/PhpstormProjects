<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
<?php
$n1 = $_GET["a"];
$n2 = $_GET["b"];
echo "<h2><br/>Valores recebidos $n1 e $n2</h2>";
$m = ($n1 + $n2) / 2;
echo "<br/>A soma vale ". ($n1+$n2);

echo "<br/>A subtração vale ". ($n1-$n2);

echo "<br/>A multiplicação vale ". ($n1*$n2);

echo "<br/>A divisão vale ". ($n1/$n2);

echo "<br/>O resto vale ". ($n1%$n2);

echo "<br/>A média é igual a ". ($m);
?>
</div>
</body>
</html>