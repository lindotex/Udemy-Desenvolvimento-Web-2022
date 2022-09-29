<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis Prática</title>
</head>
    <?php

        //Concatenação



        $nome = 'Jorge';
        $cor = 'verde';
        $idade = '29';
        $hobbie = 'Andar de Biscicleta';

        //Com Aspas Simples:
        //operador "." (ponto) usado na concatenação.
        echo 'Olá, ' . $nome . '.<br/> Vi que sua cor favorita é '. $cor .', estou vendo que também possui '. $idade . ' anos e que gosta de '. $hobbie;

        //ASPAS DUPLAS - Mais fácil!! (Mais lento também)

        echo '<br/>';
        echo '<br/>';
        echo '<br/>';
        echo " Olá $nome. Vi que sua cor favorita é $cor, estou vendo que tem $idade e que gosta de $hobbie";

    ?>

<body>


</body>
</html>

