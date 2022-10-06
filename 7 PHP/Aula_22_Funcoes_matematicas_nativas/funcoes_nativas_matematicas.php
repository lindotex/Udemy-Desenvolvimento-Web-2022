<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcoes_nativas_matematicas</title>
</head>
    <h2>Funcoes_nativas_matematicas</h2>

    <div>

    </div>

    <?php

        // ceil($valor) = Arredonda o numeral para cima;
        // floor($valor) = Arredonda o numeral para baixo;
        // round($valor) = Arredonda o valor com base nas casas decimais;
        // rand($valor) = Gera um inteiro aleatorio;
        // sqrt($valor) = Retorna a Raiz quadrada;

        $num = 7.3;
        echo "Valor: $num";
        echo '<br/>';

        echo 'Funcao ceil($num) - Arredondar para cima: ';
        echo ceil($num); // arredondando pra cima
        echo '<br/>';

        echo 'Funcao floor($num)- Arredondar para baixo: ';
        echo floor($num); // arredondando pra baixo
        echo '<br/>';

        echo 'Funcao round($num)- Arredondar com base na fração: ';
        echo round($num); // arredondando dependendo da fracao
        echo '<br/>';

        echo 'Funcao sqrt($num)- Retorna a Raiz quadrada: ';
        echo sqrt($num); // Retorna a Raiz quadrada
        echo '<br/>';

    ?>


<body>


</body>
</html>

