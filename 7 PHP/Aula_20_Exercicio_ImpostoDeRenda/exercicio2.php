<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Imposto</title>
</head>
    <h2>Imposto</h2>

    <div>

    </div>

    <?php

    function calcularImposto($salario){

        if($salario < 1903.98){
            $imposto = 0;
            $total = $salario - $imposto ;
            echo "Seu salário final é de $total, e voce foi isento do Imposto.";

        } else if($salario < 2826.65){ // 7,5%
            $imposto = $salario * 0.075;
            $total = $salario - $imposto ;
            echo "Seu salário final é de $total, e voce pagou $imposto de Imposto, equivalente a 7,5%.";
        } else if($salario < 3751.05){ // 15%
            $imposto = $salario * 0.15;
            $total = $salario - $imposto ;
            echo "Seu salário final é de $total, e voce pagou $imposto de Imposto, equivalente a 15%.";
        } else if($salario < 4664.68){ // 22.5%
            $imposto = $salario * 0.225;
            $total = $salario - $imposto ;
            echo "Seu salário final é de $total, e voce pagou $imposto de Imposto, equivalente a 22,5%.";
        } else { // 27.5%
            $imposto = $salario * 0.275;
            $total = $salario - $imposto ;
            echo "Seu salário final é de $total, e voce pagou $imposto de Imposto, equivalente a 27,5%.";
        }

    };

    echo calcularImposto(5000);

    ?>


<body>


</body>
</html>

