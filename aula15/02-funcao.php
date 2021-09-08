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
        //include_once
        //require_once
        //include
        require "funcoes.php";
        echo "<h1>Testando novas funcoes</h1>";
        ola();
        mostraValor(4);
        echo "<h2>Finalizando programa...</h2>"
    ?>
</div>
</body>
</html>