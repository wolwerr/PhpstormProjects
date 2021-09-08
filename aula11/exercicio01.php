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
    $c = 10;
    while ($c >= 1){
        echo $c . "<br>";
        $c -= 2;
    }

    ?>
</div>
</body>
</html>