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
        $num = $_GET["num"];
        if( $num % 3 === 0 && $num % 5 === 0 ){
            echo "Esse múmero é divisivel por 3 e por 5";
        }else{
            echo "Esse múmero não é divisivel por 3 ou por 5";
        }

    ?>
</div>
</body>
</html>