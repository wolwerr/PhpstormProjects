<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php

    $x = "abc";
    $$x = "def";
    echo "O conteudo da variavel X é $x";
    echo "<br/>A variavel ABC criada recebeu o valor $abc";

?>
</body>
</html>