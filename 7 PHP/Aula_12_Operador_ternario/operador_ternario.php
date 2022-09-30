<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operador_ternario</title>
</head>
    <?php
        $usuario_cartao2 = false;
        $valor_compra2 = 300.00;

        $valor_frete2 = 50.00;
        $desconto_frete2 = false;
        $desconto2 = 'Nao';

        $valor_frete2_aux = $usuario_cartao2 && $valor_compra2 >= 400 ? 0 : ($usuario_cartao2 && $valor_compra2 >= 300 ? 10 :
        ($usuario_cartao2 && $valor_compra2 >= 100 ? 25 : $valor_frete2));

        $desconto_frete2 = $valor_frete2 != $valor_frete2_aux ? true : false;
        $valor_frete2 = $valor_frete2_aux;

        $desconto2 = $valor_frete2 > 0 ? 'NAO' : 'SIM';

        $valor_total2 = $valor_compra2 + $valor_frete2_aux

        // if($usuario_cartao2 && $valor_compra2 >= 400.00){
        //     $valor_frete2 = 0;
        //     $valor_total2 = $valor_compra2 + $valor_frete2;
        //     $desconto_frete2 = true;
        //     $desconto2 = 'Sim';
        //     } else if ($usuario_cartao2 && $valor_compra2 >= 300.00) {
        //         $valor_frete2 = 10;
        //         $valor_total2 = $valor_compra2 + $valor_frete2;
        //         $desconto_frete2 = true;
        //         $desconto2 = 'Sim';
        //         } else if($usuario_cartao2 && $valor_compra2 >= 100.00){
        //             $valor_frete2 = 25;
        //             $valor_total2 = $valor_compra2 + $valor_frete2;
        //             $desconto_frete2 = true;
        //             $desconto2 = 'Sim';
        // } else{
        //     $valor_total2 = $valor_compra2 + $valor_frete2;
        // }

    ?>
    <hr/>
    <h2>Detalhes do pedido 2</h2>
    <p>O usuario possui cartao da loja? <?= $usuario_cartao2 ? 'Sim': 'Nao';?></p>
    <?php
        //OPERADOR TERNARIO
        // <condicao> ? true : false

        // if($usuario_cartao2){
        //     echo 'Sim';
        // } else {
        //     echo 'Nao';
        // }
    ?>
    <p>Valor da Compra: R$ <?=$valor_compra2?></p>
    <p>Valor pago no frete: R$<?= $valor_frete2?></p>
    <p>Frete Gratis: <?= $desconto2 ?></p>
    <p>Valor total da compra foi: R$<?= $valor_total2?></p>

    <hr>


<body>


</body>
</html>

