<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manipulando_arrays</title>
</head>
    <h2>manipulando_arrays</h2>

    <?php

        // is_array([]);       // verifica se é um array
        // array_keys([]);     // Retorna todas as chaves de um array
        // sort([]);           // Ordena um array e reajusta os índices
        // asort([]);          // Ordena um array peservando os índices
        // count([]);          // Conta a quantidade de elementos de um array
        // array_merge([]);    // Funde um ou mais arrays
        // explode([]);        // Divide uma string baseada em um delimitador
        // implode([]);        // Junta elementos de um array em uma string

        $array = [1 => 'a', 9 => 'b', 18 => 'c'];


        echo '<hr/>';
        echo 'Identificando as chaves dos arrays com array_keys():';
        echo '<pre>';
        print_r($array);
        echo '<pre/>';


        // array_keys([]);
        $chaves_array = array_keys($array);
        echo '<pre>';
        print_r($chaves_array);
        echo '<pre/>';


        // sort([]);

        echo '<hr/>';
        echo 'Uso do  sort() e asort():';
        $array_sort = ['teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook'];

        echo '<pre>';
        print_r($array_sort);
        echo '<pre/>';
        echo '<br/>';

        echo 'Ordenando o Array com sort(), altera a ordem dos indices:';
        sort($array_sort);
        echo '<pre>';
        print_r($array_sort);
        echo '<pre/>';
        echo '<br/>';

        echo 'Ordenando o Array com asort(), não se altera a ordem dos indices:';
        asort($array_sort);
        echo '<pre>';
        print_r($array_sort);
        echo '<pre/>';


        // count([]);
        echo '<hr/>';
        echo 'Contando os itens do Array com count():';
        echo '<br/>';
        echo count($array_sort);

        // array_merge([]);
        echo '<hr/>';
        echo 'juntando Arrays com array_merge():';
        echo '<br/>';

        $array1 = ['osx', 'windows'];
        $array2 = array('linux');
        $array3 = ['solaris'];

        $novoArray = array_merge($array1,$array2, $array3);

        print_r($novoArray);

        // explode([]);
        echo '<hr/>';
        echo 'Separando Arrays com explode():';
        echo '<br/>';

        $string_data = '26/04/2022';
        $array_retorno = explode('/',$string_data);
        echo '<pre>';
            echo $string_data;
            print_r($array_retorno);
        echo '<pre/>';

        // implode([]);
        echo '<hr/>';
        echo 'Juntando Arrays com explode():';
        echo '<br/>';

        $array_imp = ['a','b','x','y'];
        $string_imp = implode(',',$array_imp);
        echo $string_imp;
        ?>


<body>


</body>
</html>

