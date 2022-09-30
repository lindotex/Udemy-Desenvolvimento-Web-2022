<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
    <h2>Posso doar sangue?</h2>

    <?php
        $idade = 70;
        $peso = 53;

        $atende_requisitos = false;

        $idade_aux = $idade >69 ? false : ( $idade >18 ? true : false );
        $peso_aux = $peso > 50 ? true : false;

        $resposta = $idade_aux && $peso_aux ? 'Sim' : 'Nao';
    ?>

    <p>Idade Informada: <?= $idade?></p>
    <p>Peso Informado: <?= $peso?></p>

    <p>Posso doar sangue? Resposta: <?= $resposta?></p>

<body>


</body>
</html>

