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
    $t = "Aqui temos um texto gigante para mostrar o funcionamento do php worldwrap...";
    $r = wordwrap($t, 5, "<br/>\n", true);
    echo $r;

    ?>
</div>
</body>
</html>