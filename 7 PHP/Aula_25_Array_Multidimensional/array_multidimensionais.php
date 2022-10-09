<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_multidimensionais</title>
</head>
    <h2>array_multidimensionais</h2>

    <?php

        $lista_coisas = [];

        $lista_coisas['frutas'] = [
            '1'=>'Banana',
            '2'=>'Maca',
            '3'=>'Morgango',
            '4'=>'Uva'
        ];

        $lista_coisas['pessoas'] = [
            '1'=>'Joao',
            '2'=>'Jose',
            '3'=>'Joaquim',
        ];

        echo '<hr/>';
        echo '<pre/>';
        print_r($lista_coisas);
        echo '<hr/>';
        echo $lista_coisas['pessoas'][2] . ' ' . $lista_coisas['frutas'][3];


    ?>


<body>


</body>
</html>

