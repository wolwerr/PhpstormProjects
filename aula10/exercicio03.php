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
    $regiao = $_GET["estados"];


    switch ($regiao) {
        case "norte":
        echo "Região Norte";
            break;
        case "nordeste":
        echo "Região Nordeste";
            break;
        case "centrooeste":
            echo "Região Centro-Oeste";
            break;
        case "sudeste":
            echo "Região Sudeste";
            break;
        case "sul":
            echo "Região Sul";
            break;

    }
      ?>
    <br/><a href="exercicio03.html" class="botao">Voltar</a>
</div>
</body>
</html>