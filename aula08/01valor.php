<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
    $valor = $_GET["v"];
    $rq = sqrt($valor);
    echo "A raiz quadrade de $valor é ". number_format($rq,2);
?>

<a href="01-exercicio.html">Voltar</a>
</body>
</html>