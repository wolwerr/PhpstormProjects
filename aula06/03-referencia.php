<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
    $a = 3;
    $b = &$a;
    $b += 5;
    echo "<br/> A variavel A vale $a";
    echo "<br/> A varialel B vale $b";
?>
</body>
</html>