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
        $nota1 =  $_GET["n1"];
        $nota2 =  $_GET["n2"];
        $media = ($nota1+$nota2)/2;
        echo "A média entre <span class='foco'>$nota1</span> e <span class='foco'>$nota2</span> é igual a <span class='foco'>$media</span><br/>";

        if($media >= 7){
            $notafinal = "APROVADO";
        }
        elseif (($media >= 5 && $media < 6.9)) {
                $notafinal = "RECUPERAÇÃO";
            } else {
                $notafinal = "REPROVADO";
            }

        echo "Situação do aluno: $notafinal";
    ?>
    <br/>
    <button onclick="location.href='exercicio03.html'">Voltar</button>

</div>
</body>
</html>