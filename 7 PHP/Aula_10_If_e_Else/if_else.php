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
        echo 'Falso <br/><br/><br/><br/>';
    }

    // Comparacoes:

    ######## OPERADOR E############
    echo '<hr/><strong>Operador E</strong><br>';
    echo '<p>Ambas as variaveis sendo verdadeiras</p><br/>';
    // v e v = f
    if(3 == 3 && 10 >3){
        echo 'V x V = Comparacao Verdadeira<br/>';
    } else {
        echo 'V x V = Comparacao Falsa<br/>';
    }

    // f e v = f
    if(5 == 3 && 10 >3){
        echo ' F x V = Comparacao Verdadeira<br/>';
    } else {
        echo ' F x V = Comparacao Falsa<br/>';
    }

    ######## OPERADOR OU #############
    echo '<hr/><strong>Operador OU</strong><br/>';
    echo '<p>Uma das variaveis sendo verdadeiras</p><br/>';
    // f ou v = f
    if(3 == 3 || 10 >3){

        echo 'V x V = Comparacao Verdadeira<br/>';
    } else {
        echo 'V x V = Comparacao Falsa<br/>';
    }

    if(5 == 3 || 10 >3){
        echo ' F x V = Comparacao Verdadeira<br/>';
    } else {
        echo ' F x V = Comparacao Falsa<br/>';
    }

    ######## OPERADOR XOR #############
    echo '<hr/><strong>Operador XOR</strong><br/>';
    echo '<p>Uma das variaveis sendo falsa</p><br/>';
    // f xor v = f
    if(3 == 3 XOR 10 > 15){

        echo 'V x V = Comparacao Verdadeira<br/>';
    } else {
        echo 'V x V = Comparacao Falsa<br/>';
    }

    if(5 == 3 XOR 10 > 15){
        echo ' F x V = Comparacao Verdadeira<br/>';
    } else {
        echo ' F x V = Comparacao Falsa<br/>';
    }

    ######## OPERADOR != #############
    echo '<hr/><strong>Operador !=</strong><br/>';
    echo '<p>Inverte o resultado sendo retornada pela expressao</p><br/>';
    // f xor v = f
    if(!('a' == 'b')){

        echo 'V x V = Comparacao Verdadeira<br/>';
    } else {
        echo 'V x V = Comparacao Falsa<br/>';
    }

    // No mundo real
    // Usando o If e Else para calcular descontos num frete.

    $usuario_cartao = true;
    $valor_compra = 99.00;

    $valor_frete = 50.00;
    $desconto_frete = false;
    $desconto = 'Nao';

    if($usuario_cartao && $valor_compra > 100.00){
        $valor_frete = 0;
        $valor_total = $valor_compra + $valor_frete;
        $desconto_frete = true;
        $desconto = 'Sim';
    } else {
        $valor_total = $valor_compra + $valor_frete;
    }

    ?>
    <hr/>
    <h2>Detalhes do pedido</h2>
    <p>O usuario possui cartao da loja?</p>
    <?php
        if($usuario_cartao){
            echo 'Sim';
        } else {
            echo 'Nao';
        }
    ?>
    <p>Valor da Compra: R$ <?=$valor_compra?></p>
    <p>Valor pago no frete: R$<?= $valor_frete?></p>
    <p>Houve desconto: <?= $desconto ?></p>
    <p>Valor total da compra foi: R$<?= $valor_total?></p>

    <hr>

    <!-- // Encadeamento de Condicoes -->

    <?php
    $usuario_cartao2 = true;
    $valor_compra2 = 199.00;

    $valor_frete2 = 50.00;
    $desconto_frete2 = false;
    $desconto2 = 'Nao';

    if($usuario_cartao2 && $valor_compra2 >= 400.00){
        $valor_frete2 = 0;
        $valor_total2 = $valor_compra2 + $valor_frete2;
        $desconto_frete2 = true;
        $desconto2 = 'Sim';
        } else if ($usuario_cartao2 && $valor_compra2 >= 300.00) {
            $valor_frete2 = 10;
            $valor_total2 = $valor_compra2 + $valor_frete2;
            $desconto_frete2 = true;
            $desconto2 = 'Sim';
            } else if($usuario_cartao2 && $valor_compra2 >= 100.00){
                $valor_frete2 = 25;
                $valor_total2 = $valor_compra2 + $valor_frete2;
                $desconto_frete2 = true;
                $desconto2 = 'Sim';
    } else{
        $valor_total2 = $valor_compra2 + $valor_frete2;
    }

    ?>
    <hr/>
    <h2>Detalhes do pedido 2</h2>
    <p>O usuario possui cartao da loja?</p>
    <?php
        if($usuario_cartao2){
            echo 'Sim';
        } else {
            echo 'Nao';
        }
    ?>
    <p>Valor da Compra: R$ <?=$valor_compra2?></p>
    <p>Valor pago no frete: R$<?= $valor_frete2?></p>
    <p>Houve desconto: <?= $desconto2 ?></p>
    <p>Valor total da compra foi: R$<?= $valor_total2?></p>

    <hr>

<body>


</body>
</html>

