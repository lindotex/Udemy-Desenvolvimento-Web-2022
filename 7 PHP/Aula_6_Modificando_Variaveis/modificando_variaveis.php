<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis Prática</title>
</head>
    <?php

        //string
        $nome = 'Alisson lindote Novais';

        //int
        $idade = '29 anos';

        //float
        $peso = '82,5 kg';

        //boolean
        $fumante = true;

        // lógica ---- //
        $idade = '30';
        $idade = '31';
        $idade = '32';
        $idade = '33'; //Variavel assumirá o ultimo valor atribuido a ela na cadeia de códigos de forma gravitacional.

    ?>

    <h1>Ficha cadastral</h1>
    <br>
    <p>Nome: <?= $nome?></p> <!-- tag de impressão -->
    <p>Idade: <?= $idade?></p>
    <p>Peso: <?= $peso?></p>
    <p>Fumante: <?= $fumante?></p>

<body>


</body>
</html>

