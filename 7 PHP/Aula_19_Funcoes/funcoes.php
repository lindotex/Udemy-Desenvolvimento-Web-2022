<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcoes</title>
</head>
    <h2>funcoes</h2>

    <?php

    function exibirBoasVindas(){
        echo 'Bem-vindo ao curso PHP. <br/>';
    }

    //Funcao Void (sem Parametros definidos)
    exibirBoasVindas();
    exibirBoasVindas();
    exibirBoasVindas();


    function calcularAreaTerreno($largura, $comprimento){
        $area = $largura * $comprimento;
        return $area;
    }

    echo '<br/>';
    echo calcularAreaTerreno(10, 20);
    echo '<br/>';
    echo calcularAreaTerreno(30, 20);
    echo '<br/>';
    echo calcularAreaTerreno(16, 20);
    echo '<br/>';


    ?>


<body>


</body>
</html>

