<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting Tipos</title>
</head>
    <h2>Casting de Tipos</h2>

    <?php

        # CASTING DE TIPOS!
        # Podemos alterar o tipo da variavel:
        // gettype(variavel, tipoDaVariavel)

        // INT : Float ou String.
        // FLOAT : Int, String.
        // STRING : Int, String, Boolean.
        // Boolean : Int, String.

        $valor = 10;
        $valor2 = (float) $valor;
        $valor3 = (String) $valor;
        $valor4 = 15.35;
        $valor5 = (int) $valor4;
        $valor6 = (String) $valor4;

        echo 'Valor 1:' . $valor . gettype($valor);
        echo '<br/>';
        echo 'Valor 2:' . $valor2 . gettype($valor2);
        echo '<br/>';
        echo 'Valor 3:' . $valor3 . gettype($valor3);

        echo '<br/>';
        echo '<br/>';
        echo 'Valor 4:' . $valor4 . gettype($valor4);
        echo '<br/>';
        echo 'Valor 5:' . $valor5 . gettype($valor5);
        echo '<br/>';
        echo 'Valor 6:' . $valor6 . gettype($valor6);

    ?>


<body>


</body>
</html>

