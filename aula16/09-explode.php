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
        $site = "Curso em Video";
        $vetor = explode(" ",$site);
        print_r($vetor);
    ?>
</div>
</body>
</html>