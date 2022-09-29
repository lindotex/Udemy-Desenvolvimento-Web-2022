<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If e Else</title>
</head>
    <?php

    //Sintaxe do comando if_else.

    // if(condicao){
    //     //logica a ser executada
    // } else(condicao//opicional){
    //     // Lógica a ser executada caso nao atenda o if.
    // }

    //Exemplo:

        // Operador Igual ==
    if(2 == '2'){ //Igualdade : Mesmo numero, mas o 2 é int e '2' é string! dá Verdadeiro.
        echo 'Verdadeiro <br>';
    } else {
        echo 'Falso <br>';
    }
        // Operadores Diferent  != ou <>
    if('x' != 'x'){ //Diferente: Mesma letra 'x', dá falso.
        echo 'Verdadeiro <br>';
    } else {
        echo 'Falso <br>';
    }

    if(5 <> 6){ //Diferente: Mesma letra 'x', dá Verdadeiro.
        echo 'Verdadeiro <br>';
    } else {
        echo 'Falso <br>';
    }

         // Operador Identico ===
    if(2 === '2'){ //Identico: Mesmo numero, mas o 2 é int e '2' é string! dá falso.
        echo 'Verdadeiro <br>';
    } else {
        echo 'Falso <br>';
    }
        // Operador Não Identico !==
    if(2 !== '2'){ //Não Identico: Mesmo numero, mas o 2 é int e '2' é string! dá Verdadeiro.
        echo 'Verdadeiro <br>';
    } else {
        echo 'Falso <br>';
    }
        // Operador menor que <
    if(18 < 20){ //Menor que: dá Verdadeiro.
        echo 'Verdadeiro <br>';
    } else {
        echo 'Falso <br>';
    }
        // Operador Maior que <
    if(18 > 20){ //Menor que: dá Falso.
        echo 'Verdadeiro <br>';
    } else {
        echo 'Falso <br>';
    }
        // Operador menor igual que <=
    if(18 <= 20){ //Menor que: dá Verdadeiro.
        echo 'Verdadeiro <br>';
    } else {
        echo 'Falso <br>';
    }
        // Operador Maior igual que <=
    if(20 >= 20){ //Menor que: dá Verdadeiro.
        echo 'Verdadeiro <br>';
    } else {
        echo 'Falso <br>';
    }



    ?>

<body>


</body>
</html>

