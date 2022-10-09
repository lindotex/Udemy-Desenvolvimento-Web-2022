<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>metodos_de_pesquisa</title>
</head>
    <h2>metodos_de_pesquisa</h2>

    <?php

        //in_array()        : Retorna true/false se existe dentro do array
        //Array_search()

        $lista_frutas = [
            'Banana',
            'Maçã',
            'Morango',
            'Uva',
            '',
            '',
            'Quiwi'
        ];

        echo '<pre/>';
        print_r($lista_frutas);
        echo '<hr/>';

        // Pesquisando com in_array
        $existe = in_array('Abacate', $lista_frutas); // True: 1, False: Vazio
        if($existe){
            echo 'Sim, O valor esta presente no Array';
        } else{
            echo 'Não, O valor não esta presente no Array';
        }

        // Pesquisando com Array_search     :   Retorna o Indice do valor pesquisado, caso ele exista.


        echo '<hr/>';
        echo array_search('Abacaxi', $lista_frutas);
        echo '<br/>';
        $existe_s = array_search('Quiwi', $lista_frutas); // Retorna Null e nao False ou zero

        echo '<br/>';
        if($existe_s != null){
            echo 'Sim, O valor esta presente no Array';
        } else{
            echo 'Não, O valor não esta presente no Array';
        }

        $lista_coisas = ['frutas' => $lista_frutas];

        echo '<hr/>';
        echo "<pre/>";
        print_r($lista_coisas);

        //Pesquisa dentro de array multidimensional
        echo '<hr/>';
        echo in_array('Uva', $lista_coisas['frutas']);
        echo in_array('Melancia', $lista_coisas['frutas']);

    ?>


<body>


</body>
</html>

