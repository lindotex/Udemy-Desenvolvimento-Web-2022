<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_basico</title>
</head>
    <h2>array_basico</h2>

    <?php

        // Arrays Sequenciais (numericos)

            // Primeira forma de declarar Array:
            $lista_frutas = array(
                'Banana',
                'Maçã',
                'Morango',
                'Uva',
                'Abacate'
            );

            //Segunda forma de declarar Array:
            $lista_de_frutas = [
                'Banana',
                'Maçã',
                'Morango',
                'Uva',
                'Abacate'
            ];

            $lista_frutas[] = 'Abacaxi';

            echo '<hr/>';
            echo '<pre/>'; // Formata a estrutura do array para impressao.
            var_dump($lista_frutas); //printa de forma detalhada o array no DOM
            echo '<pre/>';
            echo '<hr/>';
            echo '<pre/>';
            print_r($lista_frutas); //printa o Array resumido

            //imprimindo um array por indice:

            echo '<hr/>';
            echo $lista_de_frutas[2];
            echo '<hr/>';
            echo $lista_de_frutas[3];
        //

        // Arrys Associativos (não numerica)

            $lista_frutas_assoc = array(
                'a'=>'Banana',
                'b'=>'Maçã',
                'c'=>'Morango',
                'd'=>'Uva',
                'e'=>'Abacate'
            );

            echo '<hr/>';
            echo '<pre/>';
            var_dump($lista_frutas_assoc);
            echo '<hr/>';
            echo '<pre/>';
            print_r($lista_frutas_assoc);

            echo '<hr/>';
            echo $lista_frutas_assoc['b'];
        //

    ?>


<body>


</body>
</html>

